<div class="content">
    <h1 style="width: 100%; text-align: center">Tools</h1>
    <div class="main-info">
        <?php __('page.product.tools.headline', count($checks[$language])); ?>
    </div>
</div>
<div class="main-element-grey" style="margin-bottom: 100px">
    <div class="content info">
        <h2><?php __('page.product.testsuite.headline'); ?></h2>
        <p style="line-height: 25px; margin-bottom: 40px">
            <?php __('page.product.testsuite.text'); ?>
        </p>
        <a href="<?php __a('/one-day-with.html'); ?>" class="more">One day with leankoala</a>
        <a href="<?php __a('/one-day-with/amilio.html'); ?>" class="more">One day with amilio</a>
        <a href="<?php __a('/one-day-with/thewebhatesme.html'); ?>" class="more">One day with the web hates me</a>
    </div>
</div>

<div class="content" id="page-checks">

    <div style="width: 100%; text-align: center" class="no-mobile">
        <ul class="filter">
            <li class="clickable" data-filter="website">Website</li>
            <li class="clickable" data-filter="webservice">Web Service</li>
            <li class="clickable" data-filter="seo">SEO</li>
        </ul>
    </div>

    <script>
        $('.filter li').click(function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                filters[$(this).attr('data-filter')] = false;
            } else {
                $(this).addClass('active');
                filters[$(this).attr('data-filter')] = true;
            }

            console.log(filters);

            $('.checks li').each(function () {
                classes = $(this).attr('class').split(' ');
                visible = false;
                $.each(classes, function (key, value) {
                    if (filters[value]) {
                        visible = true;
                    }
                });

                console.log('-----');

                if (visible) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        var filters = new Object();

        $('.filter li').each(function () {
            filters[($(this).attr('data-filter'))] = false;
        });
    </script>

    <div style="clear: both"></div>

    <ul class="checks">

        <?php foreach ($checks[$language] as $key => $check): ?>

            <li class="<?php echo $check['filters'] ?>">
                <a name="<?php echo $key; ?>" class="anchor"></a>
                <img src="<?php echo $check['img'] ?>">
                <h3><?php echo $check['name'] ?></h3>
                <p>
                    <?php echo $check['desc'] ?>
                </p>
            </li>

        <?php endforeach; ?>
    </ul>
</div>

<div style="clear: both"></div>
