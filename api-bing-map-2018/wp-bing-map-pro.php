<?php
/*
* Plugin Name: WP Bing Map Pro
* Plugin URI: https://tuskcode.com
* Version: 5.0.3
* Author: dan009
* Description: Simple, and easy to use, unlimited maps, pins, and infoboxes for every page on your website
* Text Domain: bing-map-pro
* License: GPLv3
*/

if( ! defined('ABSPATH') ) die('No Access to this page');


$BMP_PLUGIN_VERSION = '5.0.2';
if( ! defined( 'BMP_PLUGIN_URL' ) ) define( 'BMP_PLUGIN_URL', plugins_url( '', __FILE__ ) );

/* Initialize internationalization */
function BingMapPro_i18n_init(){
    $pluginDir = dirname( plugin_basename(__FILE__) );
    load_plugin_textdomain('bing-map-pro', false, $pluginDir . '/languages/');
}

add_action( 'plugins_loaded', 'BingMapPro_i18n_init');


include_once( 'wp-bing-map-pro_init.php');  
BingMapPro_Plugin_init::BingMapPro_init( __FILE__ );