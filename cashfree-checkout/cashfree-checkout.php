<?php

/**
 * Plugin Name: CashFree payment
 * Description: Payment gateway
 * Plugin URI:  t.me/svi_pl
 * Author URI:  Milvus.agency
 * Author: Vitaliy Milvus
 * Version: 1.0
 *
 * Requires at least: 3.0
 * Requires PHP: 7.0
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: https://t.me/svi_pl
 */

if ( ! defined( 'ABSPATH' ) ) exit;
  
function cashfree_content_form(){
	ob_start();
	include_once('template/form.php');
	return ob_get_clean();
		}

add_shortcode('cashfree_form', 'cashfree_content_form');

function cashfree_resp_form(){
	ob_start();
	include_once('template/response.php');
	return ob_get_clean();
		}

add_shortcode('cashfree_response', 'cashfree_resp_form');
		
function assets_files_load(){
			
			wp_register_style('cashfree_styles', untrailingslashit( plugin_dir_url( __FILE__ ) )."/assets/css/cashfree-style.css", array(),  date("h:i:s"));
			wp_enqueue_style('cashfree_styles');

			wp_register_script( 'cashfree_js', untrailingslashit( plugin_dir_url( __FILE__ ) )."/assets/js/cashfree-main.js", array('jquery','almosoft_select2_bookings'), date("h:i:s"),true );
            wp_enqueue_script('cashfree_js');
		}
		