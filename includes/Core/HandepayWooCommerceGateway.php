<?php
namespace HandePayWC\Core;

defined( 'ABSPATH' ) || exit;

class HandepayWooCommerceGateway extends \WC_Payment_Gateway {

    public function __construct(){
        $this->id = 'handepaywc';
        $this->has_fields = false;
        $this->icon = '';
        $this->method_title = 'HandePay';
        $this->method_description = 'HandePay Payment Gateway';

        $this->init_form_fields();
        $this->init_settings();
    }

}