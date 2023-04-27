<section class="_image">
    <div class="ctn">
        <figure>
            <?php if ($picture = $block->picture()->toFile()): ?>
            <?= snippet('img', ['image'=>$picture]) ?>
            <?php endif ?>            
        </figure>
    </div>
</section>