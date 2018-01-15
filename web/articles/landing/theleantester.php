<?php
$footerColor = '#3498db';

$removeHeader = true;

$title = "Webinar: Wie sich Budget und Qualität lieben lernten";
$description = "Profitable digitale Projekte brauchen schlankes Qualitätsmanagement";
$og_image = "/images/landing/landing-webinar.png";

if (array_key_exists('date', $_GET)) {
    $date = $_GET['date'];
} else {
    $date = '2017-01-17';
}

$date = new \DateTime($date);

$weekdays = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];

$wochentag = $weekdays[$date->format('w')];
$formattedDate = $date->format('d.m.Y');

?>

<style>
    .content-header {
        text-align: center;
        width: 100%;
        margin-top: 40px;
        margin-bottom: 100px;
        font-size: 48px;
        color: #4A4A4A;
    }

    .content-header h1 {
        font-weight: 400;
        margin-bottom: 20px;
    }

    .content-header .kicker {
        font-size: 20px;
        color: #4A4A4A;
        line-height: 25px;
    }

    .content-main {
        text-align: center;
        width: 950px;
        margin: auto;
    }

    .content-main .content-teaser {
        float: left;
        text-align: center;
    }

    .content-main .content-register {
        text-align: left;
        width: 400px;
        float: right;
        margin-left: 30px;
    }

    .content-main .content-register .email {
        position: relative;
        left: -48px;
        margin-bottom: 30px;
    }

    .content-main .content-register .email label {
        display: block;
        margin-bottom: 15px;
        color: #4A4A4A;
    }

    .content-main .content-register .email input {
        width: 280px;
        border-radius: 6px;
        height: 30px;
        padding: 4px;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: 2px solid #eee; /* Here */
        margin-bottom: 30px;
    }

    .content-main .content-register .email input[type="submit"] {
        padding: 10px;
        height: 50px;
        border: none;
        font-size: 16px;
        background-color: #4B505B;
        color: white;
        width: 292px;
    }

    .content-main .content-register .content-info {
        font-size: 16px;
        color: #4A4A4A;
        line-height: 25px;
        width: 350px;
    }

    .content-tags {
        margin-top: 100px;
        text-align: center;
    }

    .content-customers {
        margin-top: 150px;
        text-align: center;
    }

    .content-customers ul {
        display: inline-block;
        margin-top: 40px;
    }

    .content-customers ul li {
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .content-customers ul li:last-child {
        margin-right: 0;
    }

    .content-customers h2 {
        margin-bottom: 30px;
    }

    #disclaimer {
        margin-top: 30px;
        color: #2980b9;
    }

    #disclaimer a {
        color: #2980b9;
    }

    @media (max-width: 500px) {
        .content-main .content-teaser {
            display: none;
        }

        .content-main {
            width: 100%;
        }

        .content-main .content-register {
            width: 100%;
        }

        .content-main .content-register .email {
            position: inherit;
            text-align: center;
            width: 100%;
        }

        .content-tags {
            display: none;
        }

        .content-info {
            margin: 10px;
        }

        .content-customers {
            margin: 10px;
        }

        .content-customers ul li {
            margin-right: 0;
            width: 100%;
            text-align: center;
        }
    }

</style>

