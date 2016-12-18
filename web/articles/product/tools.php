<div class="content">
    <h1 style="width: 100%; text-align: center">Tools</h1>
    <div class="main-info">
        Leankoala helps to test a website using simple checks like the leantesting approach suggests.
        We provide <?php echo count($checks); ?> tools that can be used to inspect a website or web service.
    </div>
</div>
<div class="main-element-grey" style="margin-bottom: 100px">
    <div class="content info">
        <h2>How to build a powerful test suite.</h2>
        <p style="line-height: 25px; margin-bottom: 40px">
            Every single tool we provide is very powerful itself but when combined they can be used to check all kind of services. To help
            our customers to get creative themselves we created the "one day with leankoala" stories where we teamed up with companies to
            describe how we tested there websites and services.
        </p>
        <a href="/one-day-with.html" class="more">One day with leankoala.</a>
        <a href="/one-day-with/amilio.html" class="more">One day with amilio.</a>
    </div>
</div>

<div class="content" id="page-checks">

    <div style="width: 100%; text-align: center" class="no-mobile">
        <ul class="filter">
            <li class="clickable" data-filter="website">Website</li>
            <li class="clickable" data-filter="seo">SEO</li>
            <li class="clickable" data-filter="webservice">Web Service</li>
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

        <?php foreach ($checks as $key => $check): ?>

            <li class="<?php echo $check['filters'] ?>">
                <img src="<?php echo $check['img'] ?>">
                <a name="<?php echo $key; ?>">
                    <h3><?php echo $check['name'] ?></h3>
                </a>
                <p>
                    <?php echo $check['desc'] ?>
                </p>
            </li>

        <?php endforeach; ?>
    </ul>
</div>

<div style="clear: both"></div>
