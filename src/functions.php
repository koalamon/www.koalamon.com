<?php

$prices = ['large' => '69'];

$checks = [
    'koalaping' => ['img' => 'https://monitor.leankoala.com/images/integrations/koalaping.png', 'name' => 'KoalaPing', 'desc' => 'Checks if the given components answer with the correct http status code.', 'filters' => 'website webservice'],
    'littleseo' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/littleseo.png', 'name' => 'LittleSeo', 'desc' => 'Checks if the robots.txt contains allow/disallow all.', 'filters' => 'seo'],
    'cssselector' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/cssselector.png', 'name' => 'CSS Selector', 'desc' => 'This tool can check if a given css selector exists on any given component.', 'filters' => 'website'],
    'httpheader' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/head.png', 'name' => 'Http Header Check', 'desc' => 'The http header checker can check if mandatory header parameters are existing.', 'filters' => 'website webservice'],
    'httpscertificatecheck' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/httpscert.png', 'name' => 'Https Certificate Check', 'desc' => 'Checks if the https certificate expires within a given time span.', 'filters' => 'website webservice'],
    'jsonpathCheck' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/jsonpath.png', 'name' => 'Json Path Check', 'desc' => 'Checks if a given json path exists.', 'filters' => 'webservice'],
    'javascripterrorcheck' => ['img' => 'https://monitor.leankoala.com/images/integrations/jserror.png', 'name' => 'JavaScript Error Check', 'desc' => 'Checks for javascript errors on the given components.', 'filters' => 'website'],
    'googlepagespeed' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationgooglepagespeed/images/integration.png', 'name' => 'Google Page Speed', 'desc' => 'Checks the google page speed score against a user defined threshold.', 'filters' => 'website seo'],
    'jsonvalidator' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/json.png', 'name' => 'Json Validator', 'desc' => 'Checks if the given json response is well formed.', 'filters' => 'website webservice'],
    'missingrequest' => ['img' => 'https://monitor.leankoala.com/images/integrations/missing_logo.png', 'name' => 'MissingRequest', 'desc' => 'Checks if the mandatory http requests are triggered.', 'filters' => 'website'],
    'textchecker' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/regex.png', 'name' => 'Text Checker', 'desc' => 'Checks if a given text or regular expression can be found on a component.', 'filters' => 'website webservice'],
    'siteInfo' => ['img' => 'https://monitor.leankoala.com/images/integrations/siteinfo.png', 'name' => 'SiteInfo', 'desc' => 'Checks if the given components file size is larger than a given threshold.', 'filters' => 'website'],
    'smoke' => ['img' => 'https://monitor.leankoala.com/images/integrations/smoke.png', 'name' => 'Smoke', 'desc' => 'Our Swiss pocket knife: Scans the given systems and the first 200 pages found against a set of 21 rules.', 'filters' => 'website'],
    'xpathChecker' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/xpath.png', 'name' => 'XPath Checker', 'desc' => 'Checks if a given xpath expressions can be found in a component.', 'filters' => 'website'],
    'xmlsitemap' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/sitemap.png', 'name' => 'XML Sitemap Checker', 'desc' => 'Checks if a given xml sitemap is valid.', 'filters' => 'website'],
    'xmlchecker' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/xml.png', 'name' => 'XML Checker', 'desc' => 'Checks if a given xml document is well-formed.', 'filters' => 'website webservice'],
    'xsdvalidator' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/xsd.png', 'name' => 'XSD Validator', 'desc' => 'Checks if a given xml document is valid against one ore more xsd files.', 'filters' => 'webservice'],
    'jsonschema' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/jsonschema.png', 'name' => 'Json Schema Validator', 'desc' => 'Checks if a JSON document is valid against a JSON Schema file.', 'filters' => 'website webservice'],
    'googlemobilefriendly' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/mobile.png', 'name' => 'Google Mobile friendly', 'desc' => 'Checks if a system is mobile friendly.', 'filters' => 'website seo'],
    'performance' => ['img' => 'https://monitor.leankoala.com/bundles/leankoalaintegrationsmoke/images/performance.png', 'name' => 'Performance Check', 'desc' => 'Checks if the given component responds within a given time.', 'filters' => 'website webservice seo'],

];

ksort($checks);

function getRecentBlogPosts($count = 3)
{
    $blogApiUrl = "https://blog.leankoala.com/api/get_recent_posts/";
    $recentPostsRaw = file_get_contents($blogApiUrl);

    $recentPosts = json_decode($recentPostsRaw);

    $recentPostLimited = array();

    for ($i = 0; $i < $count; $i++) {
        $recentPostLimited[] = $recentPosts->posts[$i];
    }

    return $recentPostLimited;
}

function fetchCheckCount()
{
    $sources = ["https://monitor.leankoala.com/rest/eventcount", "http://lean.xcel.io/rest/eventcount"];

    $sum = 5000000;

    foreach ($sources as $source) {
        $result = json_decode(file_get_contents($source));
        $sum += $result->events;
    }

    return $sum;
}

function getCheckCount()
{
    return (int)file_get_contents(__DIR__ . '/../stats/checkCount.txt');
}
