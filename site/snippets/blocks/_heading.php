<section class="_heading">
    <div class="ctn">
        <<?= $level = $block->level()->or('h2') ?> class="<?= $level ?>">
        <?= $block->title() ?>
        </<?= $level ?>>
        <?php if ($block->links()->inNoteEmpty()): ?>
        <div class="links">
            <?php foreach ($block->links()->toStructure() as $l): ?>
            <a class="<?= $s = $l->style()->or('btn') ?>" href="<?= $l->url() ?>"><?= $l->label() ?></a>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </div>
</section>
