<?php

/*

type: layout

name: Navbar

description: Navigation bar

*/

?>

<style>
    .custom_hover_menu span.expandCat {
        display: none !important;
    }
    @media (min-width: 1000px){
        #header-menu li>ul li a.dropdown-toggle::after {
            margin-left: 0 !important;
        }
    }

    .leftSubmenu ul li ul.dropdown-menu {
        left: auto !important;
        right: 100% !important;
    }
    .leftSubmenu ul li a.dropdown-toggle::after{
        transform: unset !important;
    }
    .navbar_new ul.list>li:nth-last-child(2) ul li ul.dropdown-menu,
    .navbar_new ul.list>li:last-child ul li ul.dropdown-menu {
        left: auto !important;
        right: 100% !important;
    }
    .navbar_new ul.list>li:nth-last-child(2) ul li a.dropdown-toggle::after,
    .navbar_new ul.list>li:last-child ul li a.dropdown-toggle::after{
        transform: unset !important;
    }
</style>
<?php
$menu_filter['ul_class'] = 'list';
$menu_filter['ul_class_deep'] = 'dropdown-menu';
$menu_filter['li_class'] = '';
$menu_filter['a_class'] = '';

$menu_filter['li_submenu_class'] = 'dropdown';
$menu_filter['li_submenu_a_class'] = 'dropdown-toggle';

$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {a_class}"  href="{url}" {tooltip}> {imgOrIcon} <span>{title}</span></a>';
$menu_filter['li_submenu_a_link'] = '<a itemprop="url" data-item-id="{id}" href="{url}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {li_submenu_a_class}" aria-haspopup="true" aria-expanded="false" {tooltip}> {imgOrIcon} {title} <span class="caret"></span></a>';

$q  = \Cache::remember($menu_filter['menu_id'].'menu_items_new', 200000, function () use($menu_filter) {
    return recursive_menu($menu_filter['menu_id']);
    });
$mt = menu_tree($menu_filter,false,true,$q);

?>
<div class="add_more_nav custom_hover_menu navbar_new">
<?php
    if ($mt != false) {
        print ($mt);
    } else {
        print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
    }
?>
</div>


<script>
    $(document).click((event) => {
        if (!$(event.target).closest('.custom_hover_menu ul.dropdown-menu').length) {
            if($('.custom_hover_menu .dropdown-menu').hasClass('show')){
                $('.custom_hover_menu .dropdown-menu').removeClass('show');
            }
        }
    });
</script>