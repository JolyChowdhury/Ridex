<?php

/*
type: layout
name: testimonial
position: 15
*/

?>
 <?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'fluid-p-t';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'fluid-p-b';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<!-- Testimonial Section Start -->
<section class="edit safe-mode nodrop ridex-testimonial testimonial" field="layout-testimonials-5<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="testimonial-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title d-flex justify-content-center align-items-center">
                        <h2>our clients say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <module type="testimonials" template="skin-1" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->