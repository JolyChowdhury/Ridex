<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog 2

*/

?>
<?php include template_dir() . "header.php"; ?>
<!-- Breadcrumb Section Start -->
<section class="bredcrumb edit" id="bredcrumb" field="anipix-breadcrumb" rel="module">
    <div class="container">
        <div class="breadcrumb-area">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <module type="breadcrumb"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Start -->
<section id="blog-section" class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="ridex-sidebar">
                    <?php include TEMPLATE_DIR . 'layouts' . DS . "blog_sidebar.php" ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item-single">
                    <module type="posts" template="skin-3"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php include template_dir() . "footer.php"; ?>