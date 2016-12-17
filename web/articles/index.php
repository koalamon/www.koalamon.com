<div class="content">
    <div id="index-head">

        <img src="/images/logo.png" class="logo">

        <div class="main-info" style="margin-top: 20px;">
            <h1 style="margin-bottom: 20px">Leankoala</h1>
            The fast and lean continuous testing service <br>for web applications.
        </div>

        <div style="text-align: center; margin-bottom: 100px; margin-top: 50px; width: 100%">
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div style="background-color:  #27ae60; color: white; width: 220px; padding: 20px; border-radius: 10px; display: inherit">
                    Start your 14 day free trial
                </div>
            </a>
        </div>
    </div>
</div>

<div class="content" id="index-block-features">
    <a href="/product/features.html">
        <div id="index-features">
            <ul>
                <li class="no-mobile">
                    <img src="/images/features/ack.png">
                </li>
                <li class="no-mobile">
                    <img src="/images/features/checks.png">
                </li>
                <li class="active">
                    <img src="/images/features/start.png">
                </li>
                <li class="no-mobile">
                    <img src="/images/features/history.png">
                </li>
                <li class="no-mobile">
                    <img src="/images/features/recipes.png">
                </li>
            </ul>
            <div style="clear: both"></div>
        </div>
    </a>
</div>

<style>

</style>

<div id="index-leankoala" class="main-element-grey">
    <div class="content">
        <h2>Leankoala is your first step towards test automation.</h2>
        <ul>
            <li>
                <i class="fa fa-leaf" aria-hidden="true"></i>
                <h2>Lean</h2>
                <div class="info">
                    <p>The Lean Testing methodology focuses on finding symptoms instead for root causes.</p>
                    <p>Leankoala was build for html, json and xml.</p>
                </div>
                <div style="margin-top: 30px">
                    <a href="/lean-testing.html" class="more">What is Lean Testing?</a>
                </div>
            </li>
            <li>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h2>Fast</h2>
                <div class="info">
                    <p>With Leankoala you create a good test coverage within hours.</p>
                    <p>We provide wizards for standard use cases.</p>
                </div>
                <div style="margin-top: 30px">
                    <a href="/one-day-with.html" class="more">One day with Leankoala.</a>
                </div>
            </li>
            <li>
                <i class="fa fa-object-group" aria-hidden="true"></i>
                <h2>Integrated</h2>
                <div class="info">
                    <p>Leankoala was designed to be part of the development process.</p>
                    <p>It runs on dev, stage and production environments und perfectly integrates with Slack.</p>
                </div>
                <div style="margin-top: 30px">
                    <a href="/product/features.html" class="more">Feature list.</a>
                </div>
            </li>
            <li>
                <i class="fa fa-money" aria-hidden="true"></i>
                <h2>Low-priced</h2>
                <div class="info">
                    <p>Leankoala's large plan for a whole month costs less than one developer an hour.</p>
                    <p></p>
                </div>
                <div style="margin-top: 30px">
                    <a href="/pricing.html" class="more">Subscription plans.</a>
                </div>
            </li>
        </ul>
    </div>
    <div style="clear: both"></div>
</div>

<div style="clear: both"></div>

<div id="index-customers" style="margin-top: 100px">
    <div class="content">
        <h2>Great customers including these fine companies</h2>

        <a href="/one-day-with.html">
            <ul>
                <li><img src="/images/agencies/blg_logo.png" style="width: 200px; margin-top: 25px"></li>
                <li><img src="/images/agencies/scalamento.jpg" style="width: 200px; margin-top: 10px"></li>
                <li><img src="/images/agencies/so_logo.png" style="width: 50px; margin-top: 15px"></li>
                <li><img src="/images/startups/yuscale.png" style="width: 130px; margin-top: 18px"></li>
                <li><img src="/images/startups/whm.png" style="width: 100px; margin-top: 10px"></li>
                <li><img src="/images/startups/buzzrank.png" style="width: 140px; margin-top: 22px"></li>
                <li><img src="/images/startups/wetimebox.png" style="width: 150px; margin-top: 25px"></li>
                <li><img src="/images/startups/amilio2.png" style="margin-top: 20px; width: 40px"><img src="/images/startups/amilio1.png" style="margin-top: 5px; height: 40px"></li>
            </ul>
        </a>
    </div>
</div>

<div style="clear: both"></div>

<div id="index-leankoala" class="main-element-grey" style="padding-bottom: 50px">
    <div class="content">
        <h2 style="margin-bottom: 0;">
            We performed
            <span style="background-color: black; color: white;  letter-spacing: 5px; font-family: 'Courier New'; padding: 10px; margin: 0 20px">
                 <?php echo number_format(getCheckCount()); ?></span> checks so far.
        </h2>
    </div>
</div>

<div style="clear: both"></div>

<style>
    #index-checks ul li img {
        margin: 0 18px 20px 0;
        /* filter: grayscale(100%); */
        width: 38px;
        height: 38px;
    }

    #index-checks ul li img:nth-child(5n) {
        margin-right: 0;
    }

    #index-checks ul li img:hover {
        /* filter: grayscale(0%); */
    }

    #index-checks ul li p {
        margin-left: 0;
        margin-bottom: 30px;
    }

</style>

<div id="index-checks" style="margin-top: 100px">
    <div class="content">
        <h2>What can we check?</h2>
        <ul>
            <li>
                Website
                <p>
                    We build and tested a lot of websites. That's where we are experts and that is also why we focused
                    on those checks.
                </p>
                <div>
                    <a href="/product/tools.html">
                        <?php foreach ($checks as $check): ?>
                            <?php if (strpos($check['filters'], 'website') !== false): ?>
                                <img src="<?php echo $check['img']; ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </a>
                </div>
            </li>
            <li>
                SEO
                <p>
                    Search engines like google are for many websites traffic source number one. That is why it is important
                    to monitor some common metrics.
                </p>
                <div>
                    <a href="/product/tools.html">
                        <?php foreach ($checks as $check): ?>
                            <?php if (strpos($check['filters'], 'seo') !== false): ?>
                                <img src="<?php echo $check['img']; ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </a>
                </div>
            </li>
            <li>
                Web Services
                <p>
                    Modern web applications consists of many (micro) services. We build tools that can monitor them.
                </p>
                <div>
                    <a href="/product/tools.html">
                        <?php foreach ($checks as $check): ?>
                            <?php if (strpos($check['filters'], 'webservice') !== false): ?>
                                <img src="<?php echo $check['img']; ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

<div style="clear: both"></div>
