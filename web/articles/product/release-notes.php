<?php
include_once __DIR__ . '/../../../src/releasenotes.php';
?>
<div id="lean">
    <div class="content">
        <h1 style="width: 100%; text-align: center; margin-bottom: 20px"><?php __("page.product.release-notes.headline"); ?></h1>
    </div>

    <style>
        .info {
            font-size: 30px;
            font-weight: 100;
            text-align: center;
        }

        table tr td.release {
            border-bottom: 40px solid transparent;
            font-size: 20px;
            font-weight: 400;
            column-span: 2;
            text-align: center;
            border-top: 150px solid transparent;
        }

        table tr td.release-desc {
            column-span: 2;
            border-bottom: 40px solid transparent;
            line-height: 30px;
        }

        table tr td.feature-detail {
            width: 200px;
            vertical-align: top;
            font-weight: 600;
            line-height: 25px;
            font-size: 13px;
            border-right: 20px solid transparent;
        }

        table tr td.description {
            line-height: 25px;
            font-size: 13px;
        }

        table tr.feature {
            border-bottom: 10px solid transparent;
        }

        .register-btn {
            background-color: #27ae60;
            padding: 15px;
            color: white;
            border-radius: 10px;
            font-size: 14px;
        }

        #release-notes .description a {
            background-color: #f1c40f;
            border-radius: 3px;
            padding: 3px;
            color: white;
            font-size: 10px;
        }

        #release-notes .description a:hover {
            background-color: #f39c12;
        }

        #release-notes .description .images {
            margin-top: 20px;
            margin-bottom: 50px;
        }

        #release-notes .description img {
            margin-right: 10px;
        }

        #release-notes .description .images a {
            background-color: white;
        }
    </style>

    <div class="content info">
        <?php __("page.product.release-notes.info"); ?>
    </div>

    <div class="content" style="margin-top: 0px">

        <table id="release-notes">
            <?php foreach ($releaseNotes as $key => $releaseNote): ?>
                <tr>
                    <td colspan="2" class="release">
                        <a name="<?php echo $key; ?>"></a>
                        <?php echo $releaseNote['name']; ?> <span style="font-weight: 100"> - <?php echo $releaseNote['date']; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="release-desc">
                        <?php echo $releaseNote['desc']; ?>
                    </td>
                </tr>
                <?php foreach ($releaseNote['features'] as $feature): ?>
                    <tr class="<?php echo $feature['type']; ?> feature">
                        <td class="feature-detail"><?php echo $feature['feature']; ?></td>
                        <td class="description">
                            <?php echo $feature['desc']; ?>
                            <?php if (array_key_exists('images', $feature)): ?>
                                <div class="images">
                                    <?php foreach ($feature['images'] as $image) : ?>
                                        <a href="/images/release/<?php echo $image; ?>" data-toggle="lightbox"  data-gallery="<?php echo $key ?>">
                                            <img src="/images/release/<?php echo $image; ?>" class="img-fluid" style="width: 200px">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr style="border-top: 50px solid transparent">
                    <td colspan="2" style="text-align: center">
                        <a href="https://monitor.leankoala.com/secure_area/register/" class="register-btn">
                            <?php __('global.trial.start'); ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>