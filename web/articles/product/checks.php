<?php

$checks = [
    'koalaping' => ['img' => 'https://monitor.leankoala.com/images/integrations/koalaping.png', 'name' => 'KoalaPing', 'desc' => 'Checks if the given components answer with the correct http status code.', 'filters' => 'website webservice'],
    'littleseo' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/littleseo.png', 'name' => 'LittleSeo', 'desc' => 'Checks if the robots.txt contains allow/disallow all.', 'filters' => 'seo'],
    'cssselector' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/cssselector.png', 'name' => 'CSS Selector', 'desc' => 'This tool can check if a given css selector exists on any given component.', 'filters' => 'website'],
    'httpheader' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/head.png', 'name' => 'Http Header Check', 'desc' => 'The http header checker can check if mandatory header parameters are existing.', 'filters' => 'website webservice'],
    'httpscertificatecheck' => ['img' => 'https://monitor.leankoala.com/images/integrations/koalaping.png', 'name' => 'Https Certificate Check', 'desc' => 'Checks if the https certificate expires within a given time span.', 'filters' => 'website webservice'],
    'jsonpathCheck' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/jsonpath.png', 'name' => 'Json Path Check', 'desc' => 'Checks if a given json path exists.', 'filters' => 'webservice'],
    'javascript Error Check' => ['img' => 'https://monitor.leankoala.com/images/integrations/jserror.png', 'name' => 'JavaScript Error Check', 'desc' => 'Checks for javascript errors on the given components.', 'filters' => 'website'],
    'googlepagespeed' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationgooglepagespeed/images/integration.png', 'name' => 'Google Page Speed', 'desc' => 'Checks the google page speed score against a user defined threshold.', 'filters' => 'website seo'],
    'jsonvalidator' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/json.png', 'name' => 'Json Validator', 'desc' => 'Checks if the given json response is well formed.', 'filters' => 'website webservice'],
    'missingrequest' => ['img' => 'https://monitor.leankoala.com/images/integrations/missing_logo.png', 'name' => 'MissingRequest', 'desc' => 'Checks if the mandatory http requests are triggered.', 'filters' => 'website'],
    'textchecker' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/regex.png', 'name' => 'Text Checker', 'desc' => 'Checks if a given text or regular expression can be found on a component.', 'filters' => 'website webservice'],
    'siteInfo' => ['img' => 'https://monitor.leankoala.com/images/integrations/siteinfo.png', 'name' => 'SiteInfo', 'desc' => 'Checks if the given components file size is larger than a given threshold.', 'filters' => 'website'],
    'smoke' => ['img' => 'https://monitor.leankoala.com/images/integrations/smoke.png', 'name' => 'Smoke', 'desc' => 'Our Swiss pocket knife: Scans the given systems and the first 200 pages found against a set of 21 rules.', 'filters' => 'website'],
    'xpathChecker' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/xpath.png', 'name' => 'XPath Checker', 'desc' => 'Checks if a given xpath expressions can be found in a component.', 'filters' => 'website'],
    'xmlsitemap' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/sitemap.png', 'name' => 'XML Sitemap Checker', 'desc' => 'Checks if a given xml sitemap is valid.', 'filters' => 'website'],
    'xmlchecker' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/xml.png', 'name' => 'XML Checker', 'desc' => 'Checks if a given xml document is well-formed.', 'filters' => 'website webservice'],
    'xsdvalidator' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/xsd.png', 'name' => 'XSD Validator', 'desc' => 'Checks if a given xml document is valid against one ore more xsd files.', 'filters' => 'website webservice'],
    'jsonschema' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/jsonschema.png', 'name' => 'Json Schema Validator', 'desc' => 'Checks if a JSON document is valid against a JSON Schema file.', 'filters' => 'website webservice'],
];

ksort($checks);

?>


<div class="content">
    <h1 style="width: 100%; text-align: center">Checks</h1>
    <div class="main-info">
        Leankoala helps to test a website using simple checks like the leantesting approach suggests.
        We provide <?php echo count($checks); ?> checks that can be used to inspect a website or web service.
    </div>
</div>
<div class="main-element-grey" style="margin-bottom: 100px">
    <div class="content info">
        <h2>How to build a powerful test suite.</h2>
        <p style="line-height: 25px; margin-bottom: 40px">
            Every single check we provide is very powerful itself but when combined they can be used to check all kind of services. To help
            your customers to get creative themself we created the "one day with leankoala" stories where we teamed up with web companies to
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

        <?php foreach ($checks as $check): ?>

            <li class="<?php echo $check['filters'] ?>">
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
