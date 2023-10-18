<?php if ($footer == 'true'): ?>
     <!-- Footer Section Start -->
        <footer id="footer" class="footer edit" rel="global" field="ridex_footer_content_2">
                <div class="container">
                    <div class="footer-top">
                        <div class="row">
                            <!-- Footer Column 1 -->
                            <div class="col-lg-3">
                                <div class="footer-widget widget-1">
                                    <div class="widget-title">
                                        <h2>store information</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="info-wrapper">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>4005, Silver business point India</span>
                                        </div>
                                        <div class="info-wrapper">
                                            <i class="fa-solid fa-phone"></i>
                                            <span><a href="tel:123456789">123456789</a></span>
                                        </div>
                                        <div class="info-wrapper">
                                            <i class="fa-solid fa-envelope"></i>
                                            <span><a href="mailto:info@example.com">info@example.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column 2 -->
                            <div class="footer_col footer_col_3 col-lg-3">
                                <div class="footer-widget widget-2">
                                    <div class="widget-title">
                                        <h2>our company</h2>
                                    </div>
                                    <div class="footer_nav" id="footermenu">
                                        <div class="footer-preloader show"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-widget">
                                    <h4 class="footer-link-header">Footer Menu</h4>
                                    <div class="footer-link" id="footermenu">
                                        <div class="footer-preloader show"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column 3 -->
                            <div class="col-lg-3">
                                <div class="footer-widget widget-3">
                                    <div class="widget-title">
                                        <h2>your account</h2>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="footer_nav">
                                            <li><a href="javascript:void(0)">personal info</a></li>
                                            <li><a href="javascript:void(0)">address</a></li>
                                            <li><a href="javascript:void(0)">orders</a></li>
                                            <li><a href="javascript:void(0)">credit slips</a></li>
                                            <li><a href="javascript:void(0)">wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="fotter-bottom-wrapper d-flex justify-content-between align-items-center flex-wrap">
                                <p class="copyright-text">Shopsystem & Template by <a href="https://www.droptienda.com/" target="_blank">Droptienda®</a></p>
                                    <img src="<?php print template_url();?>assets/image/payment-gateways.webp" alt="payment-gateways">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    <!-- Footer Section End -->
    <?php endif; ?>
</div>

<?php
if(is_logged()){
    print chat_footer();
}
?>
<button id="to-top" class="btn" style="display: block;">
<span class="material-icons">keyboard_arrow_up</span>
</button>

<script>
    jQuery(window).on('load', function() {

    if (jQuery(".categorySideBar .module-categories>.well>ul.nav>li").length > 5) {
            jQuery(".categorySideBar").append("<span class='viewMoreCategory'>weitere anzeigen</span>");
        }

        jQuery(".viewMoreCategory").on("click", function() {
            jQuery(".categorySideBar .module-categories>.well>ul.nav").toggleClass("show_ucmAll");

            var currentVMBtnText = jQuery(".viewMoreCategory").text();
            if (currentVMBtnText === "weitere anzeigen") {
                jQuery(".viewMoreCategory").html("ausblenden");
            } else {
                jQuery(".viewMoreCategory").html("weitere anzeigen");
            }
        });

    });

    $(window).on("load", function() {
        $(".categorySideBar .module-categories ul li:has(ul)").addClass("hasSubCat");
        $(".hasSubCat").append(
            "<span class='clickExpandBtn'><i class='fa fa-caret-down' aria-hidden='true'></i></span>");
    });

    $(window).bind("load resize", function(e) {
        $(".categorySideBar .module-categories .well>ul.nav li .clickExpandBtn").on("click", function() {
            $(this).parent().toggleClass("showDropCat");
            $(this).children().toggleClass("fa-caret-up");
        });
    });

    // Sickty footer
       $(document).ready(function() {
        $(".inner-page .breadcrumb").addClass("container");
        var menu_param ={};
        menu_param.template="footer";
        menu_param.id="footer_menu";
        menu_param.name="footer_menu";
        mw.load_module('menu','#footermenu',null,menu_param);

        mw.load_module('legals/shipping-info','#legalShipping');

        var social_param ={};
        social_param.id="footer_socials";
        mw.load_module('social_links','#footer_socials',null,social_param);

        var $body = $('body');
        var $footer = $('footer');
        var footerHeight = $footer.outerHeight();
        var scrollThreshold = $(document).height() - $(window).height() - footerHeight;
        var isTopSticky = $body.hasClass('footer-top-sticky');
        var isCopyRightSticky = $body.hasClass('footer-copyright-sticky');
        var isBothSticky = $body.hasClass('footer-copyright-sticky') && $body.hasClass('footer-top-sticky');

        function footerSticky() {
            var isSticky = $(window).scrollTop() >= 50;
            if (isTopSticky) {
                $footer.toggleClass('footer-top-sticky', isSticky);
            } else if (isCopyRightSticky) {
                $footer.toggleClass('copyright-sticky', isSticky);
            }

            if (isBothSticky) {
                $footer.toggleClass('both-sticky', isSticky);
            }
        }

        function destroySticky() {
            var shouldDestroySticky = $(window).scrollTop() >= scrollThreshold;
            $footer.toggleClass('destroy-sticky', shouldDestroySticky);
        }

        $(window).scroll(function () {
            footerSticky();
            destroySticky();
        });
    });


    $(document).ready(function() {
        $('.nav-for-mobile .navbar_new ul').removeClass();
        $('.nav-for-mobile .navbar_new li').removeClass();
        $('.nav-for-mobile .navbar_new li a').removeClass();

        mw.load_module('legals/shipping-info','#legalShipping');

        var menu_param ={};
        menu_param.template="simple";
        menu_param.id="footer_menu";
        menu_param.name="footer_menu";
        mw.load_module('menu','#footermenu',null,menu_param);

        var social_param ={};
        social_param.id="footer_socials";
        mw.load_module('social_links','#footer_socials_menu',null,social_param);
    });
</script>
<!-- Plugins -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en-GB&amp;key=AIzaSyDbN7i-eF7dlNNp-bxbERNomOGYpZld3B0"></script>
<script src="<?php print template_url(); ?>assets/js/libs/swiper/js/swiper.min.js"></script>
<script src="<?php print template_url(); ?>assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/isotope.pkgd.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/libs/anime.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/libs/particles.js"></script>
<script src="<?php print template_url(); ?>assets/js/libs/jquery.sticky-sidebar.min.js"></script>
<script>
    mw.lib.require('slick');
    mw.lib.require('collapse_nav');
</script>
<script src="<?php print template_url(); ?>assets/js/jquery-ui.js"></script>
<script src="<?php print template_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/mo.js"></script>
<script src="<?php print template_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/fx.js"></script>
<script src="<?php print template_url(); ?>assets/js/script.js"></script>
<script src="<?php print template_url(); ?>assets/js/select2.js"></script>
<script src="<?php print template_url(); ?>assets/js/slick.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/switcher.js"></script>
<script src="<?php print template_url(); ?>assets/js/simplyCountdown.js"></script>
<script src="<?php print template_url(); ?>assets/js/main.js"></script>

<!--Pricing Ultra Layout-->
<?php
    if(file_exists(module_dir('')."global_code_add_for_template.php")){
        include module_dir('') . "global_code_add_for_template.php";
    }
    if(file_exists(module_dir('')."global_template_footer.php")){
        include module_dir('') . "global_template_footer.php";
    }
?>

</body>
</html>
