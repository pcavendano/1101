<site-menu role="menu">
    <nav>
        <?php foreach ($site->nav()->toStructure() as $a): ?>
        <a href="<?= $a->url() ?>" role="menuitem"><?= $a->label() ?></a>
        <?php endforeach ?>
        <?= snippet('ls') ?>
    </nav>
    <button><?= t('close') ?></button>
</site-menu>