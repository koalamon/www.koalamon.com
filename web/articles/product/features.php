<div class="content">
    <h1 style="width: 100%; text-align: center"><?php __('page.product.features.headline'); ?></h1>
</div>

<div class="content">
    <div class="main-info">
        <?php __('page.product.features.info'); ?>
    </div>
    <ul class="features">
        <li>
            <div class="feature-image">
                <img src="/images/features/checks.png">
            </div>
            <div class="topic"><?php __('page.product.features.feature.tools.headline'); ?></div>
            <div class="description" style="margin-bottom: 20px">
                <?php __('page.product.features.feature.tools.text', count($checks[$language])); ?>
            </div>
            <a href="<?php __a('/product/tools.html'); ?>" class="more">
                <?php __('page.product.features.feature.tools.button'); ?>
            </a>
        </li>
        <li>
            <div class="feature-image">
                <img src="/images/features/recipes.png">
            </div>
            <div class="topic"><?php __('page.product.features.feature.recipes.headline'); ?></div>
            <div class="description" style="margin-bottom: 20px">
                <?php __('page.product.features.feature.recipes.text'); ?>
            </div>
            <a href="<?php __a('/product/recipes.html'); ?>" class="more">
                <?php __('page.product.features.feature.recipes.button'); ?>
            </a>
        </li>
        <li>
            <div class="feature-image">
                <img src="/images/features/history.png">
            </div>
            <div class="topic"><?php __('page.product.features.feature.history.headline'); ?></div>
            <div class="description">
                <?php __('page.product.features.feature.history.text'); ?>
            </div>
        </li>
        <li>
            <div class="feature-image">
                <img src="/images/features/alerting.png">
            </div>
            <div class="topic"><?php __('page.product.features.feature.alerting.headline'); ?></div>
            <div class="description">
                <?php __('page.product.features.feature.alerting.text'); ?>
            </div>
        </li>
        <li>
            <div class="feature-image">
                <img src="/images/features/ack.png">
            </div>
            <div class="topic"><?php __('page.product.features.feature.acknowledgement.headline'); ?></div>
            <div class="description">
                <?php __('page.product.features.feature.acknowledgement.text'); ?>
            </div>
        </li>
        <li>
            <div class="feature-image">
                <img src="/images/features/slack.png">
            </div>
            <div class="topic"><?php __('page.product.features.feature.slack.headline'); ?></div>
            <div class="description">
                <?php __('page.product.features.feature.slack.text'); ?>
            </div>
        </li>
    </ul>
</div>

<div style="clear: both"></div>
