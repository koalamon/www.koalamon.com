<?php

include_once "functions.php";

$eventCount = fetchCheckCount();

file_put_contents(__DIR__ . '/../stats/checkCount.txt', $eventCount);