<div>
    <div class="content-header">
        <h1>
            "Wie sich Budget und Qualität lieben lernten"
        </h1>
        <div class="kicker">
            Profitable digitale Projekte brauchen schlankes Qualitätsmanagement.
        </div>
    </div>
    <div class="content-main">
        <div class="content-teaser">
            <img src="/images/landing/bigtags.png">
        </div>
        <div class="content-register">

            <div class="content-info" style="padding-top: 20px; padding-bottom: 20px">
                Für nur <strong>30 Minuten</strong> Eurer Zeit belohnen wir Euch mit unserem Ansatz zu schlanker Qualitätssicherung für digitale Projekte!
            </div>

            <div class="email">
                <!--iframe style="width: 350px; height: 250px; display: block;margin-left: auto;margin-right: auto;" src="https://my.sendinblue.com/users/subscribe/js_id/2h2a6/id/2" frameborder="0"
                        scrolling="auto" allowfullscreen></iframe-->
                <!-- SendinBlue Signup Form HTML Code -->
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1"/>
                </head>
                <style>
                    div#sib_embed_signup .needsfilled input {
                        border-color: #B94A48 !important;
                        color: #B94A48 !important;
                    }

                    div#sib_embed_signup .needsfilled {
                        color: #B94A48 !important;
                    }

                    div#sib_embed_signup input[type="text"] {
                        border: 1px solid #CCCCCC;
                        border-radius: 4px;
                        -moz-border-radius: 4px;
                        -webkit-border-radius: 4px;
                    }

                    div#sib_embed_signup input[type=number]::-webkit-inner-spin-button, div#sib_embed_signup input[type=number]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        margin: 0;
                    }

                    div#sib_embed_signup input[type=number] {
                        -moz-appearance: textfield;
                    }

                    div#sib_embed_signup div.message_area {
                        position: relative;
                        padding: 10px 30px 10px 10px;
                        margin: 0px 0px 10px 0px;
                        font-size: 14px;
                        border-radius: 5px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        box-sizing: border-box;
                    }

                    div#sib_embed_signup div.message_area button.close {
                        position: absolute;
                        right: 8px;
                        top: 8px;
                        color: inherit;
                        background: 0 0;
                        border: 0;
                        padding: 0px;
                        -webkit-appearance: none;
                        cursor: pointer;
                        font-weight: bold;
                        font-size: 14px;
                    }

                    .tipicon {
                        cursor: pointer;
                        padding: 3px 7px;
                        font-size: 12px;
                        font-weight: bold;
                        line-height: 1.2;
                        color: #fff;
                        text-align: center;
                        vertical-align: baseline;
                        background-color: #999;
                        border-radius: 10px;
                        text-decoration: none;
                    }

                    .tooltip {
                        display: inline;
                        position: absolute;
                        left: 97%;
                    }

                    .tooltip:hover:after {
                        background: #333;
                        background: rgba(0, 0, 0, .8);
                        border-radius: 5px;
                        color: #fff;
                        content: attr(data-title);
                        right: -2px;
                        bottom: 26px;
                        padding: 5px 15px;
                        position: absolute;
                        z-index: 98;
                        width: 220px;
                    }

                    .tooltip_small:hover:after {
                        padding: 5px 5px;
                        width: 150px;
                    }

                    .tooltip:hover:before {
                        border: solid;
                        border-color: #333 transparent;
                        border-width: 6px 6px 0 6px;
                        bottom: 20px;
                        content: "";
                        left: 1px;
                        position: absolute;
                        z-index: 99;
                    }

                    .sib-dropdown-menu.flag-icon {
                        display: none;
                        height: 100px;
                        overflow-x: hidden;
                        min-width: 230px;
                        font-size: 13px;
                        list-style: none;
                        padding-left: 14px;
                        border: 1px solid rgba(0, 0, 0, .15);
                        background: white;
                        border-radius: 4px;
                        margin-top: 10px;
                    }

                    .sib-dropdown-menu.flag-icon li a {
                        display: block;
                        white-space: nowrap;
                        text-decoration: none;
                        color: rgba(0, 0, 0, 0.87);
                        box-shadow: none;
                    }

                    .sms_field .country-block {
                        margin-right: 3px !important;
                        float: left;
                        width: 56px;
                    }

                    .icon-arrow {
                        display: inline-block;
                        width: 0px;
                        height: 0px;
                        margin-left: 2px;
                        margin-top: 5px;
                        border-top: 4px dashed;
                        border-right: 4px solid transparent;
                        border-left: 4px solid transparent;
                        vertical-align: text-top;
                    }

                    .sib-dropdown-toggle.country-flg {
                        display: inline-block;
                        font-size: 13px;
                    }

                    body {
                        background-Image: url('');
                    }

                    body {
                        background-color: #ffffff;
                    }

                    div#sib_embed_signup .sib-container {
                        background: rgba(255, 255, 255, 1);
                    }

                    div#sib_embed_signup .sib-container h1 {
                        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    }

                    div#sib_embed_signup h1.title {
                        font-size: 30px;
                    }

                    div#sib_embed_signup .sib-container .forms-builder-footer, div#sib_embed_signup .sib-container .description, div#sib_embed_signup .sib-container .fake-label, div#sib_embed_signup .sib-container .row, div#sib_embed_signup .sib-container #company-name {
                        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    }

                    div#sib_embed_signup .forms-builder-footer, div#sib_embed_signup div.description, div#sib_embed_signup .fake-label, div#sib_embed_signup .row {
                        font-size: 24px;
                    }

                    div#sib_embed_signup .sib-container .button {
                        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    }

                    div#sib_embed_signup .button {
                        font-size: 14px;
                    }

                    div#sib_embed_signup input {
                        font-size: 13px;
                    }

                    div#sib_embed_signup .sib-containter h1 {
                        color: #232323;
                    }

                    div#sib_embed_signup .sib-container {
                        color: #343434;
                    }

                    div#sib_embed_signup .sib-container .button {
                        color: #ffffff;
                    }

                    div#sib_embed_signup .sib-container .button {
                        background: #e74c3b;
                    }

                    div#sib_embed_signup .forms-builder-wrapper {
                        max-width: 350px;
                    }

                    div#sib_embed_signup .sib-container {
                        padding: 25px 15px 15px;
                    }

                    div#sib_embed_signup .header {
                        padding: 0 10px;
                    }

                    div#sib_embed_signup h1.title {
                        lineHeight: 40px;
                    }

                    div#sib_embed_signup h3.company-name {
                        lineHeight: 20px;
                    }

                    div#sib_embed_signup div.description {
                        padding: 10px 15px;
                    }

                    div#sib_embed_signup div.row {
                        padding: 10px;
                    }

                    div#sib_embed_signup input[type=text] {
                        padding: 8px 4px;
                        width: 100% !important;
                        box-sizing: border-box;
                    }

                    div#sib_embed_signup input[type=number] {
                        padding: 8px 4px;
                        width: 100% !important;
                        box-sizing: border-box;
                    }

                    div#sib_embed_signup .tooltip {
                        left: 98%;
                    }

                    div#sib_embed_signup div.message_area {
                        font-size: 12px;
                    }
                </style>
                <link rel="stylesheet" href="https://my.sendinblue.com/public/theme/version4/assets/styles/style.css"/>
                <div id="sib_embed_signup" style="padding: 10px;">
                    <div class="forms-builder-wrapper" style="position:relative;margin-left: auto;margin-right: auto;">
                        <input type="hidden" id="sib_embed_signup_lang" value="de">
                        <input type="hidden" id="sib_embed_invalid_email_message" value="Diese E-Mail-Adresse ist nicht gültig. ">
                        <input type="hidden" name="primary_type" id="primary_type" value="email">
                        <div id="sib_loading_gif_area" style="position: absolute;z-index: 9999;display: none;">
                            <img src="https://my.sendinblue.com/public/theme/version4/assets/images/loader_sblue.gif"
                                 style="display: block;margin-left: auto;margin-right: auto;position: relative;top: 40%;">
                        </div>
                        <form class="description" id="theform" name="theform" action="https://my.sendinblue.com/users/subscribeembed/js_id/2h2a6/id/2"
                              onsubmit="ga('send', 'event', 'webinar', 'registration', 'The lean tester'); return false;">
                            <input type="hidden" name="js_id" id="js_id" value="2h2a6"><input type="hidden" name="listid" id="listid" value="18"><input type="hidden" name="from_url" id="from_url"
                                                                                                                                                        value="yes"><input type="hidden"
                                                                                                                                                                           name="hdn_email_txt"
                                                                                                                                                                           id="hdn_email_txt" value="">
                            <div class="sib-container rounded">

                                <input type="hidden" name="req_hid" id="req_hid" value="" style="font-size: 13px; font-family: &quot;Trebuchet MS&quot;, Verdana, Tahoma, Geneva, sans-serif;">
                                <div class="header" style="padding: 0px 10px;">
                                    <h1 class="title editable" data-editfield="newsletter_name"
                                        style="font-weight: normal; text-align: left; font-size: 30px; margin-bottom: 2px; padding: 0px; margin-top: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(35, 35, 35); display: none;">
                                        Webinar</h1>
                                    <h3 id="company-name"
                                        style="font-weight: normal; text-align: left; font-size: 20px; margin-bottom: 12px; padding: 0px; margin-top: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); display: block;">
                                        <?php echo $wochentag; ?>, <?php echo $formattedDate ?>, 10:00 Uhr</h3>
                                </div>
                                <div class="description editable" data-editfield="newsletter_description"
                                     style="padding: 10px 15px; border-bottom: 1px solid rgb(204, 204, 204); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-size: 24px; display: none;">
                                    am 16.11.2017
                                </div>
                                <div class="view-messages" style=" margin:5px 0;"></div>
                                <!-- an email as primary -->
                                <div class="primary-group email-group forms-builder-group ui-sortable" style="">
                                    <div class="row mandatory-email"
                                         style="padding: 10px; position: relative; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-size: 24px; left: 0px; top: 0px;">
                                        <div class="lbl-tinyltr" style="clear: both; float: none; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">Email</div>
                                        <input type="text" name="email" id="email" value="" style="padding: 8px 4px; width: 85%; min-width: auto;">
                                        <div style="clear:both;"></div>
                                        <div class="hidden-btns">
                                            <a class="btn move" href="#"><i class="fa fa-arrows"></i></a><br>
                                            <!--<a class="btn btn-danger delete"  href="#"><i class="fa fa-trash-o fa-inverse"></i></a>-->
                                        </div>
                                    </div>

                                </div>
                                <div class="captcha forms-builder-group" style="display: none;">
                                    <div class="row" style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-size: 24px; padding: 10px;">
                                        <div id="gcaptcha" style="transform: scale(0.85); margin-left: -23px;"></div>
                                    </div>
                                </div>

                                <!-- end of primary -->
                                <div class="byline"
                                     style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-weight: bold; font-size: 24px; text-align: center; display: block;">
                                    <button class="button editable " type="submit" data-editfield="subscribe"
                                            onclick=""
                                            style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); background: rgb(231, 76, 59); display: inline-block; white-space: nowrap; min-height: 30px; margin: 0px 5px 0px 0px; padding: 0px 10px; text-decoration: none; text-transform: uppercase; text-align: center; font-weight: bold; font-style: normal; font-size: 14px; cursor: pointer; border: 0px; border-radius: 4px; vertical-align: top; height: auto; line-height: 150%;">
                                        Zum&nbsp;webinar&nbsp;anmelden
                                    </button>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    var sib_prefix = 'sib';
                    var sib_dateformat = 'dd-mm-yyyy';
                </script>
                <script type='text/javascript' src='https://my.sendinblue.com/public/theme/version4/assets/js/src/subscribe-validate.js?v=1509615770'></script>
                <!-- End : SendinBlue Signup Form HTML Code -->

            </div>

            <div class="content-info">
                Wer agil sein will, muss vor allem pragmatisch agieren. Um schlank durch den Nebel zwischen Kundenanforderungen, Zeit, Budget und Ressourcen zu navigieren, braucht es verlässliche
                schlanke Tools, aber vor allem einen neuen Blick auf das Qualitätsmanagement.
            </div>


            <div id="disclaimer">
                <a href="<?php __a('/tos.html'); ?>">
                    Nutzungsbedingungen Leankoala
                </a>
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
    <div class="content-customers">
        <h2>Großartige Kunden. Unter anderem diese wunderbaren Firmen.</h2>
        <ul>
            <li><img src="/images/customers/hanse.png"></li>
            <li><img src="/images/customers/finanzcheck.png"></li>
            <li><img src="/images/customers/drid.png"></li>
            <li><img src="/images/customers/ministry.png"></li>
            <li><img src="/images/customers/fortune.png"></li>
            <li><img src="/images/customers/xcel.png"></li>
        </ul>
        <!--img src="/images/landing/leancustomers.png"-->
    </div>

</div>

<div style="clear: both"></div>