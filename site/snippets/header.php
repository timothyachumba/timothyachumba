<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/build/styles.css') ?>

</head>
<body>

  <main class="main">
    <div class="grid-top">
      <div class="<?php echo $globalgrid ?> grid-cell-lg-11">
        <h1 class="headline">Timothy Achumba.<br/>Designer at Microsoft.</h1>
      </div>
