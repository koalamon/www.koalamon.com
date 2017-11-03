<?php
$footerColor = '#3498db';
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
        width: 800px;
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
    }

    .content-main .content-register .email {
        position: relative;
        left: -25px;
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
    }

    .content-tags {
        margin-top: 100px;
        text-align: center;
    }

    .content-customers {
        margin-top: 150px;
        text-align: center;
    }

    .content-customers h2 {
        margin-bottom: 30px;
    }
</style>

<div>
    <div class="content-header">
        <h1>
            "Modernes Testen muss leichtgewichtig sein!"
        </h1>
        <div class="kicker">
            Eine kurze Geschichte über Qualitätssicherung und wie sie sich geändert hat.
        </div>
    </div>
    <div class="content-main">
        <div class="content-teaser">
            <img src="/images/landing/leantester.png">
        </div>
        <div class="content-register">
            <div class="email">

                <iframe style="width: 350px; height: 300px; display: block;margin-left: auto;margin-right: auto;" src="https://my.sendinblue.com/users/subscribe/js_id/2h2a6/id/2" frameborder="0"
                        scrolling="auto" allowfullscreen></iframe>

            </div>
            <div class="content-info">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy Rethink Web Testing
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                eos et accusam et justo duo dolores et ea rebum.
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
    <div class="content-tags">
        <img src="/images/landing/tags.png">
    </div>
    <div class="content-customers">
        <h2>Great customers including these fine companies.</h2>
        <img src="/images/landing/leancustomers.png">
    </div>
</div>