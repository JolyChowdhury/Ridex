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

<div class="edit blog-main-wrapper" rel="content" field="ride_content">
    <!-- <div class="blog-item-single">
        <module type="posts" template="default"/>
        </div>
    </div> -->
    <section class="featured-product py-5">
    <module type="single_product_inner"/>
    </section>
</div>



<?php include template_dir() . "footer.php"; ?>