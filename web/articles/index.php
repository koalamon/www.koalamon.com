<div class="content">
    <div id="index-head">

        <img src="/images/logo.png" class="logo">

        <div class="main-info" style="margin-top: 20px;">
            <h1 style="margin-bottom: 20px">Leankoala</h1>
            <?php __('page.index.slogan'); ?>
        </div>

        <div style="text-align: center; margin-bottom: 100px; margin-top: 50px; width: 100%">
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div style="background-color:  #27ae60; color: white; width: 220px; padding: 20px; border-radius: 10px; display: inherit">
                    <?php __('global.trial.start'); ?>
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
        <h2><?php __('page.index.overview.headline') ?></h2>
        <ul>
            <li>
                <i class="fa fa-leaf" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.lean.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.lean.text') ?>
                </div>
                <div style="margin-top: 30px; line-height: 30px">
                    <a href="/lean-testing.html" class="more">What is Lean Testing?</a>
                    <a href="/product/tools.html" class="more">Tool overview</a>
                </div>
            </li>
            <li>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.fast.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.fast.text') ?>
                </div>
                <div style="margin-top: 30px">
                    <a href="/one-day-with.html" class="more">One day with Leankoala</a>
                </div>
            </li>
            <li>
                <i class="fa fa-object-group" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.integrated.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.integrated.text') ?>
                </div>
                <div style="margin-top: 30px">
                    <a href="/product/features.html" class="more">Feature list</a>
                </div>
            </li>
            <li>
                <i class="fa fa-money" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.low-priced.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.low-priced.text') ?>
                </div>
                <div style="margin-top: 30px">
                    <a href="/pricing.html" class="more">Subscription plans</a>
                </div>
            </li>
        </ul>
    </div>
    <div style="clear: both"></div>
</div>

<div style="clear: both"></div>

<div id="index-customers" style="margin-top: 100px">
    <div class="content">
        <h2> <?php __('page.index.customers.headline') ?></h2>

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
            <?php __('page.index.checks.count', number_format(getCheckCount())) ?>
        </h2>
    </div>
</div>

<div style="clear: both"></div>

<style>
    #index-checks ul li img {
        margin: 10px;
        /* filter: grayscale(100%); */
        width: 77px;
        height: 77px;
    }

    #index-checks ul li:nth-child(6n) {
        margin-right: 0;
    }

    #index-checks ul li img:hover {
        /* filter: grayscale(0%); */
    }

    #index-checks ul li p {
        margin-left: 0;
        margin-bottom: 30px;
    }

    .mouse-over-info {
        width: 138px;
        height: 97px;
        color: white;
        font-weight: 600;
        background: rgba(25, 25, 25, .5);
        position: absolute;
        margin-left: -20px;
        margin-top: -20px;
        z-index: 10;
        opacity: 10;
        text-align: center;
        padding-top: 40px;
        display: none;
    }
</style>

<div id="index-checks" style="margin-top: 100px">
    <div class="content">
        <h2> <?php __('page.index.what.headline') ?></h2>
        <div class="main-info" style="margin-bottom: 80px; text-align: center">
            <?php __('page.index.what.text', count($checks) ) ?>
        </div>
        <ul>
            <?php foreach ($checks as $key => $check): ?>
                <li onmouseover="$('#check-<?php echo $key; ?>').show();" onmouseout="$('#check-<?php echo $key; ?>').hide();">
                    <a href="/product/tools.html#<?php echo $key; ?>">
                        <div class="mouse-over-info" id="check-<?php echo $key; ?>">
                            <?php echo $check['name']; ?>
                        </div>
                        <img src="<?php echo $check['img']; ?>">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<div style="clear: both"></div>
