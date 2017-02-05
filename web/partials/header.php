<div class="content">
    <header>

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="logo">
                <a href="<?php __a('/'); ?>">
                    <img src="/images/logo_small.png">
                </a>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <i class="fa fa-bars" aria-hidden="true" style="color: #999;"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li></li>
                        <li>
                            <div data-toggle="dropdown" class="clickable dropdown-label"><?php __('menu.main.why.head'); ?></div>
                            <ul class="dropdown-menu clickable" style="width: 170px">
                                <li><a href="<?php __a('/why.html'); ?>"><?php __('menu.main.why.overview'); ?></a></li>
                                <li><a href="<?php __a('/one-day-with.html'); ?>"><?php __('menu.main.why.onedaywith'); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <div data-toggle="dropdown" class="clickable dropdown-label"><?php __('menu.main.product.head'); ?></div>
                            <ul class="dropdown-menu clickable">
                                <li><a href="<?php __a('/product/features.html'); ?>"><?php __('menu.main.product.features'); ?></a></li>
                                <li><a href="<?php __a('/product/tools.html'); ?>"><?php __('menu.main.product.tools'); ?></a></li>
                                <li><a href="<?php __a('/on-the-road.html'); ?>"><?php __('menu.main.product.ontheroad'); ?></a></li>
                                <li><a href="<?php __a('/release-notes.html'); ?>"><?php __('menu.main.product.releasenotes'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php __a('/pricing.html'); ?>"><?php __('menu.main.pricing.head'); ?></a></li>
                        <li>
                            <div data-toggle="dropdown" class="clickable dropdown-label"><?php __('menu.main.resources.head'); ?></div>
                            <ul class="dropdown-menu clickable">
                                <li><a href="https://blog.leankoala.com/"><?php __('menu.main.resources.blog'); ?></a></li>
                                <li><a href="<?php __a('/lean-testing.html'); ?>"><?php __('menu.main.resources.leantesting'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="https://monitor.leankoala.com/"><?php __('menu.main.login'); ?></a></li>
                        <li><a href="https://monitor.leankoala.com/secure_area/register/"><strong><?php __('menu.main.signup'); ?></strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
</div>