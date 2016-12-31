<div style="border-top: 1px solid #eee; margin-top: 100px" class="no-mobile">

    <div class="content" style="text-align: center; margin-top: 20px; height: 600px; overflow: hidden">
        <h2 style="margin-bottom: 30px">Want us to walk you through it?</h2>
        <p style="font-size: 20px; font-weight: 100; margin-bottom: 30px">
            Sign up for a demo presentation and we’ll schedule a one on one.
        </p>

        <div style="text-align: center; margin-bottom: 100px">
            <a href="mailto:demo@leankoala.com?Subject=Request a demo&Body=">
                <div style="float:left; margin-left: 265px; margin-right: 30px;  background-color: #3498db; color: white; width: 150px; padding: 20px; border-radius: 10px">Request a demo</div>
            </a>
            <div style="float:left; margin-top: 20px; margin-right: 30px">or</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div style="border: 2px solid #3498db; color: #3498db; width: 120px; display: flex; padding: 20px 20px 20px 50px; border-radius: 10px;">Try it for free</div>
            </a>
        </div>

        <img src="/images/features/start.big.png" width="800px">
    </div>

</div>
<footer>
    <div class="content">
        <!--img src="/images/logo.png" width="80px"-->

        <div style="width: 100%;">
            <div style="float: left; margin-right: 100px" class="block">
                <div class="headline">Contact</div>
                <div>
                    <span style="font-size: 22px; display: block; margin-bottom: 10px; font-weight: 100">contact@leankoala.com</span>
                    <span>+49 40 572 487 64</span>
                </div>
                <div style="font-size: 25px; margin-top: 20px">
                    <a href="https://www.facebook.com/leankoala/" style="color: white"><i class="fa fa-facebook-square" aria-hidden="true" style="margin-right: 5px"></i></a>
                    <a href="https://www.twitter.com/leankoala" style="color: white"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                </div>
            </div>
            <div style="float: left" class="block">
                <div class="headline">Leankoala</div>
                <ul>
                    <li><a href="/why.html">Why Leankoala?</a></li>
                    <li><a href="/product/features.html">Features</a></li>
                    <li><a href="/product/tools.html">Tools</a></li>
                    <li><a href="/one-day-with.html">One day with ...</a></li>
                </ul>
            </div>
            <div class="block">
                <div class="headline">About</div>
                <ul>
                    <li><a href="/imprint.html" style="color: white">Contact // Impressum </a></li>
                    <li><a href="/tos.html" style="color: white">Terms of Service</a></li>
                    <li><a href="/release-notes.html" style="color: white">Release Notes</a></li>
                </ul>
            </div>


            <div id="recent-blog-posts">
                <div class="headline">Recent blog posts</div>
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