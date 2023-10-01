<?php

/*
type: layout
name: graphics
position: 13
*/

?>

<!-- Graphics Section Start -->
<section id="graphics" class="graphics position-relative" style="background-image: url(<?php print template_url() ; ?>assets/image/graphics-banner.jpg);">
    <div class="container-fluid">
        <div class="graphics-content">
            <p class="fx-deactivate yellow-text"><?php print _lang('trending collection', 'templates/active'); ?></p>
            <div class="large-test d-flex justify-content-center align-items-center">
                <p class="fx-deactivate white-text">HIGH <span></span> END</p> <p class="yellow-text"><?php print _lang('GRAPHICS', 'templates/active'); ?></p>
            </div>
            <p class="fx-deactivate sub-heading"><?php print _lang('Get Free Game After Subscribe Our Newsletter.', 'templates/active'); ?></p>
            <module type="btn" template="bootstrap" button_style="btn-default" button_size="btn-lg" text="<?php print _lang('Shop Now', 'templates/active'); ?>" class="fx-particles-2 main-btn"/>
        </div>
    </div>   
</section>
<!-- Graphics Section End -->