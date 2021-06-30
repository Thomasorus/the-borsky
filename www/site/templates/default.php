<?php snippet('header') ?>
<main>
    <?php foreach ($page->text()->toLayouts() as $layout): ?>
    <section class="grid" id="<?= $layout->id() ?>">
    <?php foreach ($layout->columns() as $column): ?>
    <div class="column" style="--span:<?= $column->span() ?>">
        <div class="blocks">
        <?= $column->blocks() ?>
        </div>
    </div>
    <?php endforeach ?>
    </section>
    <?php endforeach ?>
</main>
<?php snippet('footer') ?>