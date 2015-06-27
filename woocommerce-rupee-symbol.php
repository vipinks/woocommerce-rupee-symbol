<?php
/*
Plugin Name: WooCommerce Rupee Symbol
Plugin URI: https://github.com/vipinks/woocommerce-rupee-symbol/
Description: Displays Rupee Symbol (₹) for Indian Rupee
Version: 1.0
Author: Vipin Kr. Singh<contact@samarthemes.com>
Author URI: http://samarthemes.com/
License: GPL2
*/

/**
 * Change Currency Symbol for INR
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	add_filter( 'woocommerce_currency_symbol', 'inr_currency_symbol', 10, 2 );

	function inr_currency_symbol( $currency_symbol, $currency ) {
		switch ( $currency ) {
			case 'INR':
				$currency_symbol = '&#8377;';
				break;
		}

		return $currency_symbol;
	}
}
