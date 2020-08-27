<?php
/*
 * Plugin Name: Woocommerce Disable Structured Data
 * Version: 1.0
 * Plugin URI: https://github.com/gjedeer/woo_disable_structured_data
 * Description: Disable JSON-LD/structure/microdata from WooCommerce pages
 * Author: Andrzej Godziuk
 * Author URI: https://massivevps.net/
 * Requires at least: 4.0
 * Tested up to: 4.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function woo_disable_output_structured_data() {
	remove_action('wp_footer', array( WC()->structured_data, 'output_structured_data' ), 10); 
	remove_action('woocommerce_email_order_details', array( WC()->structured_data, 'output_email_structured_data' ), 30);
}
add_action( 'init', 'woo_disable_output_structured_data' );
