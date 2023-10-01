<?php

/*

type: layout

name: Default

description: Default

*/
?>

<?php if ($social_links_has_enabled == false) {
    print lnotif('Social links');
} ?>

<ul class="socials">
    <?php if ($facebook_enabled) { ?>
        <li>
            <a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($twitter_enabled) { ?>
        <li>
            <a href="//twitter.com/<?php print $twitter_url; ?>" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($googleplus_enabled) { ?>
        <li>
            <a href="//plus.google.com/<?php print $googleplus_url; ?>" target="_blank">
                <i class="fa-brands fa-google-plus"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($pinterest_enabled) { ?>
        <li>
            <a href="//pinterest.com/<?php print $pinterest_url; ?>" target="_blank">
                <i class="fa-brands fa-pinterest"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($youtube_enabled) { ?>
        <li>
            <a href="//youtube.com/<?php print $youtube_url; ?>" target="_blank">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($instagram_enabled) { ?>
        <li>
            <a href="https://instagram.com/<?php print $instagram_url; ?>" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($linkedin_enabled) { ?>
        <li>
            <a href="//linkedin.com/<?php print $linkedin_url; ?>" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
        </li>
    <?php } ?>
    <?php if ($github_enabled) { ?>
        <li>
            <a href="//github.com//<?php print $github_url; ?>" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
        </li>
    <?php } ?>

    <?php if ($soundcloud_enabled) { ?>
        <li>
            <a href="//soundcloud.com/<?php print $soundcloud_url; ?>" target="_blank"><i class="fa-brands fa-soundcloud"></i></a>
        </li>
    <?php } ?>


    <?php if ($rss_enabled) { ?>
        <li>
            <?php  if(empty($rss_url)){
                $rss_custom=site_url()."rss-blogs";
            }else{
                $rss_custom="//rss.com//";
            }
             ?>
            <a href="<?php print $rss_custom ?><?php print $rss_url; ?>" target="_blank"><i class="mdi mdi-rss"></i></a>
            </a>
        </li>
    <?php } ?>

    <?php if ($tripadvisor_enabled) { ?>
        <li>
            <a href="//tripadvisor.de/<?php print $tripadvisor_url; ?>" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
        </li>
    <?php } ?>
    <?php if ($yelp_enabled) { ?>
        <li>
            <a href="//yelp.de/biz/<?php print $yelp_url; ?>" target="_blank"><i class="fa-brands fa-yelp"></i></a>
        </li>
    <?php } ?>
    <?php if ($tiktok_enabled) { ?>
        <li>
            <a href="//www.tiktok.com/<?php print $tiktok_url; ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
        </li>
    <?php } ?>
</ul>
