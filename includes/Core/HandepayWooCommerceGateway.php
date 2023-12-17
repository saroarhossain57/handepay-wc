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
                'title'       => __('Enable/Disable', 'handeepay-wc'),
                'label'       => __('Enable HandePay Payment Gateway', 'handeepay-wc'),
                'type'        => 'checkbox',
                'description' => '',
                'default'     => 'no',
            ),
            'title' => array(
                'title'       => __('Title', 'handeepay-wc'),
                'type'        => 'text',
                'description' => __('This controls the title which the user sees during checkout.', 'handeepay-wc'),
                'default'     => 'HandePay',
                'desc_tip'    => true,
            ),
            'description' => array(
                'title'       => __('Description', 'handeepay-wc'),
                'type'        => 'textarea',
                'description' => __('This controls the description which the user sees during checkout.', 'handeepay-wc'),
                'default'     => 'Pay with HandePay',
                'desc_tip'    => true,
            )
        );
    }

    public function process_payment($order_id){
        
        wc_add_notice( __('Payment error:', 'handeepay-wc') , 'error' );
        return;
    }
}