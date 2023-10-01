<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>
<head>
    <title>{content_meta_title}</title>
    <?php if (Config::get('custom.disableGoggleIndex') == 1) : ?>
        <meta name="robots" content="noimageindex,nomediaindex" />
    <?php endif; ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="{meta_title}" />
    <meta name="keywords" content="{content_meta_keywords}" />
    <meta name="description" content="{content_meta_description}" />
    <meta property="og:type" content="{og_type}" />
    <meta property="og:url" content="{content_url}" />
    <meta property="og:image" content="{content_image}" />
    <meta property="og:description" content="{og_description}" />
    <meta property="og:site_name" content="{og_site_name}" />
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
        $(document).ready(function() {
            $('.selectpicker').selectpicker();
            mw.iconLoader()
            .addIconSet('fontAwesome')
            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('mwIcons')
            .addIconSet('materialIcons');
        });
    </script>
    <?php
    // print(template_head(true));
    //Seo data for google anaylytical by Zunaid
    $is_installed_status = Config::get('microweber.is_installed');
    (@$is_installed_status) ? basicGoogleAnalytical() : '';
    //end code
    ?>
    <!-- Plugins Styles -->
    <link href="<?php print template_url(); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="<?php print template_url(); ?>assets/js/libs/swiper/css/swiper.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/fontawesome-6.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/all.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/font-awesome-4.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/material_icons/material_icons.css" type="text/css" />
    <script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/meanmenu/jquery.meanmenu.min.js"></script>
    <script src="<?php print template_url(); ?>assets/js/jquery.smartmenus.min.js"></script>
    <link href="<?php print template_url(); ?>assets/css/sm-core-css.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/sm-simple.css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/plugins/meanmenu/meanmenu.min.css" />
    <script src="<?php print template_url(); ?>assets/js/select2.min.js"></script>
    <link href="<?php print template_url(); ?>assets/css/select2.min.css" rel="stylesheet"/>
    <link href="<?php print template_url(); ?>assets/remixicon/remixicon.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php print template_url(); ?>assets/js/jquery-ui.js"></script>
    <link href="<?php print template_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php print template_url(); ?>assets/css/main-style.css" rel="stylesheet" />
    <link href="<?php print template_url(); ?>assets/css/responsive.css" rel="stylesheet" />
    <?php print get_template_stylesheet(); ?>
    <?php include('template_settings.php'); ?>

    <script>
        mw.lib.require('bootstrap4');
       
    </script>
</head>
<body class="ridex-body <?php print helper_body_classes(); print 'member-nav-inverse ' . $header_style . ' ' . $sticky_header . ' ' . $footer_top_sticky . ' ' . $footer_copyright_sticky. ' ' . $member_menu_icon;  if(defined('IS_HOME')){ print ' homepage'; }?> " >
    <!-- Preloader code there -->
    <?=preloader_html($preloader_shop_name, $count_character);?>
    <input type="hidden" id="page_id_for_layout_copy" value="<?= PAGE_ID; ?>">
    <div class="main">
         <!-- Header Section Start -->
<header id="header" class="header" style="display:<?php print $headerShowCss; ?>;">

    <!-- Header Top Bar -->
    <div class="header-top-bar"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 bg-dark">
                    <div class="social-bar d-flex justify-content-between align-items-center">
                        <div class="header-social">
                            <module type="sociala_links" template="default"/>
                            <!-- <ul class="social-nav d-flex justify-content-start align-items-center">
                                <li><a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></i></a></li>
                                <li><a href="https://tiktok.com" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                <li><a href="https://snapchat.com" target="_blank"><i class="fa-brands fa-snapchat"></i></a></li>
                                <li><a href="https://vimeo.com" target="_blank"><i class="fa-brands fa-vimeo-v"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Logo Area -->
    <div class="logo-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-area d-flex justify-content-between align-items-center">
                        <div class="logo-left-area">
                            <div class="hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#ridexCanvasNav" aria-controls="ridexCanvasNav">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="logo">
                                <module type="logo" class="logo" id="header-logo" />
                            </div>
                        </div>
                        <div class="logo-middle-area ">
                            <div class="menu">
                                <module type="menu" id="header-menu" template="navbar" />
                            </div>
                        </div>
                        <div class="logo-right-area d-flex justify-content-start align-items-center">
                            <!-- wishlist -->
                                <?php if (get_option('enable_wishlist', 'shop')) :
                                    if(is_logged()): ?>
                                        <div class="btn-wishlist-desktop">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#wishlistModal">
                                        <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <span class="member-menu-label">
                                            <?php _e('Wishlist'); ?>
                                        </span>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                           <!-- <div class="header-search"> -->
                            <div class="header-search">
                                <i class="ri-search-line click"></i>
                                <div class="search-input">

                                    <?php if ($search_bar == 'true') : ?>
                                    <div class="product-search-box <?=$display?>">
                                        <form autocomplete="off" id="formSearch" action="<?php print site_url(); ?>search" method="get">
                                            <select class="searchCategoryDropdown" name="category_list" id="category_list">
                                            </select>
                                            <div class="autocomplete">
                                                <input id="productSearchInput" type="text" name="keywords" placeholder="<?php _e('Search Here'); ?>">
                                            </div>
                                            <button class="btn" type="submit"> Suchen</button>
                                                <span class="searchClose">X</span>
                                        </form>
                                    </div>
                                    <?php endif; ?>
                                    <script>
                                        $('#formSearch').on('click', function(){
                                                $('.product-search-box').addClass('overlay-show')
                                            });
                                    </script>
                                </div>
                            </div>
                            <!-- login part -->
                            <div class="user-login-area">
                                <div class="header-member d-flex">
                                    <ul>
                                        <?php if ($profile_link == 'true') : ?>
                                        <li class="header-member-user">
                                        <i class="fa fa-user" aria-hidden="true"></i>

                                        <ul class="header-user-dropdown">
                                                <?php if ($user_id) : ?>
                                                    <li><a href="" class="hide_login_module" data-toggle="modal" data-target="#loginModal"><span class="user-item-icon"><i class="fa-solid fa-address-card"></i></span>Profil</a></li>

                                                    <li><a href="" data-toggle="modal" data-target="#addressbook"><span class="user-item-icon"><i class="fa-solid fa-map-location-dot"></i></span>Adressbuch</a></li>

                                                    <li><a href="" data-toggle="modal" data-target="#ordersModal"><span class="user-item-icon"><i class="fa-solid fa-bag-shopping"></i></span>Meine Bestellungen</a></li>

                                                    <?php if ($is_admin or $user_can_access_item) : ?>
                                                        <li><a href="<?php if($hasDashboardAccess) print $hasDashboardAccess; else print admin_url() ?>"><span class="user-item-icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>Adminbereich</a></li>
                                                <?php endif; ?>

                                                <?php else : ?>
                                                    <li><a href="" data-toggle="modal" data-target="#loginModal" class="login_register"><span class="user-menu-icon"><i class="fa-solid fa-arrow-right-to-bracket"></i></span><?php _lang("Anmeldung"); ?></a></li>
                                                <?php endif; ?>

                                                <?php if ($user_id) : ?>
                                                    <li><a href="<?php print api_link('logout') ?>"><span class="user-item-icon"><i class="fa-solid fa-power-off"></i></span>Ausloggen</a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- header cart -->
                            <?php if ($shopping_cart == 'true') : ?>
                                <div class="header-member-cart preloader-cart-icon" onclick="carttoggolee('cart')">
                                    <div class="cart-icon position-relative">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="shopping-cart-quantity" class="cart-quantity js-shopping-cart-quantity">
                                            <?php print cart_sum(false); ?>
                                        </span>
                                    </div>
                                     <span class="member-menu-label"><?php _e('Shopping cart'); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Header Section End -->
