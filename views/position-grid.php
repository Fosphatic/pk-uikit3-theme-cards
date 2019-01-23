<?php foreach ($widgets as $widget) : ?>
<div class="uk-width-medium-1-<?= count($widgets) ?>">

    <?php

        if ($params['contrast'] && ($widget->theme['panel'] == '' || $widget->theme['panel'] == 'uk-panel-header')) {
            $contrast = 'uk-contrast';
        } else {
            $contrast = '';
        }

    ?>

    <div class="uk-panel <?= $widget->theme['panel'] ?> <?= $widget->theme['alignment'] ? 'uk-text-center' : '' ?> <?= $contrast ? 'uk-contrast' : '' ?> <?= $widget->theme['html_class'] ?>">

        <?php if (!$widget->theme['title_hide']) : ?>
        <h3 class="<?= $widget->theme['title_size'] ?>"><?= $widget->title ?></h3>
        <?php endif ?>

        <?= $widget->get('result') ?>

    </div>

</div>
<?php endforeach ?>
