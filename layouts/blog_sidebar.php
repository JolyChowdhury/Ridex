<?php
$showHeader = temp_blog_collapse();
?>

<style>
    .blog-sidebar .module-categories {
        margin: 12px auto;
    }

    .blog-sidebar .module-categories ul.nav{
        max-height: 600px;
        overflow: scroll;
    }

    .blog-sidebar .module-categories ul.nav::-webkit-scrollbar {
        width: 3px;
    }

    .blog-sidebar .module-categories ul.nav::-webkit-scrollbar-thumb {
        background-color: #86bc42;
    }
</style>

<div class="<?php print @$showHeader['sidebar']; ?>">
    <div class="sidebar__widget categorySideBar blog-sidebar">
        <h6><?php _lang("Kategorien"); ?></h6>
        <hr>
        <div class="edit" field="blog_content_main_wrapper" rel="content">
            <module type="categories" content-id="<?php print $GLOBALS['dt']['blog_data'][0]['id'] ?? 11; ?>"/>
        </div>
    </div>
</div>
