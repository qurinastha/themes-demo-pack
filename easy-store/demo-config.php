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

    $theme_slug 	= 'easy-store';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_description.'/';
	$demo_config 	= array(
		'default' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Easy Ecommerce WordPress Theme', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $giturl . 'default/screenshot.png',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> true,
			'theme_type'        => array( 'free', 'WooCommerce', 'Ecommerce' ),
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
			   'easy_store_primary_menu' => 'Primary Menu',
			),
			'required_plugins'  => array(
				'free-plugins' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					),
					array(
						'plugin_name' 	=> __( 'WooCommerce', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'woocommerce',
						'install_setup' => 'woocommerce/woocommerce.php',
					),
					array(
						'plugin_name' 	=> __( 'YITH WooCommerce Wishlist', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'yith-woocommerce-wishlist',
						'install_setup' => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
					),
				)
			)
		)
	);

	return $demo_config;
}
