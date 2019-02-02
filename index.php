<?php

return [

    'name' => 'uikit3-theme-cards',

    'type' => 'theme',

    /**
     * Resources
     */
    'resources' => [

        'theme:' => '',
        'views:' => 'views'

    ],

    /**
     * Menu positions
     */
    'menus' => [

        'main' => 'Main',
        'offcanvas' => 'Offcanvas'

    ],

    /**
     * Widget positions
     */
    'positions' => [

        'navbar' => 'Navbar',
        'top' => 'Top',
        'sidebar' => 'Sidebar',
        'bottom' => 'Bottom',
        'footer' => 'Footer',
        'offcanvas' => 'Offcanvas'

    ],

    /**
     * Node defaults
     */
    'node' => [

        'title_hide' => false,
        'title_large' => false,
        'alignment' => '',
        'html_class' => '',
        'sidebar_first' => false,
        'image_alt' => '',
        'contrast_alt' => '',
        'background' => 'uk-card uk-card-default uk-card-body uk-box-shadow-hover-large',
        'blog_background' => 'uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-dark',
        'container_width' => 'uk-container-small'


    ],

    /**
     * Widget defaults
     */
    'widget' => [

        'title_hide' => false,
        'title_size' => 'uk-panel-title',
        'alignment' => '',
        'contrast_alt_widgets' => '',
        'html_class' => '',
        'sidebar_margin' => false,
        'panel' => 'uk-panel-box'

    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Configuration defaults
     */
    'config' => [

        'logo_contrast' => '',
        'logo_offcanvas' => '',
        'image' => '',
        'contrast' => ''

    ],

    /**
     * Events
     */
    'events' => [

        'view.system/site/admin/settings' => function ($event, $view) use ($app) {
            $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
            $view->script('site-about', 'theme:app/bundle/site-about.js', 'site-settings');
            $view->data('$theme', $this);
        },

        'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
            $view->script('info-node' , 'theme:app/bundle/info-node.js' , 'site-edit');
        },

        'view.system/widget/edit' => function ($event, $view) {
            $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
            $view->script('widget-about' , 'theme:app/bundle/widget-about.js' , 'widget-edit');
        },

        /**
         * Custom markup calculations based on theme settings
         */
        'view.init' => function ($event, $view) use ($app) {

            if ($app->isAdmin()) {
                return;
            }

            $params = $view->params;

            if ($params['image'] || $params['image_alt']) {

                if ($params['image_alt']) {

                    $params['image'] = $params['image_alt'];
                    $params['contrast'] = $params['contrast_alt'];

                }

                if ($params['contrast'] && $params['logo_contrast']) {
                    $params['logo'] = $params['logo_contrast'];
                }

            } else {
                $params['contrast'] = false;
            }

        },

        'view.system/site/widget-menu' => function ($event, $view) {

            if ($event['widget']->position == 'navbar') {
                $event->setTemplate('menu-navbar.php');
            }

        }

    ]

];
