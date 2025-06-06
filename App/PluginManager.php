<?php

namespace PdExtraWidgets;

use PdExtraWidgets\Widgets\ReadMoreWidget;
use PdExtraWidgets\Updater;

class PluginManager
{

    private $actions;
    
    public function __construct()
    {
        add_action( 'elementor/widgets/register', [$this, 'register_widgets'] );
        $this->actions = new Actions();
        Updater::init();
    }

    public function register_widgets($widgets_manager) {
        $widget = new ReadMoreWidget();
        $widgets_manager->register( $widget );
    }

    public static function activate()
    {
        \flush_rewrite_rules();
    }

}