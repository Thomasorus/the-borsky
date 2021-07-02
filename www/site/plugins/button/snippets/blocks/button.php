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

<img src="<?= $src ?>" alt="<?= $alt ?>" round="<?= $round ?>">
<div class="externallink">
<a href="<?= $block->link()->toUrl() ?>">
  <?= $block->text()->html() ?>
</a>
<small>
<?= $block->small()->html() ?>
</small>
</div>