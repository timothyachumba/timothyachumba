<div class="detail grid-cell-md-5 grid-cell-offset-md-1">
  <h4><?= $detail->title() ?></h4>
  <ul>
    <?php foreach($detail->children() as $item): ?>
    <li>
      <span class="left"><?= $item->left() ?></span>

      <?php if (strlen($item->right()) != 0): ?>
        <small class="right"><?= $item->right() ?></small>
      <?php endif ?>

      <?php if (strlen($item->bottom()) != 0): ?>
        <small class="bottom"><?= $item->bottom() ?></small>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
</div>
