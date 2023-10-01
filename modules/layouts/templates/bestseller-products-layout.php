<?php

/*

type: layout

name: Bestseller Products

position: 10

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<section class="section best-selling-products-fetch <?php print $layout_classes; ?> safe-mode nodrop edit" field="layout-best-sellers-products-2<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <h2 class="edit" field="bestselling-title-1" rel="content">Bestselling Products</h2>
        <div class="row">
            <div class="col-md-12" id="shop_products_best_<?php print $params['id'] ?>">
                <div class="shop-productsv2-bestseller-preloader show"></div>
            </div>
        </div>
    </div>
</section>

<?php
    $page = 0;
    $paging = sha1("shop_products_best_".$params['id']);
    if(isset($_GET[$paging])){
        $page = $_GET[$paging];
    }
?>

<script>
$( document ).ready(function() {
    var paramProducts ={};
    paramProducts.limit=6;
    paramProducts.col_count=3;
    paramProducts.page_number=<?=$page?>;
    mw.load_module('shop/bestselling-products','#shop_products_best_<?php print $params['id'] ?>',null,paramProducts);
});
</script>
