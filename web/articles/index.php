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
    <a href="<?php __a('/product/features.html'); ?>">
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
                    <a href="<?php __a('/lean-testing.html') ?>" class="more">What is Lean Testing?</a>
                    <a href="<?php __a('/product/tools.html') ?>" class="more">Tool overview</a>
                </div>
            </li>
            <li>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.fast.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.fast.text') ?>
                </div>
                <div style="margin-top: 30px; line-height: 30px">
                    <a href="<?php __a('/one-day-with.html') ?>" class="more">One day with Leankoala</a>
                    <a href="<?php __a('/product/recipes.html') ?>" class="more">Recipe overview</a>
                </div>
            </li>
            <li>
                <i class="fa fa-object-group" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.integrated.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.integrated.text') ?>
                </div>
                <div style="margin-top: 30px">
                    <a href="<?php __a('/product/features.html') ?>" class="more">Feature list</a>
                </div>
            </li>
            <li>
                <i class="fa fa-money" aria-hidden="true"></i>
                <h2><?php __('page.index.overview.elements.low-priced.headline') ?></h2>
                <div class="info">
                    <?php __('page.index.overview.elements.low-priced.text') ?>
                </div>
                <div style="margin-top: 30px">
                    <a href="<?php __a('/pricing.html') ?>" class="more">Subscription plans</a>
                </div>
            </li>
        </ul>
    </div>

    <div style="clear: both"></div>

    <h2 style="margin-top: 100px; margin-bottom: 30px; line-height: 35px">Leankoala begleitet dich durch den<br> gesamten Entwicklungsprozess.</h2>

    <div style="width: 100%; text-align: center; ">
        <div style="border: 1px solid #eee; width: 600px; margin-left: calc(50% - 300px); background-color: white; height: 200px">
            <div style="width: 200px; float: left; height: 50px; padding-top: 25px; border-right: 1px solid #eee; font-weight: 800; border-bottom: 1px solid #fff" class="process" data-step="development">
                Entwicklung
            </div>
            <div style="width: 200px; float: left; height: 50px; padding-top: 25px; border-right: 1px solid #eee; border-bottom: 1px solid #eee" class="process" data-step="stage">
                Abnahme
            </div>
            <div style="height: 50px; padding-top: 25px; border-bottom: 1px solid #eee" class="process" data-step="live">
                Betrieb
            </div>
            <div style="padding: 20px; text-align: left; font-size: 14px; width: 570px; line-height: 25px;">
                <span class="step" data-step="development">
                    Leankoala entfaltet seine Stärken bereits am Anfang des Entwicklungszyklus. An der Stelle, an der
                    die meisten Fehler geschehen und sie am günstigen zu beheben sind.
                </span>
                <span class="step" data-step="stage" style="display: none">
                    Während der Integration von Funktionalitäten bei der das erste Mal alle Teilsysteme und Daten aufeinandertreffen
                    spielt Leankoala eine wichtige Rolle, um eine schnelle, einfache und umfangreiche Abnahme zu gewährleisten.
                </span>
                <span class="step" data-step="live" style="display: none">
                    Leankoala wurde als effizienter Testing-Service entworfen, der bereits während der Entwicklung eingesetzt wird.
                    Dank seiner Architektur ist Leankoala auch wunderbar dazu geeignet ein umfangreiches, funktionales
                    Monitoring aufzusetzen.
                </span>
            </div>
        </div>
    </div>

    <script>
        $('.process').mouseover(function () {
            $('.step').hide();
            $('.process').css('font-weight', '300');
            $('.process').css('border-bottom', '1px solid #eee');
            $(this).css('font-weight', '800');
            $(this).css('border-bottom', '1px solid #fff');
            $("[data-step='" + $(this).attr('data-step') + "']").show();
        })
    </script>

    <div style="clear: both"></div>
</div>

<div style="clear: both"></div>

<div id="index-customers" style="margin-top: 100px">
    <div class="content">
        <h2> <?php __('page.index.customers.headline') ?></h2>

        <a href="<?php __a('/one-day-with.html') ?>">
            <ul>
                <li><img src="/images/agencies/blg_logo.png" style="width: 200px; margin-top: 25px"></li>
                <li><img src="/images/startups/recolution.png" style="width: 200px; margin-top: 15px"></li>
                <li><img src="/images/agencies/so_logo.png" style="width: 50px; margin-top: 15px"></li>
                <li><img src="/images/startups/yuscale.png" style="width: 130px; margin-top: 18px"></li>
                <li><img src="/images/startups/whm.png" style="width: 100px; margin-top: 10px"></li>
                <li><img src="/images/startups/buzzrank.png" style="width: 140px; margin-top: 22px"></li>
                <li><img src="/images/startups/wetimebox.png" style="width: 150px; margin-top: 25px"></li>
                <li>
                    <img src="/images/startups/amilio2.png" style="margin-top: 20px; width: 40px">
                    <img src="/images/startups/amilio1.png" style="margin-top: 5px; height: 40px">
                </li>
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
            <?php __('page.index.what.text', count($checks[$language])) ?>
        </div>
        <ul>
            <?php foreach ($checks[$language] as $key => $check): ?>
                <li onmouseover="$('#check-<?php echo $key; ?>').show();"
                    onmouseout="$('#check-<?php echo $key; ?>').hide();">
                    <a href="<?php __a('/product/tools.html#' . $key); ?>">
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
