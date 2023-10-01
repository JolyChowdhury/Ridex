<?php

/*

type: layout
content_type: static
name: Blog Post

description: Blog inner
position: 9
*/


?>


<?php include template_dir() . "header.php";?>

<style>
    .dt_rss_img {
        height: 700px;
        width: auto;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    nav {
        background-size: cover;
        background-position: center;
    }
    .breadcrumb-item.active {
        color: #6c757d;
    }

    .blog-social-share {
        margin: 10px 10px 20px 15px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .blog-social-share .share-link {
        font-size: 32px;
        text-decoration: none;
        border: none;
        background: transparent;
    }

    .blog-social-share .share-link.fb {
        color: #1977F2;
    }

    .blog-social-share .share-link.twitter {
        color: #1DA1F2;
    }

    .blog-social-share .share-link.linkedin {
        color: #017DBA;
    }

    .blog-social-share .share-link.print,
    .blog-social-share .share-link.email,
    .blog-social-share .share-link.pdf{
        color: red;
    }

    .blog-social-share .share-link.xing {
        color: #08767a;
    }

    .blog-social-share .share-link:hover {
      text-decoration: none;
    }
    .blog-inner-page a:hover {
      text-decoration: none !important;
    }

    .inner-page-empty {
        margin-top: 20px;
        min-height: 10px;
    }

    @media (max-width: 575px) {
        .blog-social-share {
            gap: 15px;
        }
    }


</style>
<div class="edit inner-page-empty" field="marcando-blog-inner-v2-top" rel="content">
<!-- <module type="layouts" template="empty"/> -->
</div>
<div class="blog-inner-page inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
    <?php
        $post = DB::table('blogs_new')->where('is_deleted',0)->where('url', url_segment(1))->first();
        if(empty($post)){
            return redirect()->to('/')->send();
        }
        $post = json_decode(json_encode($post),true);
        $status = Config::get('custom.blog_status');
        if(@$post['content'] && is_logged() != true && trim(strip_tags($post['content']))){
            if($status == 1 or is_null($status) or $post['require_login'] == 1) {
                $limit = blog_word_limit();
                $make_the_limit = last_word_check(limitTextWords($post['content'],$limit,true,true));
                $make_the_limit['text'] = $post['content'];
                $get_content_with_html = random_word_check($make_the_limit) ?? $post['content'];
                $post['content'] = $get_content_with_html.'<br><span style="overflow: hidden;position: relative;display: block;"><a href="#" class="dtModalBtn" data-toggle="modal" data-target="#loginModal" style="float: right;background-color: #4592ff;color: #fff;padding: 15px 35px;border-radius: 5px;display: inline-block;text-decoration: none;">Einloggen und Bericht in voller Länge kostenfrei lesen</a></span>';
            }
        }

        if(isset($post['id'])){
            $itemTags = DB::table('tagging_tagged')->where('taggable_type','post')->where('taggable_id', $post['id'])->select('tag_name','tag_slug')->get();
        }
    ?>

    <module type="breadcrumb" />

    <div class="container m-t-100">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div id="single_blog">
                            <section class="p-t-0 p-b-50">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="blog-inner-photo">
                                                <?php if ($post['is_rss'] == 1) { ?>
                                                    <div class="dt_rss_img" style="background-image: url('<?php print $post['rss_image']; ?>')"></div>
                                                <?php }else{ ?>
                                                    <module type="pictures" rel="blog" template="skin-2" id="blog-post-pictures" blog-id="<?php print $post['id'] ?>"/>
                                                <?php } ?>
                                                <?php
                                                $date_status = Config::get('custom.blog_date_show') ?? 1;
                                                if($date_status == 1): ?>
                                                <h6 class="blog-date"><?php echo date('d ', strtotime($post['created_at'])); _e(date('F', strtotime($post['created_at']))); echo date(' Y', strtotime($post['created_at']));?></h6>
                                                <?php endif; ?>
                                                <div class="blog-tag">
                                                    <?php if ($itemTags): ?>
                                                        <?php foreach ($itemTags as $tag): ?>
                                                            <span>
                                                                <a href="<?=site_url('blog?tag=').$tag->tag_slug?>">
                                                                    <?php echo '#'.trim($tag->tag_name,'#')?>
                                                                </a>
                                                            </span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="p-t-20 p-b-50">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="heading blog-inner-heading">
                                                <h1><?php print $post['title']; ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php if($post['content']){ ?>
                                <section class="p-t-0 p-b-10 section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="description dropcap typography-area">
                                                    <div class="element">
                                                        <p><?php print $post['content']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php } ?>
                            <div class="blog-inner-tag">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php if ($itemTags): ?>
                                                <div class="posts-tags">
                                                    <b>Tags:</b>
                                                    <?php foreach ($itemTags as $tag): ?>
                                                        <span>
                                                            <a href="<?=site_url('blog?tag=').$tag->tag_slug?>">
                                                                <?php echo '#'.trim($tag->tag_name,'#')?>
                                                            </a>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            $shareOption = get_option('blog_share_option', 'blog_share');
                            $blogUrl = site_url('post/').$post['url'];
                        ?>
                        <?php if(intval($shareOption) == 1){ ?>
                            <div class="blog-social-share">
                                <!-- Facebook -->
                                <a class="share-link fb" href="http://www.facebook.com/sharer.php?u=<?=$blogUrl ?>" target="_blank">
                                   <i class="fab fa-facebook"></i>
                                </a>
                                <!-- Twitter -->
                                <a class="share-link twitter" href="http://twitter.com/share?url=<?=$blogUrl ?>" target="_blank">
                                    <i class="fab fa-square-twitter"></i>
                                </a>
                                <!-- Xing -->
                                <a class="share-link xing" href="https://www.xing.com/social_plugins/share?url=<?=$blogUrl ?>" target="_blank">
                                <i class="fab fa-xing-square"></i>
                                </a>

                                <!-- LinkedIn -->
                                <a class="share-link linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$blogUrl ?>" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <!-- Print -->
                                <button class="share-link print" onclick="blogPrint()">
                                 <i class="fa-solid fa-print"></i>
                                </button>
                                <!-- Mail -->
                                <a class="share-link email" href="mailto:?subject=I wanted you to see this link&amp;body=Check out this link <?=$blogUrl ?>"title="Share by Email"><i class="fa-solid fa-envelope"></i></a>
                                <!-- PDF -->
                                <a class="share-link pdf" href="javascript:generatePDF()"><i class="fa-solid fa-file-pdf"></i></a>
                            </div>
                        <?php } ?>
                        <div class="blog-inner-comment">
                            <module type="comments" template="skin-1" data-content-id="<?php print CONTENT_ID; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function blogPrint() {
        var printContents = document.getElementById("single_blog").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function generatePDF() {
        $('#single_blog img').css({
            'width': '200px',
        });
        var doc = new jsPDF();  //create jsPDF object
        doc.fromHTML(document.getElementById("single_blog"), // page element which you want to print as PDF
        10,
        10,
        {
            margin: [10, 10, 10, 10],
            autoPaging: 'text',
            x: 0,
            y: 0,
            width: 190, //target width in the PDF document
            windowWidth: 675 //window width in CSS pixels
        },

        function(a){
            doc.save("blog.pdf"); // save file name as HTML2PDF.pdf
        });
        setTimeout(function(){
            $('#single_blog img').css({
                'width': '100%',
            });
        }, 5000);
    }
</script>

<div class="edit inner-page-empty" field="marcando-blog-inner-v2-bottom" rel="content">
<!-- <module type="layouts" template="empty"/> -->
</div>

<?php include template_dir() . "footer.php"; ?>
