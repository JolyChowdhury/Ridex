<?php

/*

type: layout

name: Product col 4 V2
position: 10

*/

?>
<style>
    .shop-productsv2-col4-preloader {
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

    .shop-productsv2-col4-preloader.show {
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

    div#shop_products_col4_<?php print $params['id'] ?> {
        position: relative;
    }

</style>
<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<section class="section <?php print $layout_classes; ?> safe-mode nodrop edit" field="layout-col-4-v2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="shop_products_col4_<?php print $params['id'] ?>">
                <div class="shop-productsv2-col4-preloader show"></div>
            </div>
        </div>
    </div>
</section>

<?php 
    $page = 0;
    $paging = sha1("shop_products_col4_".$params['id']);
    if(isset($_GET[$paging])){
        $page = $_GET[$paging];
    }
?>

<script>
$( document ).ready(function() {
    var paramProducts ={};
    paramProducts.hide_paging=true;
    paramProducts.limit=8;
    paramProducts.col_count=4;
    paramProducts.template="skin-2";
    paramProducts.page_number=<?=$page?>;
    mw.load_module('shop/productsv2','#shop_products_col4_<?php print $params['id'] ?>',null,paramProducts);
});
</script>
