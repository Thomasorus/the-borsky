<?php snippet('header') ?>
<main>
    <?php if($page->text()->isNotEmpty()): ?>
        <?php foreach ($page->text()->toLayouts() as $layout): ?>
        <section class="switcher" id="<?= $layout->id() ?>">
        <?php foreach ($layout->columns() as $column): ?>
        <div class="column">
            <div class="blocks">
            <?= $column->blocks() ?>
            </div>
        </div>
        <?php endforeach ?>
        </section>
        <?php endforeach ?>
    <?php endif; ?>
</main>
<?php snippet('footer') ?>