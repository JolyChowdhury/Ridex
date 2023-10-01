<?php

/*

type: layout
content_type: dynamic
name: Search

*/


?>

<?php include template_dir() . "header.php"; ?>
 
<?php
$keywords = '';
if (isset($_GET['keywords'])) {
    $keywords = htmlspecialchars($_GET['keywords']);
}

$searchType = '';
if (isset($_GET['search-type'])) {
    $searchType = htmlspecialchars($_GET['search-type']);
}
$ean = false;
$key = false;
$cat_id = false;

$check_ean = strlen($keywords);
if(is_numeric($keywords) and ($check_ean == 8 or $check_ean == 9 or $check_ean == 10 or $check_ean == 11 or $check_ean == 12 or $check_ean == 13)){
    $ean = $keywords;
    $posts = 0;
    if(isset($_GET['category_list']) and $_GET['category_list'] != 'all'){
        $cat_id = $_GET['category_list'];
        $products = search_products_or_blogs_count($keywords, 'product', 'ean', $_GET['category_list']);
    }else{
        $products = search_products_or_blogs_count($keywords, 'product', 'ean');
    }
}else{
    $key = $keywords;
    if(isset($_GET['category_list']) and $_GET['category_list'] != 'all'){
        $posts = 0;
        $cat_id = $_GET['category_list'];
        $products = search_products_or_blogs_count($keywords, 'product', false, $_GET['category_list']);
    }else{
        $posts = search_products_or_blogs_count($keywords, 'blog');
        $products = search_products_or_blogs_count($keywords);
    }
    
}
?>
<?php if ($searchType == 'blog' OR $searchType == ''): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="m-auto allow-drop" style="max-width: 800px;">
                        <?php //if($posts == 0 && $products == 0){ ?>
                            <!-- <h1 class="hr edit" field="search_header_empty" rel="content"><?php //_e('No Results found'); ?><span class="text-primary">.</span></h1> -->
                        <?php //}else{ ?>
                            <!-- <h1 class="hr edit" field="search_header" rel="content"><?php //_e('Results found'); ?><span class="text-primary">.</span></h1> -->
                        <?php //} ?>
                        <p class="lead"><em><?php _e('Ergebnisse der Suchabfrage'); ?></em> &ldquo;<?php print $keywords; ?>&rdquo;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section>
    <div class="container">
        <?php if ($searchType == 'blog' OR $searchType == ''): ?>
            <?php if(Config::get('custom.search_hits')==1 or !Config::get('custom.search_hits')){
                if($products != 0){?>
                    <div class="shop-search-wrapper">
                        <!-- <div class="shop-search-wrapper-header edit" field="search_product_header" rel="content" >
                            <h2 class="" style="margin-bottom:20px">Products</h2>
                        </div> -->
                        <module type="shop/productsv2" template="skin-7"
                                limit="18"
                            <?php if($cat_id){ ?>
                                cat_id="<?php print $cat_id; ?>"
                            <?php } ?>
                            <?php if($ean){ ?>
                                ean="<?php print $keywords; ?>"
                            <?php }elseif($key){ ?>
                                keyword="<?php print $key; ?>"
                            <?php }else{ ?>
                                keyword="<?php print $keywords; ?>"
                            <?php } ?>
                                description-length="70"/>
                    </div>
                <?php }
                if($posts != 0){ ?>
                    <hr>
                    <div class="shop-search-wrapper">
                        <!-- <div class="blog-search-wrapper-header edit" field="search_blog_header" rel="content" >
                            <h2 class="" style="margin-bottom:20px">Blog</h2>
                        </div> -->
                        <module type="posts" limit="18" keyword="<?php print $keywords; ?>" description-length="70"/>
                    </div>
                <?php }
            }else{
                if($posts != 0){?>
                    <div class="shop-search-wrapper">
                        <!-- <div class="blog-search-wrapper-header edit" field="search_blog_header" rel="content" >
                            <h2 class="" style="margin-bottom:20px">Blog</h2>
                        </div> -->
                        <module type="posts" limit="18" keyword="<?php print $keywords; ?>" description-length="70"/>
                    </div>
                <?php }
                if($products != 0){ ?>
                    <hr>
                    <div class="shop-search-wrapper">
                        <!-- <div class="shop-search-wrapper-header edit" field="search_product_header" rel="content" >
                            <h2 class="" style="margin-bottom:20px">Products</h2>
                        </div> -->
                        <module type="shop/productsv2" template="skin-7"
                                limit="18"
                            <?php if($cat_id){ ?>
                                cat_id="<?php print $cat_id; ?>"
                            <?php } ?>
                            <?php if($ean){ ?>
                                ean="<?php print $keywords; ?>"
                            <?php }elseif($key){ ?>
                                keyword="<?php print $key; ?>"
                            <?php }else{ ?>
                                keyword="<?php print $keywords; ?>"
                            <?php } ?>
                                description-length="70"/>
                    </div>
                <?php }
            } ?>
        <?php endif; ?>
    </div>
</section>


<?php include template_dir() . "footer.php"; ?>
