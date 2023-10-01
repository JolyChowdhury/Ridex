<div class="sidebar__widget custom-sidebar-style sidebar-2">
    <h6 class=""><?php _lang("Wunschzettel"); ?></h6>
    <hr>
    <div class="sidebar-box">
        <ul class="mw-cats-menu" id="wishlist-list-header">

        </ul>
    </div>

    <?php if (is_logged()) { ?>
        <div id="wishlist-sidebar"></div>
        <p>&nbsp;</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
            Erstellen Sie eine neue Wunschliste
        </button>
    <?php } else { ?>
        <button data-toggle="modal" class="btn btn-default login-modal" data-target="#loginModal">Melden Sie sich an, um eine Wunschliste hinzuzufügen</button>
    <?php } ?>
</div>


<div class="modal addWishlist" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titel der Wunschliste</label>
                        <input type="email" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp"
                               placeholder="Enter wishlist title">
                        <small id="emailHelp" class="form-text text-muted red" style="display: none;">We'll never share
                            your email with anyone else.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary newWishlist">Schließen</button>
                <button type="button" class="btn btn-primary" onclick="create_sessions1()">Änderungen speichern</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal edittWishlist" id="exampleModalCenteredit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titel der Wunschliste</label>
                        <input type="text" class="form-control" id="exampleInputEmailedit1" aria-describedby="emailHelp"
                               placeholder="Enter wishlist title">
                        <input type="hidden" class="form-control" id="exampleInputEmailedithide1" aria-describedby="emailHelp"
                               placeholder="Enter wishlist title">
                        <small id="emailHelp" class="form-text text-muted red" style="display: none;">We'll never share
                            your email with anyone else.</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary editWishlist">Schließen</button>
                <button type="button" class="btn btn-primary" onclick="edit_sessions1()">Änderungen speichern</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $.get(`<?= api_url('get_wishlist_sessions'); ?>`, result => {
            const selected = [];
            if(result!='false'){
                result.forEach(function(session) {
                    $.post("<?= url('/') ?>/api/v1/wishlist_check", {
                        id: session['id']
                    }, (res) => {

                        if (res.success) {
                            $("#wishlist-list-header").append('<li title="' + session['name'] + '"><a href="<?=site_url()?>shop?wishlist_id=' + session["id"] + '" data-category-id="' + session['id'] + '" title="' + session['name'] + '" class="depth-0">' + session['name'] + '</a><button type="button" id="delete_sss1" class="btn" data-toggle="modal" data-name="' + session['name'] + '" ><span class="material-icons">delete</span></button><button type="button" id="edit_sss1" class="btn" data-toggle="modal" data-target="#exampleModalCenteredit1" data-name="' + session['name'] + '" ><span class="material-icons">create</span></button></li>');

                        } else {
                            $("#wishlist-list-header").append('<li title="' + session['name'] + '"><span class="depth-0">' + session['name'] + '</span><button type="button" id="delete_sss1" class="btn" data-toggle="modal" data-name="' + session['name'] + '" ><span class="material-icons">delete</span></button><button type="button" id="edit_sss1" class="btn" data-toggle="modal" data-target="#exampleModalCenteredit1" data-name="' + session['name'] + '" ><span class="material-icons">create</span></button></li>');
                        }

                    });
                });
            }
        });
    });

    function create_sessions1() {
        let title = $('#exampleInputEmail11').val();
        const emailHelp = $('#emailHelp');
        emailHelp.hide();
        if (title.trim().length > 0) {
            $.post("<?php print api_url('set_wishlist_sessions'); ?>", {title: title}, function (sessions) {
                if (sessions === 'false') {
                    emailHelp.show();
                } else {
                    location.reload();
                }
            });
        } else {
            emailHelp.show();
        }
    }

    function edit_sessions1() {
        let title = $('#exampleInputEmailedit1').val();
        let titlehide = $('#exampleInputEmailedithide1').val();
        const emailHelp = $('#emailHelp');
        emailHelp.hide();
        if (title.trim().length > 0) {
            $.post("<?php print api_url('edit_wishlist_sessions'); ?>", {title: title, titlehide: titlehide}, function (sessions) {
                if (sessions === 'false') {
                    emailHelp.show();
                } else {
                    location.reload();
                }
            });
        } else {
            emailHelp.show();
        }
    }

    $(document).on('click', '#edit_sss1', function() {

        let name = $(this).data('name');

        // console.log(name);
        // console.log(id);


        $("#exampleInputEmailedit1").val(name);
        $("#exampleInputEmailedithide1").val(name);
    });


    $(document).on('click', '#delete_sss1', function() {

        let name = $(this).data('name');

        // console.log(name);
        // console.log(id);
        $.post("<?php print api_url('delete_wishlist_sessions'); ?>", {
            name: name
        }, function(sessions) {
            if (sessions === 'false') {
                // emailHelp.show();
                location.reload();

            } else {
                location.reload();
            }
        });


    });
</script>

<script>
    jQuery('.newWishlist').on("click", function (e) {
        jQuery('.addWishlist').modal('hide');
    });
    jQuery('.editWishlist').on("click", function (e) {
        jQuery('.edittWishlist').modal('hide');
    });
</script>