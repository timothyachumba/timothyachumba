<?php snippet('header') ?>

<div class="grid-top container">


  <div class="intro grid-cell grid-cell-offset-md-1 grid-cell-md-11">
    <h2>
      Crafting digital experiences that help people.
    </h2>
  </div>
</div>
<div class="grid-top">
  <div class="projects grid-cell grid-cell-offset-md-1 grid-cell-md-11">

    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>

    <?php foreach($projects as $project): ?>
      <?php snippet('project-image', array('project' => $project)); ?>
    <?php endforeach ?>

  </div>
</div>
<div class="grid-top container">
  <div class="grid-top grid-cell grid-cell-offset-md-1 grid-cell-md-11 grid-justify-space">
    <?php foreach($page->children() as $detail): ?>
      <?= snippet('detail', array('detail' => $detail)) ?>
    <?php endforeach ?>
  </div>

  <div class="ending grid-cell grid-cell-offset-md-1 grid-cell-md-11">
    <h4>
      <a href="mailto:">👋🏾</a>
    </h4>
    <a href="https://dribbble.com/timothyachumba" target="_blank">Dribbble</a>
    <a href="https://instagram.com/timothyachumba" target="_blank">Instagram</a>
    <a href="https://twittter.com/timothyachumba" target="_blank">Twitter</a>
    <a href="http://medium.com/timothyachumba" target="_blank">Medium</a>
  </div>
</div>

<?php snippet('footer') ?>
