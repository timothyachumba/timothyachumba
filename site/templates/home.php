<?php snippet('header') ?>

<div class="grid-top container">


  <div class="intro grid-cell grid-cell-offset-md-1 grid-cell-md-9">
    <h2>
      Crafting digital experiences that help people.
    </h2>
  </div>
</div>

<div class="grid-top projects">

  <div class="project-container grid-cell-md grid-cell-offset-md-1 grid-cell-md-11">

    <div class="interface-lovers project">

      <h3>Interface Lovers</h3>

      <div
        style="background-image: url(<?= $projects->find('interface-lovers')->image('hero.jpg')->url() ?>);"
        class="project-image"></div>

    </div>

  </div>

  <div class="project-container grid-cell-md grid-cell-offset-md-1 grid-cell-md-5">

    <div class="project-group">
      <div class="microsoft project">

        <h3>Microsoft To-Do</h3>

        <div
          style="background-image: url(<?= $projects->find('microsoft')->image('hero.jpg')->url() ?>);"
          class="project-image"></div>

      </div>
      <div class="phaedis project">

        <h3>Phaedis</h3>

        <div
          style="background-image: url(<?= $projects->find('phaedis')->image('hero.jpg')->url() ?>);"
          class="project-image"></div>

      </div>

    </div>

  </div>


  <div class="project-container grid-cell-md grid-cell-md-6">

    <div class="foolography project">
      <h3>Foolography</h3>
      <div
        style="background-image: url(<?= $projects->find('foolography')->image('hero.jpg')->url() ?>);"
        class="project-image"></div>
    </div>

  </div>

  <div class="project-container grid-cell-md grid-cell-offset-md-1 grid-cell-md-11">

    <div class="t-photography project">
      <h3 class="dark">T Photography</h3>
      <div
        style="background-image: url(<?= $projects->find('t-photography')->image('hero.jpg')->url() ?>);"
        class="project-image"></div>
    </div>

  </div>


</div>
<div class="grid-top container">
  <?php foreach($page->children() as $detail): ?>
    <?= snippet('detail', array('detail' => $detail)) ?>
  <?php endforeach ?>
</div>

<div class="grid-top container">
  <div class="ending grid-cell-offset-md-1 grid-cell-md-11">
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
