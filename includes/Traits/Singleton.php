<?php 
namespace HandePayWC\Traits;

defined( 'ABSPATH' ) || exit;

trait Singleton {

    private static $_instance;

    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new static();
        }
        return self::$_instance;
    }
}