<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?= $view->style('theme' , 'theme:assets/css/uikit.cards.min.css') ?>
        <?= $view->style('theme' , 'theme:assets/css/uikit.cards.css') ?>
        <?= $view->script('theme-js' , 'theme:assets/js/uikit.min.js' , ['jquery']) ?>
        <?= $view->script('theme-icons' , 'theme:assets/js/uikit-icons.min.js' , ['jquery' , 'theme-js']) ?>
    </head>
    <body>

        <div class="tm-background uk-background-cover" <?= $params['image'] ? "class=\"uk-background-cover\" style=\"background-image: url('{$view->url($params['image'])}');\"" : '' ?>>
            <div class="uk-container <?= $params['container_width'] ?> uk-container-center">

                <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <div class="tm-header uk-flex uk-flex-middle uk-flex-column">

                    <a class="tm-logo uk-hidden@m uk-navbar-item uk-logo" href="<?= $view->url()->get() ?>">
                        <?php if ($params['logo']) : ?>
                            <img src="<?= $this->escape($params['logo']) ?>" alt="">
                        <?php else : ?>
                            <?= $params['title'] ?>
                        <?php endif ?>
                    </a>

                    <nav class="uk-navbar <?= ($params['contrast']) ? 'tm-navbar-contrast' : '' ?>" data-uk-navbar>

                        <?php if ($params['logo']) : ?>
                        <div class="tm-navbar-center tm-logo">
                        <a class="tm-logo uk-visible@m" href="<?= $view->url()->get() ?>">
                            <img class="uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
                        </a>
                        </div>
                        <?php endif ?>

                        <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                        <div class="uk-visible@m tm-padding">
                            <?= $view->menu('main', 'menu-navbar.php') ?>
                            <?= $view->position('navbar', 'position-blank.php') ?>
                        </div>
                        <?php endif ?>

                        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
                        <div class="uk-navbar-right uk-hidden@m">
                            <a href="#offcanvas-nav" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav"></a>
                        </div>
                        <?php endif ?>

                    </nav>
                </div>
                <?php endif ?>

                <?php if ($view->position()->exists('top')) : ?>
                <section id="tm-top" class="tm-top uk-margin-medium-bottom">
                    <?= $view->position('top', 'position-cards.php') ?>
                </section>
                <?php endif; ?>

                <div id="tm-main" class="tm-main">

                    <div class="tm-article" uk-height-viewport="expand: true">
                    <div class="<?= $view->position()->exists('sidebar') ? 'uk-width-3-4@m' : 'uk-width-1-1'; ?> <?= $params['background'] ?>">
                        <?= $view->render('content') ?>
                    </div>

                    <?php if ($view->position()->exists('sidebar')) : ?>
                    <aside class="uk-width-1-4@m tm-sidebar <?= $params['sidebar_first'] ? 'uk-flex-first@m' : 'tm-sidebar'; ?>">
                        <?= $view->position('sidebar', 'position-sidebar-panel.php') ?>
                    </aside>
                    <?php endif ?>
                    </div>
                </div>

                <?php if ($view->position()->exists('bottom')) : ?>
                <section id="tm-bottom" class="tm-bottom">
                    <?= $view->position('bottom', 'position-cards.php') ?>
                </section>
                <?php endif; ?>

            </div>
        </div>

        <?php if ($view->position()->exists('footer')) : ?>
        <div id="tm-footer" class="tm-footer uk-block uk-block-default">
            <div class="uk-container uk-container-center">


                <?= $view->position('footer', 'position-footer.php') ?>


            </div>
        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas-nav" uk-offcanvas="mode: push; flip: true; overlay: true">
            <div class="uk-offcanvas-bar">

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
