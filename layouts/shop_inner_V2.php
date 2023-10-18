<?php

/*

type: layout
content_type: static
name: Shop Inner V2
is_shop: y
description: Showcase single product informations.
position: 99
*/

?>

<?php include template_dir() . "header.php"; ?>
<script>
    $(document).ready(function() {
        $('.navigation-holder').addClass('not-transparent');
    })
</script>

<style>
    .shop-inner-page .dt-cdown-box {
        min-height: unset;
        margin: 0 auto;
    }

    .shop-inner-page .dt-old-price {
        gap: 10px;
    }

    .product-holder.ph-classic {
        position: relative;
        display: block !important;
        min-height: 660px;
    }

    .product-holder.ph-classic .product-info-wrapper {
        position: relative;
        display: block !important;
    }

    .product-holder.ph-classic .product-gallery {
        width: 50%;
    }

    .product-holder .product-gallery {
        margin-top: 20px;
        width: 100%;
        position: relative;
        float: left;
        margin-right: 40px;
        margin-bottom: 30px;
    }

    .product-holder.ph-classic .item-price {
        text-align: left;
    }

    .product-holder.ph-classic .item-cart {
        align-items: flex-start;
    }

    .product-holder.ph-classic .dt-cdown-box {
        margin: unset;
        margin-right: auto;
    }

    .product-holder #elevatezoom-gallery {
        margin-top: 20px;
    }

    .product-holder .elevatezoom #elevatezoom-gallery a {
        display: block;
        height: 100px;
        width: 100px;
        background-size: contain;
        background-repeat: no-repeat;
        background-origin: content-box;
        margin: 0px 0 14px 0;
        background-color: #fff;
        background-position: center center;
        border: 1px solid #efefef;
        padding: 5px;
        margin-right: 10px;
    }

    .product-holder .elevatezoom #elevatezoom-gallery .slick-arrow {
        font-size: 26px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
    }

    .product-holder .elevatezoom #elevatezoom-gallery .slick-arrow-left {
        left: 0;
    }

    .product-holder .elevatezoom #elevatezoom-gallery .slide-arrow-right {
        right: 8px;
    }

    .product-holder .elevatezoom #elevatezoom-gallery.mobile-view {
        display: none;
    }

    .product-holder.ph-classic .product-info-wrapper  .row {
        display: block !important;
    }

    .product-gallery-with-description {
        display: block !important;
    }


    .anipix-body .next-previous-content {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .anipix-body .tip.btn.btn-outline-default{
        color: #47C1BF;
    }

    .anipix-body .tip.btn.btn-outline-default i{
        margin: 0 5px;
        font-size: 12px;
        vertical-align: middle;
    }

   .product-action-btn.template{
        text-align: left;
   }

   .product-action-btn.template .item-price{
        display: inline;
   }

   .product-action-btn.template .item-cart{
        display: block;
   }

   .shop-inner-page .shop-inner-content .price input {
    margin-right: 5px;
   }

   .product-action-btn span.mw-price-item-value{
        color: #230051;
        font-size: 34px;
        font-weight: 800;
        font-style: normal;
        line-height: 1.2em;
        letter-spacing: 0.0em;
        display: inline-block;
        margin-bottom: 15px;
   }

   .product-action-btn .product-tax-text{
        color: #230051;
        font-size: 18px;
   }

   .anipix-body .shop-inner-page .product-tax-text {
        justify-content: start;
   }

   .product-action-btn .item-cart-button button:hover{
        border: 1px solid #c8bfd4;
   }

   .product-action-btn button.paypal-checkout-button svg{
        width: auto;
   }

   .product-action-btn .product-details-tab{
        width: 200px;
   }

   .product-details-tab .elevatezoom-holder{
    margin-bottom: 20px;
   }

   .product-details-tab .elevatezoom-holder img.main-image{
        width: 600px !important;
   }

   .product-details-tab .zoomContainer{
        width: 650px;
   }

   .product-details-tab a#elevatezoom{
        height: 180px;
   }

   .anipix-featured-product .product-sample-inner{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
   }

   .anipix-featured-product .product-thumbnail,
   .anipix-featured-product .product-content{
        flex-basis: 49%;
   }

   .anipix-featured-product .product-content .product-sample-title h5{
        color: #230051;
        font-size: calc(34px * 1.18);
        font-family: 'Nunito Sans';
        font-weight: 800;
        line-height: 1.2em;
        letter-spacing: 0.0em;
        text-transform: none;
        word-break: break-word;
   }

   .anipix-featured-product .product-content .product-tax-text span{
        color: #230051;
        font-size: 1.25rem;
        font-weight: 400;
        line-height: 1.6em;
        margin: 15px auto;
        max-width: 85%;
   }

   .anipix-featured-product .product-content h6.product-sample-price{
        color: #230051;
        font-size: calc(34px * 1.765);
        font-family: 'Nunito Sans';
        font-weight: 800;
        line-height: 1.2em;
        letter-spacing: 0.0em;
        word-break: break-word;
        margin-top: 0;
        margin-bottom: 20px;
   }

   .anipix-featured-product .product-content .product-sample-hover-right{
        display: none;
   }

   .anipix-featured-product .product-sample-hover-bottom a{
        border: 0;
   }

   .anipix-featured-product .product-sample-hover-bottom a i{
        font-size: 14px;
        vertical-align: middle;
   }

   .anipix-products .shop-products .liked-product-content .product-sample-content a h5{
        color: #50248f;
        font-size: 18px;
        margin-top: 15px;
        transition: color 150ms;
        -o-transition: color 150ms;
        -webkit-transition: color 0.3s;
        -moz-transition: color 0.3s;
        -ms-transition: color 0.3s;
   }

   .anipix-products .shop-products .liked-product-content .product-sample-content a h5:hover{
        color: #47C1BF;
   }

   .anipix-products .shop-products .liked-product-content h6.product-sample-price{
        font-size: 1.25rem;
        color: #50248f;
   }


   .anipix-products .product-pagination-wrapper,
   .anipix-products .shop-products .product-sample-hover-right,
   .anipix-products .shop-products .product-sample-hover-bottom,
   .anipix-featured-product span.saved-price,
   .anipix-featured-product a.quick-buy-btn{
        display: none;
   }

   .anipix-featured-product .product-single{
        margin-bottom: 0;
   }

   .anipix-body .js-popup-gallery{
    position: relative;
   }

   .anipix-body .js-popup-gallery .slick-arrow{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -30px;
        cursor: pointer;
        font-size: 25px;
        color: #230051;
   }

   .anipix-body .js-popup-gallery .slide-arrow-right.slick-arrow{
        left: inherit;
        right: -30px;
   }

   .shop-inner-page .shop-inner-content .mw-price-item {
        text-align: left;
   }

   .shop-inner-page .shop-inner-content .price {
    text-align: left;
   }

   .anipix-body span.readmore-btn{
        display: inline-block;
        padding: 9px 22px;
        margin-top: 15px;
        min-width: 118px;
        color: #ffffff;
        background-color: #50248f;
        font-size: 17px;
        font-weight: 700;
        line-height: 1.4em;
        border-radius: 30px;
        transition: all 100ms ease-in-out;
        cursor: pointer;
   }

   .anipix-body #universal-product-alert {
        margin-bottom: 30px;
    }

    .product-holder.ph-classic .description .element {
        clear: none;
    }

    .shop-inner-page .item-cart-button button {
        width: 100%;
        max-width: 530px;
        padding: 15px 40px 10px 14px;
        line-height: 1.2;
        border-radius: 23px;
        border: 1px solid #c8bfd4;
        cursor: pointer;
        background-color: transparent;
        color: #50248f;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .shop-inner-page .item-cart-button .btn.paypal-checkout-button {
        background-color: #ffd041 !important;
        color: #000 !important;
        font-size: 15px;
        font-weight: bold;
        padding-left: 0;
        border: none !important;
    }

    .shop-inner-page .item-cart-button .btn.paypal-checkout-button svg {
        width: 60px;
    }


    @media (max-width: 767px) {
        .product-holder.ph-classic .product-info-wrapper {
            display: flex !important;
            flex-direction: column;
        }

        .product-holder.ph-classic .product-gallery {
            width: 100%;
        }

        .product-holder.ph-classic .product-gallery {
            margin-top: 20px;
        }
    }

