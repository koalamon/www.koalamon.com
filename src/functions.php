<?php

$prices = ['large' => '69'];

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

    $sum = 0;

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