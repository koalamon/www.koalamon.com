<?php

if (!array_key_exists('article', $_GET)) {
    $article = 'index';
} else {
    $article = str_replace('.', '', $_GET['article']);
}

if ($article == 'google8e129feae7efeb1f.html') {
    include_once __DIR__ . '/articles/google8e129feae7efeb1f.php';
    die;
}

include_once __DIR__ . '/../src/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'partials/head.php' ?>
</head>
<body>

<?php include 'partials/header.php' ?>

<article>
    <?php

    include __DIR__ . "/articles/" . $article . ".php";
    ?>
</article>

<div style="clear: both"></div>

<?php include 'partials/footer.php' ?>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-80920201-3', 'auto');
    ga('send', 'pageview');

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/57f62d198bab9a1c11334bff/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<style>
    .cc-compliance {
        margin-right: 80px;
    }
</style>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.2/cookieconsent.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.2/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#000"
                },
                "button": {
                    "background": "#f1d600"
                }
            },
            "content": {
                "href": "https://www.leankoala.com/tos.html#cookies"
            }
        })
    });
</script>

</body>
</html>