<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$round   = $block->round()->isTrue();
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

?>
<div class="externallink">
<img src="<?= $src ?>" alt="<?= $alt ?>" round="<?= $round ?>">
<div>
<a href="<?= $block->link()->toUrl() ?>">
  <?= $block->text()->html() ?>
</a>
<small>
<?= $block->small()->html() ?>
</small>
</div>
</div>