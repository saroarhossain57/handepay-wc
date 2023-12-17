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

        $this->title = $this->get_option('title');
        $this->description = $this->get_option('description');

        // Add hooks
        add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
    }


    // Add gateway settings
    public function init_form_fields(){

        $this->form_fields = array(
            'enabled' => array(
                'title'       => 'Enable/Disable',
                'label'       => 'Enable HandePay Payment Gateway',
                'type'        => 'checkbox',
                'description' => '',
                'default'     => 'no',
            ),
            'title' => array(
                'title'       => 'Title',
                'type'        => 'text',
                'description' => 'This controls the title which the user sees during checkout.',
                'default'     => 'HandePay',
                'desc_tip'    => true,
            ),
            'description' => array(
                'title'       => 'Description',
                'type'        => 'textarea',
                'description' => 'This controls the description which the user sees during checkout.',
                'default'     => 'Pay with HandePay',
                'desc_tip'    => true,
            )
        );
    }

    public function process_payment($order_id){
        
    }
}