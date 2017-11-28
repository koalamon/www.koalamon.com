<?php

if (!isset($footerColor)) {
    $footerColor = '#3498db';
}

?>

<div style="border-top: 1px solid #eee; margin-top: 100px" class="no-mobile">

    <div class="content" style="text-align: center; margin-top: 20px; height: 600px; overflow: hidden">
        <h2 style="margin-bottom: 30px"><?php __("footer.work.headline"); ?></h2>
        <p style="font-size: 20px; font-weight: 100; margin-bottom: 30px">
            <?php __("footer.work.text"); ?>
        </p>

        <div style="text-align: center; margin-bottom: 100px">
            <div style="float:left; margin-left: 265px; margin-right: 30px;  background-color: <?php echo $footerColor; ?>; color: white; width: 150px; padding: 20px; border-radius: 10px">
                <div class="row">
                    <a href="https://calendly.com/leankoala_com" data-height="580" data-toggle="lightbox" data-gallery="remoteload" id="demo" style="color: white">
                        <?php __("footer.work.buttons.request"); ?>
                    </a>
                </div>
            </div>
            <div style="float:left; margin-top: 20px; margin-right: 30px"> <?php __("footer.work.buttons.or"); ?></div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div style="border: 2px solid <?php echo $footerColor; ?>; color: <?php echo $footerColor; ?>; width: 120px; display: flex; padding: 20px 30px 20px 30px; border-radius: 10px;"><?php __("footer.work.buttons.try"); ?></div>
            </a>
        </div>

        <img src="/images/features/start.big.png" width="800px">
    </div>

</div>
<footer>
    <div class="content">

        <div style="width: 100%;">
            <div style="float: left; margin-right: 100px" class="block">
                <div class="headline"><?php __('footer.contact.head'); ?></div>
                <div>
                    <span style="font-size: 22px; display: block; margin-bottom: 10px; font-weight: 100">contact@leankoala.com</span>
                    <span>+49 40 572 487 64</span>
                </div>
                <div style="font-size: 25px; margin-top: 20px">
                    <a href="https://www.facebook.com/leankoala/" style="color: white"><i class="fa fa-facebook-square" aria-hidden="true" style="margin-right: 5px"></i></a>
                    <a href="https://www.twitter.com/leankoala" style="color: white"><i class="fa fa-twitter-square" aria-hidden="true" style="margin-right: 5px"></i></a>
                    <a href="https://www.instagram.com/leankoala" style="color: white"><i class="fa fa-instagram" aria-hidden="true" style="margin-right: 5px"></i></a>
                    <a href="https://www.medium.com/the-lean-tester" style="color: white"><i class="fa fa-medium" aria-hidden="true"></i></a>
                </div>
            </div>
            <div style="float: left" class="block">
                <div class="headline"><?php __('footer.leankoala.head'); ?></div>
                <ul>
                    <li><a href="<?php __a('/why.html'); ?>"><?php __('footer.leankoala.why'); ?></a></li>
                    <li><a href="<?php __a('/product/features.html'); ?>"><?php __('footer.leankoala.features'); ?></a></li>
                    <li><a href="<?php __a('/product/tools.html'); ?>"><?php __('footer.leankoala.tools'); ?></a></li>
                    <li><a href="<?php __a('/one-day-with.html'); ?>"><?php __('footer.leankoala.onedaywith'); ?></a></li>
                </ul>
            </div>
            <div class="block">
                <div class="headline"><?php __('footer.about.head'); ?></div>
                <ul>
                    <li><a href="<?php __a('/imprint.html'); ?>" style="color: white"><?php __('footer.about.contact'); ?></a></li>
                    <li><a href="<?php __a('/tos.html'); ?>" style="color: white"><?php __('footer.about.tos'); ?></a></li>
                    <li><a href="<?php __a('/product/release-notes.html'); ?>" style="color: white"><?php __('footer.about.releasenotes'); ?></a></li>
                    <li>
                        <a id="newsletter" data-toggle="lightbox" data-height="480" data-gallery="remoteload" href="https://my.sendinblue.com/users/subscribe/js_id/2h2a6/id/1">
                            <?php __('footer.leankoala.newsletter'); ?>
                        </a>
                    </li>
                    <li><a href="<?php __a('/media.html'); ?>" style="color: white"><?php __('footer.about.media'); ?></a></li>
                </ul>
            </div>


            <div id="recent - blog - posts">
                <div class="headline"><?php __('footer.blog.head'); ?></div>
                <ul>
                    <?php

                    $recentBlogPosts = getRecentBlogPosts();
                    foreach ($recentBlogPosts as $blogPost) {
                        ?>
                        <li>
                            <a href="<?php echo $blogPost->url ?>">
                                <?php echo $blogPost->title ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <div style="clear: both"></div>

    </div>
</footer>