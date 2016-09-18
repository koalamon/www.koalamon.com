<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'partials/head.php' ?>
</head>
<body>

<?php include 'partials/header.php' ?>

<article>
    <?php
    if (!array_key_exists('article', $_GET)) {
        $article = 'index';
    } else {
        $article = str_replace('.', '', $_GET['article']);
    }
    include __DIR__ . "/articles/" . $article . ".php";
    ?>
</article>

<?php include 'partials/footer.php' ?>

</body>
</html>