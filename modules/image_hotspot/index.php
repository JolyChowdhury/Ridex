<link rel="stylesheet" href="<?php print template_url(); ?>modules/image_hotspot/css/style.css" type="text/css" />

<div class="edit" field="hotspot_product_image_<?=$params['id']?>" rel="content">
    <module type="slider" template="slickslider-skin-anipix"/>
</div>

<!-- Modal -->
<div class="modal fade tooltip-products-modal" id="hotSpotProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php _e("Select a product") ?></h5>
                <button type="button" class="close" data-dismiss="hotSpotProductModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

            <div id="productData">
                <input type="text" autocomplete="new-password" class="form-control" id="productSearch" onkeyup="getSearchProducts()" placeholder="<?php _e('Search Here...') ?>">
                <div id="productList">
                    <ul id="productResults" class="list-group-flush list-group"></ul>
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="hotSpotSaveBtn" class="btn btn-primary"><?php _e("Save") ?></button>
            </div>
        </div>
    </div>
</div>



<script>

    $(document).ready(function() {
        var editButtonId;
        var left_perc; // Declare left_perc globally
        var top_perc; // Declare top_perc globally
        <?php if(is_live_edit()){ ?>

        $(".single-slide img").click(function(e) {
            var parentDiv = $(this).parent();
            var sliderParentDivID = parentDiv.attr("id");
            var top_offset = $(this).offset().top - $(window).scrollTop();
            var left_offset = $(this).offset().left - $(window).scrollLeft();

            var top_px = Math.round((e.clientY - top_offset - 12));
            var left_px = Math.round((e.clientX - left_offset - 12));

            top_perc = top_px / $(this).height() * 100;
            left_perc = left_px / $(this).width() * 100;
            var randomInt = Math.floor(Math.random() * (1000 - 50000 + 1)) + 1; // Generate a unique ID

            var unique_id = `tooltip-action-${randomInt}`;
            editButtonId = unique_id;

            var dot = '<div class="hotspot-dot" id="' + unique_id + '" style="top: ' + top_perc + '%; left: ' + left_perc + '%;">  <span id="' + unique_id + '" class="tooltip-action" data-toggle="modal" onmouseout="hotSpotHoverout('+ unique_id +')" onmouseover="hotSpotHover('+ unique_id+')" onclick="hotSpotEdit(`' + unique_id + '`)"><i class="fa-solid fa-pen"></i></span><span id="delete_button_`' + unique_id + '`" class="tooltip-delete-action mw-tree-aditional-item-icon mdi mdi-delete" onclick="hotSpotDelete(`' + unique_id + '`)"></span></div>';

            $(dot).hide().appendTo($(this).parent()).fadeIn(350);

            $(".hotspot-dot").draggable({
                containment: ".single-slide img",
                stop: function(event, ui) {
                    var new_left_perc = parseInt($(this).css("left")) / ($(".single-slide img").width() / 100) + "%";
                    var new_top_perc = parseInt($(this).css("top")) / ($(".single-slide img").height() / 100) + "%";
                    var output = 'Top: ' + parseInt(new_top_perc) + '%, Left: ' + parseInt(new_left_perc) + '%';

                    $(this).css("left", parseInt($(this).css("left")) / ($(".single-slide img").width() / 100) + "%");
                    $(this).css("top", parseInt($(this).css("top")) / ($(".single-slide img").height() / 100) + "%");

                    $('.output').html('CSS Position: ' + output);
                    // Call the AJAX request for draggable
                    var withoutnew_left_perc = new_left_perc.replace(/%/g, "");
                    var withoutnew_top_perc = new_top_perc.replace(/%/g, "");
                    // Call the AJAX request for draggable
                    dragableAjax(withoutnew_left_perc, withoutnew_top_perc, unique_id);
                },
            });
            $('.output').html("CSS Position: Left: " + parseInt(left_perc) + "%; Top: " + parseInt(top_perc) + '%;');
            // Call the AJAX request for click
            callAjax(left_perc, top_perc, unique_id,sliderParentDivID);

        });
        <?php } ?>


        function callAjax(left_perc, top_perc, unique_id,sliderParentDivID) {
            $.ajax({
                url: "<?php echo api_url('hot_spot_details'); ?>",
                type: 'POST',
                data: {
                    left_perc: left_perc,
                    top_perc: top_perc,
                    hotSpotid: unique_id,
                    sliderParentDivID:sliderParentDivID,
                    unique_id: "<?php echo $params['id'] ?>"
                }
            });
        }

        $('#hotSpotProductModal .close').on('click', function() {
            $('#hotSpotProductModal').modal('hide');
        })

    });

    $(document).ready(function(){
        getHotSportProduct_<?php echo str_replace("-","_",$params['id'])?>();
    })
    // get hotsport products
    function getHotSportProduct_<?php echo str_replace("-","_",$params['id'])?>(){
        $.ajax({
            type: "GET",
            url: "<?= api_url('get_hotsport_data') ?>",
            data: {
                module_id: "<?php echo $params['id'] ?>"
            },
            success: function(data) {

                data.slider_data.forEach((slider_data) => {
                    var slider_id=Object.keys(slider_data)[0];
                    $("#" + data.module_id + " #" +slider_id).append(slider_data[slider_id]);
                });
            },
        });
    }


    var selectedProduct = null;

    function getSearchProducts() {
        var searchValue = $('#productSearch').val();
        $.ajax({
            type: "GET",
            url: "<?= api_url('get_search_product') ?>",
            data: {
            search_value: searchValue
            },
            success: function (data) {
                displaySearchResults(data);
            },
            error: function (response) {
            console.log(response);
            }
        });
    }
    var selectedProductId; //Declare global variable

    //display search product
    function displaySearchResults(data) {
        var productList = $('#productResults');
        productList.empty();

        if (data && data.length > 0) {
            data.forEach(function (product) {
            var listItem = $('<li class="list-group-item">').text(product.name).attr('data-product-id', product.id);
                listItem.click(function () {
                    selectedProductId = $(this).attr('data-product-id');
                    var selectedProductName = $(this).text();

                    selectedProduct = {
                        id: selectedProductId,
                        name: selectedProductName
                    };

                    $('#productSearch').val(selectedProductName);
                    productList.find('li').hide();  // Hide all li elements
                });
                productList.append(listItem);
            });
        } else {
            productList.append($('<li class="no-products-found">').text('No products found'));
        }
    }

    // Edit  hotsport product
    function hotSpotEdit(data) {
        $('#hotSpotProductModal').modal('show');
        $("#hotSpotSaveBtn").off("click").on("click", function() {
            var selectedValue = selectedProductId;
            $.ajax({
                url: "<?php echo api_url('hot_spot_details'); ?>",
                type: 'POST',
                data: {
                    product_id: selectedValue,
                    edit_id: data
                },
                success: function(data) {
                    mw.notification.success("Data save successfully");
                    $('#hotSpotProductModal').modal('hide');
                    location.reload();
                },

            });
        })
    }

    // Delete  hotsport product
    function hotSpotDelete(data) {
        $.ajax({
            url: "<?php echo api_url('hot_spot_delete'); ?>",
            type: 'POST',
            data: {
                point_id: data
            },
            success: function(data) {
                $('#' + data.data).hide();
                $('#delete_button_' + data.data).hide();
                mw.notification.success("Data deleted!");
            },
        });
    }
    <?php if(is_live_edit()){ ?>
        function dragable_data(data){
            $("#"+data).draggable({
                containment: ".single-slide img",
                stop: function(event, ui) {
                    var new_left_perc = parseInt($(this).css("left")) / ($(".single-slide img").width() / 100) + "%";
                    var new_top_perc = parseInt($(this).css("top")) / ($(".single-slide img").height() / 100) + "%";
                    var output = 'Top: ' + parseInt(new_top_perc) + '%, Left: ' + parseInt(new_left_perc) + '%';

                    $(this).css("left", parseInt($(this).css("left")) / ($(".single-slide img").width() / 100) + "%");
                    $(this).css("top", parseInt($(this).css("top")) / ($(".single-slide img").height() / 100) + "%");

                    $('.output').html('CSS Position: ' + output);
                    var withoutnew_left_perc = new_left_perc.replace(/%/g, "");
                    var withoutnew_top_perc = new_top_perc.replace(/%/g, "");
                    // Call the AJAX request for draggable
                    dragableAjax(withoutnew_left_perc, withoutnew_top_perc, data);
                },
            });


        }

        function dragableAjax(left_perc, top_perc, unique_id) {
                $.ajax({
                    url: "<?php echo api_url('drag_postion_save'); ?>",
                    type: 'POST',
                    data: {
                        left_perc: left_perc,
                        top_perc: top_perc,
                        edit_id: unique_id
                    }
                });
        }

    <?php } ?>

</script>
