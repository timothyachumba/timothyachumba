<?php snippet('header') ?>

<div class="intro <?= $globalgrid ?> grid-cell-lg-9">
  <h2>
    Crafting digital experiences that help people.
  </h2>
</div>
<div class="<?= $globalgrid ?> grid-cell-lg-11 project-wrapper">

  <div class="project interface-lovers">
    <img src="
      <?= $pages
        ->find('projects')
        ->find('interface-lovers')
        ->image('hero.jpg')
        ->url()
      ?>" width="100%">
      <h3 class="bottom light">Interface Lovers</h3>
  </div>

</div>
<div class="<?= $globalgrid ?> grid-cell-lg-5 project-wrapper">

  <div class="project phaedis">
    <img src="
      <?= $pages
        ->find('projects')
        ->find('phaedis')
        ->image('hero.jpg')
        ->url()
      ?>" width="100%">
      <h3 class="bottom light">Phaedis</h3>
  </div>

  <div class="project microsoft">
    <img src="
      <?= $pages
        ->find('projects')
        ->find('microsoft')
        ->image('hero.jpg')
        ->url()
      ?>" width="100%">
      <h3 class="bottom light">Microsoft</h3>
  </div>

</div>
<div class="grid-cell grid-cell-sm-12 grid-cell-lg-6 project-wrapper foolography">

  <div class="project foolography">
    <img src="
      <?= $pages
        ->find('projects')
        ->find('foolography')
        ->image('hero.jpg')
        ->url()
      ?>" width="100%">
    <h3 class="top light">Foolography</h3>
  </div>

</div>

<div class="<?= $globalgrid ?> grid-cell-lg-11 project-wrapper">

  <div class="project t-photography">
    <img src="
      <?= $pages
        ->find('projects')
        ->find('t-photography')
        ->image('hero.jpg')
        ->url()
      ?>" width="100%">
      <h3 class="bottom dark">T Photography</h3>
    </div>

</div>

<?php snippet('footer') ?>
