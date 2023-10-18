<div class="page-breadcumb-container shop-breadcumb">
    <div class="container">
        <div class="page-breadcumb-container-content">
            <?php if(!empty(get_content("layout_file=layouts__shop.php&id=".PAGE_ID))) : ?>
                <div class="shop-breadcumb-header">
                    <?php
                        $cat = NULL;
                        $shop = url_segment(0);

                        $current_url=url_current();
                        $cat_search_val=explode('=',$current_url);
                        if(isset($cat_search_val[1])){
                            $get_search_val=$cat_search_val[1];
                        }else{
                            $get_search_val=null;
                        }
                        if($shop == $GLOBALS['dt']['shop_data'][0]['url']){
                            $cat = url_segment(1);
                        }

                        if($cat==""){
                            $cat=null;
                        }

                        $cat=$cat??$get_search_val;
                    ?>
                    <?php if($cat){
                        ?>
                        <h1> <?php $catTitle = DB::table('categories')->where('url',$cat)->first('title'); if(isset($catTitle->title)){print($catTitle->title); } ?></h1>
                    <?php } else{ ?>
                        <h1 class="edit" rel="content" field="shop_breadcumb_header">Shop</h1>

                    <?php } ?>
                </div>
                <module type="breadcrumb"/>
            <?php endif; ?>
        </div>
    </div>
</div>
