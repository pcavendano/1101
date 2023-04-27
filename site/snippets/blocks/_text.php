<section class="_text">
    <div class="ctn">
        <div class="prose">
            <<?= $level = $block->level()->or('h2') ?>><?= $block->title() ?></<?= $level ?>>
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
