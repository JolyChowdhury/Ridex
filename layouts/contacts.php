<?php

/*

type: layout
content_type: static
name: Contact Us

description: Contact us layout
position: 7
*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit contact-main-wrapper" rel="content" field="marcando_content">
<!-- Get In Touch Section Start -->
<section id="get-in-touch" class="get-in-touch">
                <div class="container">

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2>contact</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="git-left">
                                <img src="<?php print template_url();?>assets/image/contact.webp" alt="contact-us-img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="git-right">
                                <h2>get in touch</h2>
                                <p>We'd Love to Hear From You, Lets Get In Touch!</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="info-wrapper">
                                            <span class="title">address</span>
                                            <p>4005, Silver business pointIndia</p>
                                        </div>
                                        <div class="info-wrapper">
                                            <span class="title">email</span>
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info-wrapper">
                                            <span class="title">phone</span>
                                            <p>0123456789</p>
                                        </div>
                                        <div class="info-wrapper">
                                            <span class="title">additional information</span>
                                            <p>We are open: Monday - Saturday, 10AM - 5PM and closed on sunday sorry for that.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="social-address">
                                    <span class="title">social</span>
                                    <ul class="social-addr-menu d-flex justify-contant-start align-items-center">
                                        <li><a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://pinterest.com" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="https://snapchat.com" target="_blank"><i class="fa-brands fa-snapchat"></i></a></li>
                                        <li><a href="https://vimeo.com" target="_blank"><i class="fa-brands fa-vimeo-v"></i></a></li>
                                    </ul>
                                    <module type="social_links" template="default"/>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Get In Touch Section End -->
            
    <!-- Google map module start -->
    <div id="iframe-map">
        <module type="google_maps"/>
    </div>
    <!-- Google map module end -->
    </div>

<?php include template_dir() . "footer.php"; ?>
