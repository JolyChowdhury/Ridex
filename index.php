<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/

?>

<?php include template_dir() . "header.php";?>


<div class="edit main-wrapper" rel="content" field="ridex_content-2">


<?php
  $is_edited = \DB::table('content_fields')->where('field',"ridex_content")->where('rel_id',PAGE_ID)->first();
  if($is_edited){

    print $is_edited->value;
    ?>

<?php }else{?>

<module type="globallayouts" template="hero-slider/skin-1">
<!-- <module type="layouts" template="hero-slider/hero-slider"> -->
<module type="layouts" template="service/service">
<module type="layouts" template="top-catagory/top-catagory">
<module type="layouts" template="trending-products/trending-products">
<module type="layouts" template="graphics/graphics">
<module type="layouts" template="testimonial/testimonial">
<module type="layouts" template="products-banner/products-banner">
<module type="layouts" template="dealing-product/dealing-product">
<module type="layouts" template="blog/blog">
<module type="layouts" template="brand/brand">
<?php } ?>
</div>

<?php include template_dir() . "footer.php"; ?>
