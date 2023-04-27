<?php
    date_default_timezone_set('America/Toronto');
    $user = $kirby->user();
    $salt = rand();
    $page_title = $page->seoTitle()->isNotEmpty() ? $page->seoTitle() : null;
    $page_desc = $page->seoDescription()->isNotEmpty() ? $page->seoDescription() : null; 
    $page_img = $page->seoImage()->isNotEmpty() ? $page->seoImage()->toFile() : null;
    $site_img = $site->seoImage()->isNotEmpty() ? $site->seoImage()->toFile() : null;

    $title = null;
    if ($page_title) {
       $title = $page_title;
    } elseif (!$page->isHomePage()) {
        $title = $page->title() . " | " . $site->title();
    } else {
        $title = $site->title();
    }

    $desc = null;
    if ($page_desc) {
        $desc = $page_desc;
    } else {
         $desc = "";
    }

     $img = null;
     if ($page_img) {
        $img = $page_img->url();
    } elseif (!empty($site_img)) {
         $img = $site_img->url();
    }
?>

<!DOCTYPE html>
<html lang="<?= $kirby->languageCode() ?? 'fr' ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <meta name="description" content="<?= $desc ?>">
        <?= snippet('assets') ?>
        <link rel="apple-touch-icon" sizes="180x180" href="<?= url('assets/images/apple-touch-icon.png') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= url('assets/images/favicon-32x32.png') ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= url('assets/images/favicon-16x16.png') ?>">
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $desc ?>">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= $page->url() ?>" />
        <meta property="og:image" content="<?= $img ?>" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= $title ?>">
        <meta name="twitter:description" content="<?= $desc ?>">
        <meta name="twitter:image" content="<?= $img ?>">
        <meta name="htmx-config" content='{"includeIndicatorStyles": false}'>
        <?= snippet('user-scripts') ?>
    </head>
    <body class="top" hx-boost="true" hx-indicator="body" hx-swap="innerHTML swap:0s settle:0s">
        <?php if (!$site->maintenance()->toBool() or
        $user?->isLoggedIn()): ?>
        <div id="page" class="<?= $page->template() ?>">
            <?= snippet('site-header') ?>
            <?= $slot ?>
            <?= snippet('site-footer') ?> 
            <?= snippet('site-menu') ?>
            <?= snippet('indicator') ?>
            <?= snippet('site-loading') ?>
        </div>
        <?php else:?>
            <?= snippet('site-maintenance') ?>
        <?php endif ?>
    </body>
</html>
