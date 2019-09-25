<?php
/**
 * Demo Importer function with array of theme data
 *
 * @author   Mystery Themes
 * @category Admin
 * @package  Importer/Functions
 * @version  1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup demo importer config.
 *
 * @return array
 */

function mt_demo_importer_config(){
	        $theme_slug 	= "easy-store";
			$giturl 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/easy-store/';
			$demo_config 	= array(
				'default' => array(
					'name'			    => esc_html__( 'Default Demo', 'mystery-demo-importer' ),
					'theme_slug'        => $theme_slug,
					'theme_description' => esc_html__( 'Easy Ecommerce WordPress Theme', 'mystery-demo-importer' ),
					'version'           => '1.2',
					'theme_settings' 	=> $giturl . 'default/easy-store-export.dat',
					'xml_file'     		=> $giturl . 'default/easy-store.xml',
					'widgets_file'  	=> $giturl . 'default/easy-store-widgets.wie',
					'preview_screenshot'=> $giturl . 'default/screenshot.png',
					'demo_url'		    => 'http://demo.mysterythemes.com/easy-store/',
					'is_shop'			=> true,
					'theme_type'        => array( 'free', 'WooCommerce', 'Ecommerce' ),
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus_locations'	=> array(
					   'easy_store_primary_menu' => 'Primary Menu',
					),
					'required_plugins'  => array(
						'free-plugins' => array(
							array(
								'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
								'slug'  	    => 'contact-form-7',
								'install_setup' => 'contact-form-7/wp-contact-form-7.php',
							),
							array(
								'plugin_name' 	=> __( 'WooCommerce', 'mystery-demo-importer' ),
								'slug'  	  	=> 'woocommerce',
								'install_setup' => 'woocommerce/woocommerce.php',
							),
							array(
								'plugin_name' 	=> __( 'YITH WooCommerce Wishlist', 'mystery-demo-importer' ),
								'slug'  	  	=> 'yith-woocommerce-wishlist',
								'install_setup' => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
							),
						),
						'premium-plugins' => array(),
					),
				
			);

	return $demo_config;
}
