<section class="_feature">
    <div class="ctn">
        <div class="media <?= $block->position()->or('left') ?>">
            <?php if($pic = $block->picture()->toFile()): ?>
            <?= snippet('img', ['image'=>$pic]) ?>
            <?php endif ?>
        </div>
        <div class="prose">
            <?= $block->text()->kirbytext() ?>
            <?php if ($block->links()->isNotEmpty()): ?>
            <div class="links">
                <?php foreach ($block->links()->toStructure() as $l): ?>
                <a class="<?= $s = $l->style()->or('btn') ?>" href="<?= $l->url() ?>"><?= $l->label() ?></a>
                <?php endforeach ?>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>
