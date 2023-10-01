<?php

/*

type: layout

name: Product With Sidebar V2

position: 4

*/

?>
<style>
    .shop-productsv2-preloader {
        border: 8px solid #f3f3f3;
        border-radius: 50%;
        border-top: 8px solid #074A74;
        border-bottom: 8px solid #074A74;
        width: 50px;
        height: 50px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        display: none;
        margin: 0 auto;
    }

    .shop-productsv2-preloader.show {
        display: block;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }



    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    div#shop_products<?php print $params['id'] ?> {
        position: relative;
    }

</style>
<section class="section safe-mode nodrop" rel="module">
    <div class="container">
        <div class="shop-container">
            <div class="row">
                <div class="col-lg-3">
                    <?php include TEMPLATE_DIR . 'layouts' . DS . "shop_sidebar.php" ?>
                </div>
                <div class="col-lg-9" id="shop_products<?php print $params['id'] ?>">
                    <div class="shop-productsv2-preloader show"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $page = 0;
    $paging = sha1("shop_products".$params['id']);
    if(isset($_GET[$paging])){
        $page = $_GET[$paging];
    }
    $categoryUrl = 'false';
    if(url_segment(0) == $GLOBALS['dt']['shop_data'][0]['url'] and url_segment(1)){
        $categoryUrl = url_segment(1);
        if(DB::table('categories')->where('url', $categoryUrl)->where('is_hidden', 0)->where('status', 1)->doesntExist()){
            return redirect()->to('/new_page')->send();
        }
    }



    $moduleId='shop_products'.$params['id'];
    if(url_param($moduleId)){
        if(isset($_GET[$moduleId])){
            $categoryUrl=$_GET[$moduleId];
        }
        if(DB::table('categories')->where('url', $categoryUrl)->where('is_hidden', 0)->where('status', 1)->doesntExist()){
            return redirect()->to('/new_page')->send();
        }
    }




    $wishlist_id = 'false';
    if(isset($_GET['wishlist_id'])){
        $wishlist_id = $_GET['wishlist_id'];
        if(DB::table('wishlist_session_products')->where('wishlist_id', $wishlist_id)->where('user_id', user_id())->doesntExist()){
            return redirect()->to('/new_page')->send();
        }
    }
    $wishlist_slug = 'false';
    if(isset($_GET['slug'])){
        $wishlist_slug = $_GET['slug'];
        if(DB::table('wishlist_link')->where('slug', $wishlist_slug)->doesntExist()){
            return redirect()->to('/new_page')->send();
        }
    }

?>
<script>
$( document ).ready(function() {
    var paramProducts ={};
    paramProducts.hide_paging=true;
    paramProducts.limit=6;
    paramProducts.col_count=3;
    paramProducts.page_number=<?=$page?>;
    paramProducts.categoryUrl="<?=$categoryUrl?>";
    paramProducts.wishlist_id="<?=$wishlist_id?>";
    paramProducts.wishlist_slug="<?=$wishlist_slug?>";
    mw.load_module('shop/productsv2','#shop_products<?php print $params['id'] ?>',null,paramProducts);
});
</script>
