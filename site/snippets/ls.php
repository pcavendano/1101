<?php foreach($kirby->languages() as $lg): ?>
<?php if ($lg->code() != $kirby->languageCode()): ?>
<a class="ls" href="<?= $page->url($lg->code()) ?>" hreflang="<?= $lg->code() ?>"><?= $lg->code() ?></a>
<?php endif ?>
<?php endforeach ?>