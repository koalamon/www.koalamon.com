<?php
include_once __DIR__ . '/../../src/releasenotes.php';
?>
<div id="lean">
    <div class="content">
        <h1 style="width: 100%; text-align: center; margin-bottom: 20px">Release Notes</h1>
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
    </style>

    <div class="content info">
        These are the release notes of Leankoala. We decided to create small releases on a weekly basis instead of big ones
        every now and then.
    </div>

    <div class="content" style="margin-top: 150px">

        <table>
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
                        <td class="description"><?php echo $feature['desc']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>

    </div>
</div>