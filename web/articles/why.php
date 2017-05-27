<div id="why">
    <div class="content">
        <h1 style="width: 100%; text-align: center; margin-bottom: 20px"><?php __('page.why.headline'); ?></h1>
        <div style="width: 100%; text-align: center; margin-bottom: 100px">
            <img src="/images/logo.png">
        </div>
    </div>
    <div class="content" id="why-block-personas">
        <ul>
            <li style="background-color: #8e44ad; color: white; padding: 20px">
                <a href="<?php __a('/why/agency.html'); ?>" class="readmore" style="color: white">
                    <h3><?php __('page.why.overview.agency.headline'); ?></h3>
                    <p><?php __('page.why.overview.agency.text'); ?></p>
                    <?php __('page.why.readmore'); ?>
                </a>
            </li>
            <li>
                <h3><?php __('page.why.overview.operators.headline'); ?></h3>
                <p>
                    <?php __('page.why.overview.operators.text'); ?>
                </p>
                <a href="#operators" class="readmore"><?php __('page.why.readmore'); ?></a>
            </li>
            <li>
                <h3><?php __('page.why.overview.quality.headline'); ?></h3>
                <p>
                    <?php __('page.why.overview.quality.text'); ?>
                </p>
            </li>

            <li>
                <h3><?php __('page.why.overview.publishers.headline'); ?></h3>
                <p>
                    <?php __('page.why.overview.publishers.text'); ?>
                </p>
                <a href="#publishing" class="readmore"><?php __('page.why.readmore'); ?></a>
            </li>
        </ul>

    </div>

    <div class="content" id="why-details">
        <div style="clear: both"></div>

        <a name="operators">
            <h2><?php __('page.why.overview.operators.headline'); ?></h2>
        </a>

        <div style="float: left; margin-right: 30px; margin-bottom: 50px">
            <i class="fa fa-user-circle" aria-hidden="true""></i>
        </div>

        <?php __('page.why.overview.operators.full', count($checks)); ?>

        <div class="one-day">
            <a href="<?php __a('/one-day-with/amilio.html') ?>" class="more">one day with amilio</a>
            <a href="<?php __a('/one-day-with/thewebhatesme.html') ?>" class="more">one day with twhm</a>
        </div>
        <div class="partner" style="margin-left: 80px; margin-top: 50px">
            <ul>
                <li>
                    <a href="http://www.wetimebox.com/"><img src="/images/startups/wetimebox.png" style="margin-top: 15px"></a>
                </li>
                <li>
                    <a href="http://yuscale.com/"><img src="/images/startups/yuscale.png" style="margin-top: 15px; height: 45px;"></a>
                </li>
                <li>
                    <a href="http://www.amilio.de"><img src="/images/startups/amilio2.png" style="position: relative; top: 7px"><img src="/images/startups/amilio1.png"></a>
                </li>
                <li>
                    <a href="http://buzzrank.de/"><img src="/images/startups/buzzrank.png" style="margin-top: 13px"></a>
                </li>
            </ul>
        </div>

        <div style="clear: both"></div>

    </div>
    <div class="main-element-grey">
        <div class="content" id="why-details">
            <a name="publishing">
                <h2><?php __('page.why.overview.publishers.headline'); ?></h2>
            </a>

            <div style="float: left; margin-right: 30px">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            </div>

            <?php __('page.why.overview.publishers.full'); ?>

            <div style="clear: both"></div>
        </div>
    </div>

</div>
