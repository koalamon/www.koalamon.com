<div style="border-top: 1px solid #eee; margin-top: 100px" class="no-mobile">

    <div class="content" style="text-align: center; margin-top: 20px; height: 600px; overflow: hidden">
        <h2 style="margin-bottom: 30px">Want us to walk you through it?</h2>
        <p style="font-size: 20px; font-weight: 100; margin-bottom: 30px">
            Sign up for a demo presentation and we’ll schedule a one on one.
        </p>

        <div style="text-align: center; margin-bottom: 100px">
            <a href="mailto:demo@leankoala.com?Subject=Request a demo&Body=">
                <div style="float:left; margin-left: 265px; margin-right: 30px;  background-color: #27ae60; color: white; width: 150px; padding: 20px; border-radius: 10px">Request a demo</div>
            </a>
            <div style="float:left; margin-top: 20px; margin-right: 30px">or</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div style="border: 2px solid #27ae60; color: #27ae60; width: 120px; display: flex; padding: 20px 20px 20px 50px; border-radius: 10px;">Try it for free</div>
            </a>
        </div>

        <img src="/images/features/start.big.png" width="800px">
    </div>

</div>
<footer>
    <div class="content">
        <!--img src="/images/logo.png" width="80px"-->

        <div style="width: 100%;">
            <div style="float: left" class="block">
                <div class="headline">Leankoala</div>
                <ul>
                    <li><a href="/why.html">Why Leankoala?</a></li>
                    <li><a href="/features.html">Product</a></li>
                    <li><a href="/one-day-with.html">One day with ...</a></li>
                </ul>
            </div>
            <div class="block">
                <div class="headline">About</div>
                <ul>
                    <li>
                        <a href="/imprint.html" style="color: white">Contact // Impressum </a>
                    </li>
                    <li>
                        <a href="/tos.html" style="color: white">Terms of Service</a>
                    </li>
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