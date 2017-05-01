<?php

/*

The $flip parameter can be passed to the snippet to flip
prev/next items visually:

```
<?php snippet('prevnext', ['flip' => true]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="pagination <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-item prev <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
        <div class="pagination-text <?= $page->prevVisible()->title() ?>">
          <h4>Previous <span>Project</span></h4>
          <h3><?= $page->prevVisible()->title() ?></h3>
        </div>
        <div
        class="pagination-image"
        style="background-image:url(<?= $page->prevVisible()->image('hero.jpg')->url() ?>)">
        </div>
      </a>
    <?php else: ?>
      <span class="pagination-item prev <?= $directionPrev ?> is-inactive">
        <div class="pagination-image">
        </div>
      </span>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class="pagination-item <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
        <div class="pagination-text">
          <h4>Next <span>Project</span></h4>
          <h3><?= $page->nextVisible()->title() ?></h3>
        </div>
        <div
        class="pagination-image"
        style="background-image:url(<?= $page->nextVisible()->image('hero.jpg')->url() ?>)">
        </div>
      </a>
    <?php else: ?>
      <span class="pagination-item <?= $directionNext ?> is-inactive">
        <div class="pagination-image">
        </div>
      </span>
    <?php endif ?>

  </nav>
<?php endif ?>