</style>

<script>
    (function () {
        var $window = $(window), $document = $(document);

        /* -- Elevate Zoom -- */
        $document.ready(function () {
            var elevateZoomTurnOn = $document.width() > 992 ? true : false;
            if (elevateZoomTurnOn) {
                $("#elevatezoom").elevateZoom({
                    gallery: 'elevatezoom-gallery',
                    cursor: "crosshair",
                    galleryActiveClass: 'active',
                    imageCrossfade: true,
                    zoomType: "inner"
                });

                //pass the images to Fancybox
                $("#elevatezoom").bind("click", function (e) {
                    var ez = $('#elevatezoom').data('elevateZoom');
                    var res = [];
                    $.each(ez.getGalleryList(), function () {
                        res.push({src: this.href});
                    });
                    $.magnificPopup.open({
                        items: res,
                        gallery: {
                            enabled: true
                        },
                        type: 'image'
                    });
                    return false;
                });
            }

            var eGallery = $('#elevatezoom-gallery');
            if (eGallery.length > 0) {
                eGallery.each(function () {
                    var el = $(this);
                    el.slick({
                        centerMode: false,
                        centerPadding: '1px',
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        arrows: true,
                        'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-line"></i></div>',
		                'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-line"></i></div>',
                        autoplay: true,
                        autoplaySpeed: 2000,
                        dots: false,
                        infinite: true,
                        responsive: [
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 3
                                }
                            }
                        ]
                    });
                });
            }
        });
        /* -- Elevate Zoom -- */
    })();
