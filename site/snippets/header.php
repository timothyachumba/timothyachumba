<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> — <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <meta property="og:title" content="<?= $site->title()->html() ?> — <?= $page->title()->html() ?>">
  <meta property="og:description" content="<?= $site->description() ?>">

  <meta property="og:url" content="<?= $page->url() ?>">

  <meta property="og:image" content="<?= $pages->find('home')->image('og.jpg')->url(); ?>">
  <meta property="og:image:type" content="image/jpeg" />
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:type" content="profile" />
  <meta property="og:site_name" content="<?= $site->title() ?>">
  <meta name="twitter:image:alt" content="The Interface Lovers logo">

  <!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
  <link rel="apple-touch-icon-precomposed" href="/favicon-180.png">
  <link rel="icon" href="/favicon-196.png">

  <?= css('assets/build/styles.css') ?>

  <?php snippet('ga') ?>

</head>
<body class="animated fadeIn">

  <main class="main">
    <div class="grid-top container">
      <div class="grid-cell grid-cell-offset-md-1 grid-cell-md-11">
        <h1 class="headline"><a href="<?= $site->url() ?>">Timothy Achumba.<br/>Designer at Microsoft.</a></h1>
      </div>
    </div>
