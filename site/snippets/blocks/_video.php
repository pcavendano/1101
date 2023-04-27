<section class="_video">
    <div class="ctn">
        <?php if ($v = $block->video()->toFile()): ?>
        <video 
            autoplay 
            loop
            muted 
            playsinline 
            disableremoteplayback 
            <?php if ($p = $block->poster()->toFile()): ?>
            poster="<?= $p->thumb(['format' => 'webp'])->url() ?>">
            <?php endif ?>
            <source src="<?= $v->url() ?>" type="video/mp4">
        </video>            
        <?php endif ?>
    </div>
</section>
