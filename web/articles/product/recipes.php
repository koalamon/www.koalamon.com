<div class="content">
    <h1 style="width: 100%; text-align: center"><?php __('page.product.recipes.headline'); ?></h1>
</div>

<style>
    .video .fa-play-circle-o {
        position: absolute;
        font-size: 100px;
        color: #999;
        margin-left: -240px;
        margin-top: 90px;
    }
</style>

<div class="content">
    <div class="features" style="margin-top: 40px">
        <div class="feature-image video" style="margin-left: calc(50% - 264px);">
            <a href="https://www.youtube.com/watch?v=aRDJ50QQuPQ&rel=0" data-toggle="lightbox" data-width="800">
                <img src="/images/features/recipes.png">
                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>

<div style="clear: both"></div>

<div class="content">
    <div class="main-info" style="margin-top: 100px">
        <?php __('page.product.recipes.info'); ?>
    </div>


    <style>
        table {
            margin-top: 30px;
            line-height: 22px;
        }

        .first {
            border-top: 50px solid transparent;
        }

        .first span {
            color: white;
            background-color: #2ecc71;
            padding: 5px 15px;
            border-radius: 5px;
        }

        table tr.recipe td {
            font-size: 14px;
            border-bottom: 20px solid transparent;
            padding: 0;
        }

        table tr td:nth-child(1) {
            font-size: 16px;
            width: 250px;
            color: transparent;
            vertical-align: top;
        }

        table tr td:nth-child(2) {
            width: 200px;
            vertical-align: top;
            padding-right: 20px;
        }

        table tr td:nth-child(3) {
            width: 700px;
            vertical-align: top;
            font-style: italic;
        }
    </style>

    <div style="margin-top: 50px">
        <table>
            <?php $lastIntegration = "" ?>
            <?php foreach (getRecipes() as $key => $recipes) : ?>
                <?php foreach ($recipes as $recipe) : ?>
                    <tr class="recipe <?php if ($lastIntegration != $recipe->integration) echo "first"; ?>">
                        <td>
                            <span><?php echo $key; ?></span>
                        </td>
                        <td><?php echo $recipe->name; ?></td>
                        <td><?php echo $recipe->description; ?></td>
                    </tr>
                    <?php $lastIntegration = $recipe->integration; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>
    </div>

</div>

<div style="clear: both"></div>
