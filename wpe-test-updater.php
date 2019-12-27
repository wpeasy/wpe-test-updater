<?php
/**
 * Plugin Name: WPEasy Test Plugin
 * Plugin URI:
 * Description: Test to see how plugin updates via Github works
 * Version: 1.0.1
 * Author: Alan Blair
 * Author URI:
 * Text Domain: wpeasy
 */
namespace WPE_TestPluginBase;

use WPE_TestPlugin\Application\Controller\ApplicationController;
use WPEasyLibrary\WordPress\UpdateFromGithubController;

require_once __DIR__ .'/vendor/autoload.php';

if ( is_admin() ) {
    new UpdateFromGithubController( __FILE__, 'wpeasy', "wpe-test-updater" );
}

ApplicationController::init([]);