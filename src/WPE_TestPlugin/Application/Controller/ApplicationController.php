<?php


namespace WPE_TestPlugin\Application\Controller;


class ApplicationController
{

    static $config;

    static function init($conf)
    {
        self::$config = $conf;
        add_action('admin_init', [__CLASS__, 'admin_init']);
    }

    static function admin_init()
    {
        echo __METHOD__;
    }

}