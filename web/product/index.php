<?php

if (!isset($language)) {
    header("Location: /en/product/" . $_GET['article']. '.html'); /* Browser umleiten */
    exit;
}
