<?php

/*

type: layout
content_type: static
name: Clean
position: 2
is_default: true
description: Clean layout

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="bamboo_content">
<?php
  $is_edited = \DB::table('content_fields')->where('field',"bamboo_content")->where('rel_id',PAGE_ID)->first();
  if($is_edited){

    print $is_edited->value;
    ?>

<?php }else{?>
    <!-- <module type="layouts" template="skin-1"/> -->
<?php }?>
</div>

<?php include template_dir() . "footer.php"; ?>
