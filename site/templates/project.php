<?php snippet('header') ?>

<div class="grid-top container">

  <div class="hero grid-cell grid-cell-offset-md-1 grid-cell-md-11">
    <div
      class="hero-image"
      style="background-image:url(<?= $page->image('hero.jpg')->url() ?>)">
    </div>
  </div>

  <h1 class="grid-cell grid-cell-offset-md-1 grid-cell-md-11">
    <?= $page->title() ?>
  </h1>

  <div class="description grid-cell grid-cell-offset-md-5 grid-cell-md-7">
    <?= $page->description()->kirbytext() ?>
    <?= $page->link()->kirbytext() ?>
    <em><?= $page->responsibilities() ?></em>
  </div>

  <div class="grid-cell grid-cell-offset-md-1 grid-cell-md-11">
    <?= $page->visuals()->kirbytext() ?>
  </div>
  <div class="credits grid-cell grid-cell-offset-md-5 grid-cell-md-7">
    <h2>Credits</h2>
    <p><?= $page->credits() ?></p>
  </div>
  <div class="paging-wrapper grid-cell grid-cell-offset-md-1 grid-cell-md-11">
    <?php snippet('prevnext', ['flip' => true]) ?>
  </div>
</div>
<?php snippet('footer') ?>