<script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
                $(".header-member-user").on('click', function(){
                    $(".header-user-dropdown").toggleClass("show");
                });
                $('.header-main-menu ul[role="menu"]').clone().appendTo(".mobile-menu-inherit-desktop");
                $('.nav-for-mobile .navbar_new ul').removeClass();
                $('.nav-for-mobile .navbar_new li').removeClass();
                $('.nav-for-mobile .navbar_new li a').removeClass();
                // Mean Menu JS
                $('.nav-for-mobile .navbar_new').meanmenu({
                    meanScreenWidth: "1024",
                    meanMenuContainer: '.nav-for-mobile'
                });

                $(".login_register").on("click",function(){
                    mw.load_module('users/register', '#loginModalModuleRegister');
                });

                $('#loginModal').on('show.bs.modal', function(e) {
                    // $('#loginModalModuleLogin').reload_module();
                    mw.reload_module('users/register');
                    mw.load_module('captcha', '#captcha_login');

                })

                <?php if (isset($_GET['mw_payment_success'])) { ?>
                    $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);
                <?php } ?>

                $('.js-show-register-window').on('click', function() {
                    $('.js-login-window').hide();
                    $('.js-register-window').show();
                    mw.load_module('captcha/templates/skin-1', '#captcha_register');
                })

                $('.js-show-login-window').on('click', function() {
                    $('.js-register-window').hide();
                    $('.js-login-window').show();
                    mw.load_module('captcha', '#captcha_login');
                })

                $('.header-cat ul').removeClass('nav');
                $('.header-cat ul').removeClass('nav-list');
                $('.header-cat ul li').removeClass('has-sub-menu');
                $('.header-cat ul').removeClass('active-parent');
                $('.header-cat ul li').removeClass('active-parent');
                $('.header-cat ul li a').removeClass('active-parent');
                $('.header-cat .well>ul').addClass('sm sm-simple sm-luminous');
                $('.header-cat .well>ul').smartmenus();
            });
        </script>
        <?php if ($user_id) : ?>
            <script>
                $(document).ready(function() {
                    $('#ordersModal').on('shown.bs.modal', function(e) {
                        mw.reload_module('#user_orders_modal')
                    });
                });
            </script>
        <?php endif; ?>
        <script>
            // Hide overlay on document click
            $(document).on('click', function (e) {
                if ($(event.target).is('.product-search-box')) {
                    $('body').removeClass('overlay-show');
                }
            });

            // Control header search select box width for bigger text
            $(document).ajaxComplete(function() {
                var options = document.querySelectorAll('.searchCategoryDropdown option')
                options.forEach(function(option) {
                    if(option.textContent.length > 80)
                    option.textContent = option.textContent.substring(0, 80)+'...';
                })
            });

            // Sticky header
            $(document).ready(function() {
                // Show overlay on search foucs
                $('.product-search-box').on('click', function(){
                    $('body').addClass('overlay-show');
                })

                $('.searchCategoryDropdown').on('focus', function(){
                    $('body').addClass('overlay-show');
                })

                if($('body').hasClass('sticky-head')) {
                    $(window).scroll(function () {
                        if ($(window).scrollTop() >= 250) {
                            $("header").addClass("sticky-header");
                            // $(".sticky-head.navigation-holder .navbar-mobile-part").addClass("sticky-header");
                        } else {
                            $("header").removeClass("sticky-header");
                            // $(".sticky-head.navigation-holder .navbar-mobile-part").removeClass("sticky-header");
                        }

                    });
                }
            })
        </script>
        <?php
            if(file_exists(module_dir('')."global_template_header.php")){
                include module_dir('') . "global_template_header.php";
            }
        ?>