</script>

<?php
    $data = DB::table('product')
                ->where('url', url_segment(1))
                ->where('is_active', 1)
                ->join('group_product', 'product.id', 'group_product.product_id')
                ->join('categories_items', 'product.id', 'categories_items.rel_id')
                ->select('product.id', 'product.url', 'product.title', 'product.quantity', 'product.sku', 'product.position', 'product.content_body')
                ->first();
    $data = (array)$data;
    if(empty($data) or !isset($data)){
        return redirect()->to('/new_page')->send();
    }
    $next = next_content_V2($data['id'], 'next');
    $prev = prev_content_V2($data['id']);
?>

<div class="edit inner-page-empty " field="ridex-shop-inner-v2-top" rel="content">
</div>

<!-- Breadcrumb Section Start -->
<section class="bredcrumb" id="bredcrumb" style="background: url(<?php print template_url() ; ?>assets/image/main-slider-1.jpg)">
        <div class="container">
            <module type="breadcrumb"/>
        </div>
        </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Products Section Start -->
<section class="product-details shop-inner-page pb-5" id="shop-content-<?php print $data['id']; ?>">

    <!-- Next and previous product -->
    <div class="container">
        <div class="next-prev-wrapper">
            <div class="next-previous-content">
                <?php if ($prev != false) { ?>
                    <a href="<?php print $prev['url']; ?>" class="next-content tip btn btn-outline-default" data-tip="#next-tip"><i class="fas fa-chevron-left"></i><?php _e('PREV'); ?></a>

                    <div id="next-tip" style="display: none">
                        <div class="next-previous-tip-content text-center">
                            <img src="<?php print $prev['webp_image'] ?? $prev['resize_image'] ?? $prev['filename']; ?>" alt="" width="90" />
                            <h6><?php print $prev['title']; ?></h6>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($next != false) { ?>
                    <a href="<?php print $next['url']; ?>" class="prev-content tip btn btn-outline-default" data-tip="#prev-tip"><?php _e('Next'); ?><i class="fas fa-chevron-right"></i></a>
                    <div id="prev-tip" style="display: none">
                        <div class="next-previous-tip-content text-center">
                            <img src="<?php print $next['webp_image'] ?? $next['resize_image'] ?? $next['filename']; ?>" alt="" width="90" />
                            <h6><?php print $next['title']; ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">

        <?php $check_value = get_option('classic_layout', 'product_classic_layout') ?? 0; ?>
        <?php $check_readmore_value = get_option('readMoreOption', 'product_readmore_layout') ?? 0; ?>
        <?php $checkWordLimit_value = get_option('readMoreLimit', 'product_readmore_limit') ?? 0; ?>

        <!-- Product Action -->
        <?php  if($check_value == "1") : ?>
            <div class="row product-holder ph-classic">
                <div class="col-12 col-lg-12 relative product-info-wrapper">
                    <div class="product-gallery-with-description">
                        <div class="product-gallery">
                            <module type="pictures" rel="product" product-id="<?=$data['id']?>" template="skin-6" />
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-content">
                            <div class="box">
                                <div class="heading mobile-view-hide">
                                    <h2 class=""><?php print $data['title']; ?></h2>
                                </div>
                                <div class="category-list">
                                    <?php
                                    if (function_exists('category_shop_inner_show')) {
                                        echo category_shop_inner_show($data['id']);
                                    }
                                    ?>
                                </div>
                                <div class="pi-info-stock">
                                        <?php $in_stock = true;
                                        if (isset($data['quantity']) and $data['quantity'] != 'nolimit' and intval($data['quantity']) == 0) {
                                            $in_stock = false;
                                        }
                                        ?>

                                        <?php if (isset($data['sku'])) : ?>
                                            <p class="labels"><b><?php _lang("SKU Number") ?>: </b><span>#<?php print $data['sku']; ?></span></p>
                                        <?php endif; ?>

                                    <?php
                                    $data_show = Config::get('custom.isShow');
                                    if(isset($data_show) and $data_show == "null"): ?>

                                        <?php if ($in_stock == true) : ?>
                                            <p class="labels"><b><?php _lang("Verfügbarkeit") ?>:</b> <span><?php _lang("Auf Lager") ?></span></p>
                                        <?php else : ?>
                                            <p class="labels"><b><?php _lang("Verfügbarkeit") ?>:</b> <span><?php _lang("Ausverkauft") ?></span></p>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                                <div class="row desc-text">
                                    <div class="col-12">
                                        <div class="description <?php  if($check_readmore_value == "1") { echo "readmore-btn-enabled"; } ?>">
                                            <div class="typography-area">
                                                <?php print $data['content_body']; ?>
                                            </div>
                                            <?php  if($check_readmore_value == "1") { ?>
                                                <span class="readmore-btn">....mehr lesen</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <module type="shop/cart_add_V2" product-id="<?=$data['id']; ?>"/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <div class="row product-holder">
            <div class="col-lg-6 relative product-info-wrapper">
            <div class="product-gallery-with-description">
                        <div class="product-gallery">
                            <module type="pictures" rel="product" product-id="<?=$data['id']?>" template="skin-6" />
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="shop-inner-content">
                    <div class="product-content">
                        <h2 class="single-product-title"><?php print $data['title']; ?></h2>
                        <p class="product-info">
                            <a href="#">
                                <?php
                                    if (function_exists('category_shop_inner_show')) {
                                        echo category_shop_inner_show($data['id']);
                                    }
                                ?>
                            </a>
                        </p>
                        <p class="product-info"> <a href="#">
                            <?php if (isset($data['sku'])) : ?>
                                <p class="labels"><b><?php _lang("SKU Number") ?>: </b><span>#<?php print $data['sku']; ?></span></p>
                            <?php endif; ?>
                        </a></p>

                        <div class="description <?php  if($check_readmore_value == "1") { echo "readmore-btn-enabled"; } ?>">
                            <div class="typography-area">
                                <?php print $data['content_body']; ?>
                            </div>
                            <?php  if($check_readmore_value == "1") { ?>
                                <span class="readmore-btn">....mehr lesen</span>
                            <?php } ?>
                        </div>

                        <div class="product-action-btn template">
                            <module type="shop/cart_add_V2" product-id="<?=$data['id']; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Featured Product -->
        <!-- <div class="featured-product mt-5">
            <div class="featured-product-wrapper">
                <div class="row align-items-center">
                    <div class="anipix-featured-product" id="shop_products_col4_1"></div>
                </div>
            </div>
        </div> -->

        <!-- Related Products -->
        <?php
            $related_product_setting  = get_option('related_product_setting', 'related_product_on_off');
            if($related_product_setting == 1 || $related_product_setting == false){
        ?>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-heading edit" field="section-heading-<?php print rand(); ?>">
                    <h2>Dies könnte Sie auch interessieren</h2>
                </div>
            </div>
            <div class="anipix-products">
                <div class="col-md-12" id="shop_products_module">
                    <div class="shop-productsv2-module-preloader show"></div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<!-- Products Section End -->


<form action="" id="checkout_form_paypal_checkout"></form>

<script>
    $("#varianted_option").on("change", function() {
        var dataid = $("#varianted_option option:selected").attr('data-id');
        var selectedVariantImageURL = $("[image-id='" + dataid + "']").attr("href");
        $(".shop-inner-page .elevatezoom .elevatezoom-holder img").attr("href", selectedVariantImageURL);
        $(".shop-inner-page .elevatezoom .elevatezoom-holder img").attr("src", selectedVariantImageURL);
        $(".zoomWindow").css("background-image", "url('" + selectedVariantImageURL + "')");
    });

    var full_text = "";
    $(document).ready(function(){
        //$('.readmore-btn-enabled .typography-area p').contents().unwrap();
        var full_text = $('.readmore-btn-enabled .typography-area').html();
        var splittedWord = full_text.split(/\s+/).slice(0,<?php echo $checkWordLimit_value; ?>).join(" ");
        $('.readmore-btn-enabled .typography-area').html(splittedWord);


        $(".readmore-btn").on("click", function(){
            $(".description").toggleClass("readmore-btn-enabled");
            if ($(this).text() == "....mehr lesen") {
                $(this).text("... Ansicht minimieren");
                $('.description .typography-area').html(full_text);
            } else {
                $(this).text("....mehr lesen");
                $('.readmore-btn-enabled .typography-area').html(splittedWord);
            };
        });
    });

    // Deactive class layout for small screens
    if ($(window).width() < 991) {
        $('.shop-inner-page .product-holder').removeClass('ph-classic');
    }
</script>

<script>
    $(document).ajaxComplete(function(){
        $('.anipix-carousel .product-sample-image').removeClass('product-sample-image').addClass('product-media-wrapper');
    });
</script>

<!-- ##### featured product ##### -->
<?php
    $page = 0;
    $paging = sha1("shop_products_col4_1");
    if(isset($_GET[$paging])){
        $page = $_GET[$paging];
    }
?>

<script>
    $( document ).ready(function() {
        var paramProducts ={};
        paramProducts.hide_paging=true;
        paramProducts.limit=1;
        paramProducts.col_count=1;
        paramProducts.css="anipix";
        paramProducts.template="skin-1";
        paramProducts.page_number=<?=$page?>;
        mw.load_module('shop/productsv2','#shop_products_col4_1',null,paramProducts);
    });
</script>

<script>
$( document ).ready(function() {
    var paramProducts ={};
    paramProducts.hide_paging=true;
    paramProducts.limit=6;
    paramProducts.col_count=3;
    paramProducts.page_number=<?=$page?>;
    paramProducts.related_product=<?=$data['id']?>;
    mw.load_module('shop/productsv2','#shop_products_module',null,paramProducts);
});
</script>

<script>
    $(document).ajaxComplete(function(){
        $('.anipix-featured-product .shop-products .col-lg-6').removeClass('col-lg-6').addClass('col-lg-12');
        $('.anipix-featured-product .shop-products .product-sample-image').removeClass('product-sample-image').addClass('product-thumbnail');
        $('.anipix-featured-product .shop-products .promo-product-text').removeClass('promo-product-text').addClass('product-content');
        $('.anipix-featured-product a.btn.btn-primary.product-cart-icon').addClass('purple-btn');
    });
</script>

<!-- ##### related products ##### -->
<script>
    $(document).ajaxComplete(function(){
        $('.anipix-products .product-sample-wrapper').removeClass('product-sample-wrapper').addClass('related-product-single');
        $('.anipix-products .product-sample-inner .product-sample-image').removeClass('product-sample-image').addClass('related-products-media');
        $('.anipix-products .product-sample-inner .product-content').removeClass('product-content').addClass('liked-product-content');

    });
</script>

<?php include template_dir() . "footer.php"; ?>
