<?php global $Wcms; ?>
<!DOCTYPE html>
<html lang="<?= $Wcms->get('config', 'siteLang') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <?= $Wcms->css() ?>
<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>"></head>
<body>

<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>

<header class="site-header">
    <a class="site-logo" href="<?= $Wcms->url() ?>">
        Webfólio
    </a>

    <nav class="site-nav">
        <?= $Wcms->menu() ?>
    </nav>
</header>

<main class="page-wrap">
    <?= $Wcms->page('content') ?>
</main>

<footer class="site-footer">
    <?= $Wcms->footer() ?>
</footer>

<?= $Wcms->js() ?>
</body>
</html>
