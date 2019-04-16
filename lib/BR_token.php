<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function BRWoo_private_token() {
	if (is_multisite())
		$options = get_site_option('woocommerce_bestrate_checkout_gateway_settings');
	else
		$options = get_option('woocommerce_bestrate_checkout_gateway_settings');
	return $options['bestrate_checkout_token_private'];
}

function BRWoo_public_token() {
	if (is_multisite())
		$options = get_site_option('woocommerce_bestrate_checkout_gateway_settings');
	else
		$options = get_option('woocommerce_bestrate_checkout_gateway_settings');
	return $options['bestrate_checkout_token_public'];
}