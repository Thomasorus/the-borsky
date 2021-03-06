<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$round   = $block->round()->isTrue();
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

?>
<?php if ($src): ?>
<figure<?= attr(['data-ratio' => $ratio, 'data-crop' => $crop], ' ') ?>>
  <?php if ($link->isNotEmpty()): ?>
  <a href="<?= $link->toUrl() ?>">
    <img src="<?= $src ?>" alt="<?= $alt ?>" round="<?= $round ?>">
  </a>
  <?php else: ?>
  <img src="<?= $src ?>" alt="<?= $alt ?>" round="<?= $round ?>">
  <?php endif ?>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>