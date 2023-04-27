<?php
    $boosted = null;
    foreach (getallheaders() as $name => $value) {
        if ($name === 'HX-Boosted') {
            $boosted = true;
        }
    }
?>

<?php if (!$boosted): ?> 
<div id="loading">
    <?= $site->title() ?>
</div>
<?php endif ?>
