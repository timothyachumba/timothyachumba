<div class="project <?= $project->uid() ?> <?= $project->width() ?>">
  <img src="<?= $project->image('hero.jpg')->url() ?>" width="100%" />
  <h3 class="bottom <?= $project->color() ?>">
    <?= $project->title() ?>
  </h3>
</div>
