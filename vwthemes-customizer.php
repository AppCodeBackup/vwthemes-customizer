<?php
/*
  Plugin Name: VW Themes Customizer
  Description: VW Themes Customiser plugin will allow you to add features of customizer and widgets. Which will be visible on front page of site. 
  Version: 1.0
  Author: VW Themes
  Text Domain: vwthemes-customizer
  Author URI: http://www.vwthemes.com/
 */
  if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
  
// Version constant for easy CSS refreshes
define('VWTHEMES_CUSTOMIZER_VERSION', '1.0.0');
define('VWTHEMES_CUSTOMIZER_PLUGIN_URL', plugin_dir_url(__FILE__));

function vwthemes_customizer_text_domain(){
	$theme = wp_get_theme();
	$themeArr=array();
	$themeArr[] = $theme->get( 'TextDomain' );
	$themeArr[] = $theme->get( 'Template' );
	return $themeArr;
}

add_action('after_setup_theme', 'vwthemes_customizer_load_plugin');
function vwthemes_customizer_load_plugin() {
	include_once(plugin_dir_path(__FILE__) . 'vwthemes/customizer-notice/class/customizer-notice.php' );
	include_once(plugin_dir_path(__FILE__) . 'vwthemes/customizer-radio-image/class/customizer-radio-image.php' );
	include_once(plugin_dir_path(__FILE__) . 'vwthemes/customizer-seperator/class/customizer-seperator.php' );
	include_once(plugin_dir_path(__FILE__) . 'vwthemes/customizer-text-radio-button/class/customizer-text-radio-button.php' );
	include_once(plugin_dir_path(__FILE__) . 'vwthemes/customizer-toggle-switch/class/class-toggle-switch.php' );
	include_once(plugin_dir_path(__FILE__) . 'vwthemes/alpha-color-picker/alpha-color-picker.php' );
	$theme = vwthemes_customizer_text_domain(); 
	if(in_array("vw-startup-pro", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'vw-startup-pro/include.php' );
	}
}
?>