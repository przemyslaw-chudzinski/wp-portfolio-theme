<!Doctype html>
<html <?= language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <?php if (is_search()): ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php endif; ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= get_bloginfo('description') ?>" />
    <meta name="google-site-verification" content="Bg0POWzbmm5pMKQqU-wEnUMUh_9AiqiVt7cZ7UcSVT0" />
    <title><?= get_bloginfo('title') ?></title>
    <!-- Font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="pingback" href="<?= bloginfo('pingback_url') ?>">

    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_static_image_url('apple-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_static_image_url('apple-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_static_image_url('apple-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_static_image_url('apple-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_static_image_url('apple-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_static_image_url('apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_static_image_url('apple-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_static_image_url('apple-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_static_image_url('apple-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_static_image_url('android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_static_image_url('favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_static_image_url('favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_static_image_url('favicon-16x16.png'); ?>">
<!--    <link rel="manifest" href="/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= get_static_image_url('ms-icon-144x144.png'); ?>">
    <meta name="theme-color" content="#ffffff">


    <?= wp_head(); ?>
</head>
<body <?= body_class() ?>>

