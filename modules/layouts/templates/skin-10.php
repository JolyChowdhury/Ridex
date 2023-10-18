<?php

/*

type: layout

name: Default

description: testimonial

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

<!-- Testimonial part start-->
<?php if (isset($data)): ?>
        <?php foreach ($data as $item) { ?>
<div class="row">
    <div class="col-lg-12">
        <div class="testimonial-wrapper mt-2">
            <div class="testimonial-item-single">
                <div class="row">
                    <!-- <div class="col-lg-8 col-sm-8"> -->
                        <div class="review-area">
                        <div class="testimonial-carousel-item-content">
                        <p><?php print $item['content']; ?></p>
                    </div>
                            <!-- <p class="review">Lorem ipsum dolor sit amet, consectetur ghii viverra maximus ornare. uis congue maximus ornare. Duis congue the printing.</p> -->
                            <h6><?php print $item['name']; ?></h6>
                            <!-- <p class="position">web designer</p> -->
                            <span><?php if (isset($item["client_role"])): ?><?php if (isset($item["client_company"])): ?>, <?php endif; ?><?php print $item['client_role']; ?><?php endif; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="testimonial-author-wrapper">
                        <?php if(isset($rating_number) && $rating_number !=0) {?>
                        <ul class="testimonial-ratings">
                            <?php for($i=1;$i<=$rating_number;$i++) {?>
                                <li><i class="fa-solid fa-star"></i></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                            <!-- <div class="tistimonial-number">
                                <span>01</span>
                            </div> -->
                            <div class="author-img">
                                <?php if ($item['client_picture']): ?>
                                <div class="testimonial-carousel-item-info-photo" style="background-image: url('<?php print thumbnail($item['client_picture'], 200, 200, true); ?>');"></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="testimonial-item-single">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="review-area">
                            <p class="review">Lorem ipsum dolor sit amet, consectetur ghii viverra maximus ornare. uis congue maximus ornare. Duis congue the printing.</p>
                            <h3>luies charls</h3>
                            <p class="position">web designer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="testimonial-author-wrapper">
                            <div class="tistimonial-number">
                                <span>01</span>
                            </div>
                            <div class="author-img">
                                <img src="<?php print template_url();?>assets/image/testimonial-author-1.webp" alt="testimonial-author">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-single">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="review-area">
                            <p class="review">Lorem ipsum dolor sit amet, consectetur ghii viverra maximus ornare. uis congue maximus ornare. Duis congue the printing.</p>
                            <h3>luies charls</h3>
                            <p class="position">web designer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="testimonial-author-wrapper">
                            <div class="tistimonial-number">
                                <span>01</span>
                            </div>
                            <div class="author-img">
                                <img src="<?php print template_url();?>assets/image/testimonial-author-1.webp" alt="testimonial-author">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-single">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="review-area">
                            <p class="review">Lorem ipsum dolor sit amet, consectetur ghii viverra maximus ornare. uis congue maximus ornare. Duis congue the printing.</p>
                            <h3>luies charls</h3>
                            <p class="position">web designer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="testimonial-author-wrapper">
                            <div class="tistimonial-number">
                                <span>01</span>
                            </div>
                            <div class="author-img">
                                <img src="<?php print template_url();?>assets/image/testimonial-author-1.webp" alt="testimonial-author">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php } ?>
    <?php else: ?>
    <?php endif; ?>
<!-- Testimonial part end-->