<?php include modules_path() . 'editor' . DS . 'template_settings' . DS . 'generated_vars.php'; ?>

<?php if (isset($params['data-parent-module-id']) AND $params['data-parent-module-id'] == 'template_settings_admin'): ?>
    <module type="editor/stylesheet_compiler"/>
    <module type="editor/template_settings"/>
<?php endif; ?>

<?php 
$update_global_bundle_discount_condition = get_option('update_global_bundle_discount_condition','update_global_bundle_discount_condition') ?? 0;
$user_id = user_id();
$is_admin = is_admin();
$hide_header_page_id = \Cache::rememberForever('header_show_hides_status', function () {
    return DB::table('header_show_hides')->select('page_id')->get()->pluck('page_id')->toArray();
});
if (in_array(PAGE_ID, $hide_header_page_id)) {
    $headerShowCss = "none";
} else {
    $headerShowCss = "block";
}
$shop_cat = $GLOBALS['dt']['shop_data'][0]['id'];
$blog_cat = $GLOBALS['dt']['blog_data'][0]['id'];
$active = intval($GLOBALS['dt']['custom_active_category']);
if (!empty($active)) {
    $showHeader = header_cate_status();
}

$categoriesShowHide = get_option('categoriesShowHide', 'searchbar_menu_category');
$display = '';
if($categoriesShowHide and $categoriesShowHide == 2){
    $display = "header-category-list-hide";
}
$user_can_access_item = $hasDashboardAccess = false;
if($user_id){
    $user_can_access_item = user_can_access_item();
    if ($is_admin or $user_can_access_item){
        $hasDashboardAccess = hasDashboardAccess();
    }
}

$preloader_value=get_option('website_preloader_text','website_preloader');
$preloader_shop_name=($preloader_value===false or $preloader_value==null) ? "Droptienda":$preloader_value;

// Convert to uppercase
$preloader_shop_name = strtoupper($preloader_shop_name);

// Separate characters into an array
$preloader_shop_name = str_split($preloader_shop_name);
$count_character=count($preloader_shop_name);