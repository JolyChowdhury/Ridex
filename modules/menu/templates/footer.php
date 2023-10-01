<?php

/*

type: layout

name: Footer

description: Footer menu

*/

?>

<?php
$menu_filter['ul_class'] = '';
$menu_filter['ul_class_deep'] = '';
$menu_filter['li_class'] = '';
$menu_filter['a_class'] = '';
$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {a_class}"  href="{url}" {tooltip}> <span>{title}</span></a>';


$q  = \Cache::remember($menu_filter['menu_id'].'menu_items_new', 200000, function () use($menu_filter) {
    return recursive_menu($menu_filter['menu_id']);
    });
$mt = menu_tree($menu_filter,false,false,$q);
if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . 'footer_menu' . '</b>');
}
?>
