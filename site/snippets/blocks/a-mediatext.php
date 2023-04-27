<?php 
    $bg = $block->background()->isNotEmpty() ? '--color-bg:'. $block->background() . ';' : null;
    $style = ' style="' . $bg . '"';
?>

<a-mediatext class="block block--a"<?= e($block->anchor()->isNotEmpty(), ' id="'. $block->anchor() .'"') ?><?= $style ?>>
    <div class="ctn">
        <div class="media">
            <?php if ($picture = $block->picture()->toFile()): ?>
            <?= snippet('img', ['image' => $picture]) ?>
            <?php endif ?>
        </div>
        <div class="content">
            <?php if ($title = $block->title()): ?>
            <h2 class="h2 mb-200"><?= $title ?></h2>
            <?php endif ?>
            <div class="lede">
                <?= $block->text()->kirbytext() ?>
            </div>
        </div>
    </div>
    <?php if ($block->btnLabel()->isNotEmpty() && $block->btnUrl()->isNotEmpty()): ?>
    <a class="btn block-cta" href="<?= $block->btnUrl() ?>"><?= $block->btnLabel() ?></a>
    <?php endif ?>
</a-mediatext>
