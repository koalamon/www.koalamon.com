<?php

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