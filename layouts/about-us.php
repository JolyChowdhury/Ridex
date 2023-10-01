<?php

/*

type: layout
content_type: static
name: About Us

description: About Us layout
position: 7
*/


?>
<?php include template_dir() . "header.php"; ?>
<div class="edit"  field="template_petshop_about_content_1" rel="module">
        <section class="bredcrumb" id="bredcrumb" style="background: url(<?php print template_url() ; ?>assets/image/main-slider-1.jpg)">
            <div class="container">
                <div class="about-wrapper">
                    <h1>About Us</h1>
                    <module type="breadcrumb"/>
                </div>
            </div>
        </section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-right">
                        <module type="layouts" template="elements/right-image"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="au-left">
                        <module type="layouts" template="elements/left-image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>  

<?php include template_dir() . "footer.php"; ?>