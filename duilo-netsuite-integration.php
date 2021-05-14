<?php
/**
 * @package DuiloNetsuiteIntegration
 */
/**
 * Plugin Name: Duilo Netsuite Integration
 * Plugin URI: https://jdevm.com/duilo-ns-integration
 * Description: This is a custom plugin built to integrate Netsuite with Woocommerce. It's a custom netsuite integration.
 * Version: 1.0.0
 * Author: Jean Manzo
 * Author URI: https://jdevm.com
 * License: GPLv2 or later
 * Text Domain: duilo_netsuite_integration
 */

defined( 'ABSPATH' ) or die( 'Hey, you can\'t access this file, you silly human!'  );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

function dnsi_activate_plugin() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'dnsi_activate_plugin' );

function dnsi_deactivate_plugin() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'dnsi_deactivate_plugin' );

if ( class_exists( 'Inc\\Init' ) ) {

    Inc\Init::register_services();

}