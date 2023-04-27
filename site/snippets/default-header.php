<section class="default_header">
    <div class="ctn">
        <h1 class="h2"><?= $page->title() ?></h1>
        <div>
            <h2 class="h5">
                <?= $page->intro()->kirbytext() ?>
            </h2>
            <?php if ($page->text()->isNotEmpty()): ?>
            <div class="mt-100 prose">
                <?= $page->text()->kirbytext() ?>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>