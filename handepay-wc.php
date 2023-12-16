<?php
/**
 * Plugin Name: Handepay WooCommerce Payment Gateway
 * Description: A WooCommerce payment gateway for Handepay.
 * Version: 1.0.0
 * Author: Saroar Hossain
 * Author URI: https://saroar.me
 * Text Domain: handepay-wc
 * Domain Path: /languages
 * License: GPLv3+
 * Requires at least: 5.6
 * Requires PHP: 7.4
 * 
 * @package HandepayWC
 */

use HandePayWC\Traits\Singleton;

defined( 'ABSPATH' ) || exit;


require_once __DIR__ . '/vendor/autoload.php';

final class HandepayWC {

    use Singleton;

    /**
     * Initializes the function.
     *
     * @return void
     */
    public function init() {
        
        add_action('admin_init', [$this, 'admin_init']);

        // Load the plugin
        add_action('init', [$this, 'load_plugin']);

        // Register scripts
        add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_scripts']);
    }

    /**
     * Initializes the admin functionality.
     *
     * This function is responsible for performing any initializations specific to the admin area.
     *
     * @return void
     */
    public function admin_init(){
        
        // Only admin initializations

    }

    /**
     * Loads the plugin.
     *
     * @return void
     */
    public function load_plugin(){

        // Load the plugin
    }

    public function enqueue_frontend_scripts(){
        // Register scripts
    }

    public static function plugin_url(){
        return plugin_dir_url(__FILE__);
    }

    public static function plugin_path(){
        return plugin_dir_path(__FILE__);
    }
}

// Run the plugin
add_action('plugins_loaded', function () {
    HandepayWC::instance()->init();
});