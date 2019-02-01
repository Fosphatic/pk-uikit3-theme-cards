<div class="uk-grid-match" uk-grid>
<?php foreach ($widgets as $widget) : ?>
<div class="uk-width-1-<?= count($widgets) ?>@m">

    <?php

        if ($params['contrast'] && ($widget->theme['panel'] == '' || $widget->theme['panel'] == 'uk-panel-header')) {
            $contrast = 'uk-contrast';
        } else {
            $contrast = '';
        }

    ?>

    <div class="uk-panel <?= $widget->theme['panel'] ?> <?= $widget->theme['alignment'] ? 'uk-text-center' : '' ?> <?= $contrast ? 'uk-contrast' : '' ?> <?= $widget->theme['contrast_alt_widgets'] ? 'uk-contrast' : '' ?> <?= $widget->theme['html_class'] ?>">
      <div class="tm-border-bottom">
        <div class="tm-border-top">

        <?php if (!$widget->theme['title_hide']) : ?>
        <h3 class="<?= $widget->theme['title_size'] ?>"><?= $widget->title ?></h3>
        <?php endif ?>

        <?= $widget->get('result') ?>
        </div>
      </div>
    </div>

</div>
<?php endforeach ?>
