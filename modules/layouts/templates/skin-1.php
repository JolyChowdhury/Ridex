<?php

/*

type:layout

name: simple title 

position: 4

*/


?>

<?php
if (!$classes['padding_top']){
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']){
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes ='' .$classes['padding_top'] .'' .$classes['padding_bottom'] . '';
?>

<?php
$title = 'Your Title Here';
if (page_title()){
    $title = page_title();
}
?>

<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><?php echo $title; ?><span class="heading_text">.</span></h1>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="collection-item-single">
                            <div class="collection-media">
                                <img src="<?php print template_url();?> assets/image/collection-1.webp" alt="collection-thumbnail">
                                <div class="item-quantity-badge">
                                    20 item
                                </div>
                            </div>
                            <div class="collection-title">
                                <p>action games</p>
                                <a href="collection-single.html" class="main-btn">shop the collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="collection-item-single">
                            <div class="collection-media">
                                <img src="<?php print template_url();?> assets/image/collection-1.webp" alt="collection-thumbnail">
                                <div class="item-quantity-badge">
                                    20 item
                                </div>
                            </div>
                            <div class="collection-title">
                                <p>action games</p>
                                <a href="collection-single.html" class="main-btn">shop the collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="collection-item-single">
                            <div class="collection-media">
                                <img src="<?php print template_url();?> assets/image/collection-1.webp" alt="collection-thumbnail">
                                <div class="item-quantity-badge">
                                    20 item
                                </div>
                            </div>
                            <div class="collection-title">
                                <p>action games</p>
                                <a href="collection-single.html" class="main-btn">shop the collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="collection-item-single">
                            <div class="collection-media">
                                <img src="<?php print template_url();?> assets/image/collection-1.webp" alt="collection-thumbnail">
                                <div class="item-quantity-badge">
                                    20 item
                                </div>
                            </div>
                            <div class="collection-title">
                                <p>action games</p>
                                <a href="collection-single.html" class="main-btn">shop the collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->