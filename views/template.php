<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox']) ?>
    </head>
    <body>

        <div class="tm-background uk-cover-background" <?= $params['image'] ? "class=\"uk-cover-background\" style=\"background-image: url('{$view->url($params['image'])}');\"" : '' ?>>
            <div class="uk-container uk-container-center">

                <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <div class="tm-header uk-flex uk-flex-middle uk-flex-column">

                    <a class="tm-logo uk-hidden-small" href="<?= $view->url()->get() ?>">
                        <?php if ($params['logo']) : ?>
                            <img src="<?= $this->escape($params['logo']) ?>" alt="">
                        <?php else : ?>
                            <?= $params['title'] ?>
                        <?php endif ?>
                    </a>

                    <nav class="uk-navbar <?= ($params['contrast']) ? 'tm-navbar-contrast' : '' ?>">

                        <?php if ($params['logo']) : ?>
                        <a class="uk-navbar-brand uk-visible-small" href="<?= $view->url()->get() ?>">
                            <img class="uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
                        </a>
                        <?php endif ?>

                        <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                        <div class="uk-hidden-small">
                            <?= $view->menu('main', 'menu-navbar.php') ?>
                            <?= $view->position('navbar', 'position-blank.php') ?>
                        </div>
                        <?php endif ?>

                        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
                        <div class="uk-navbar-flip uk-visible-small">
                            <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
                        </div>
                        <?php endif ?>

                    </nav>

                </div>
                <?php endif ?>

                <?php if ($view->position()->exists('top')) : ?>
                <section id="tm-top" class="tm-top uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('top', 'position-grid.php') ?>
                </section>
                <?php endif; ?>

                <div id="tm-main" class="tm-main uk-grid" data-uk-grid-match data-uk-grid-margin>

                    <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-2-3' : 'uk-width-1-1'; ?>">
                        <?= $view->render('content') ?>
                    </main>

                    <?php if ($view->position()->exists('sidebar')) : ?>
                    <aside class="uk-width-medium-1-3 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
                        <?= $view->position('sidebar', 'position-panel.php') ?>
                    </aside>
                    <?php endif ?>

                </div>

                <?php if ($view->position()->exists('bottom')) : ?>
                <section id="tm-bottom" class="tm-bottom uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('bottom', 'position-grid.php') ?>
                </section>
                <?php endif; ?>

            </div>
        </div>

        <?php if ($view->position()->exists('footer')) : ?>
        <div id="tm-footer" class="tm-footer uk-block uk-block-default">
            <div class="uk-container uk-container-center">

                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('footer', 'position-grid.php') ?>
                </section>

            </div>
        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                <?php if ($params['logo_offcanvas']) : ?>
                <div class="uk-panel uk-text-center">
                    <a href="<?= $view->url()->get() ?>">
                        <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
                    </a>
                </div>
                <?php endif ?>

                <?php if ($view->menu()->exists('offcanvas')) : ?>
                    <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
                <?php endif ?>

                <?php if ($view->position()->exists('offcanvas')) : ?>
                    <?= $view->position('offcanvas', 'position-panel.php') ?>
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?= $view->render('footer') ?>

    </body>
</html>
