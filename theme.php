<?php global $Wcms; ?>
<!DOCTYPE html>
<html lang="<?= $Wcms->get('config', 'siteLang') ?>">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

<?= $Wcms->css() ?>
<link rel="stylesheet" href="<?= $Wcms->asset('style.css') ?>">

</head>
<body>

<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>

<header>
    <a class="site-logo" href="<?= $Wcms->url() ?>">
        <?= $Wcms->get('config', 'siteTitle') ?>
    </a>

    <nav>
        <ul>
            <?= $Wcms->menu() ?>
        </ul>
    </nav>
</header>

<main>
    <?= $Wcms->page('content') ?>
</main>

<footer>
    <?= $Wcms->footer() ?>
</footer>

<?= $Wcms->js() ?>

</body>
</html>
