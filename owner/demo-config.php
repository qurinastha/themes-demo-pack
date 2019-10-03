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

	$theme_slug 	= 'owner';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'owner-default' => array(
			'demo_name'			=> esc_html__( 'Owner Default', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'A clean multipurpose WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'owner-default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'owner-default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'owner-default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'owner-default/screenshot.jpg',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'business', 'multipurpose' ),
			'home_title'  		=> 'Home',
			'blog_title'  		=> 'Blogs',
			'menus_locations'	=> array(
									'owner_primary_menu' 	=> 'Primary Menu',
									'owner_footer_menu'		=> 'Footer Menu'
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'		=> esc_html__( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'  		=> 'contact-form-7',
						'install_setup'  	=> 'contact-form-7/wp-contact-form-7.php'
					)
				)
			)
		),

		'owner-pro-default' => array(
			'demo_name'			=> esc_html__( 'Owner Pro Default', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'A clean multipurpose premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'owner-pro-default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'owner-pro-default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'owner-pro-default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'owner-pro-default/screenshot.jpg',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'-pro/',
			'is_shop'			=> true,
			'theme_type'        => array( 'premium', 'business', 'multipurpose' ),
			'home_title'  		=> 'Home',
			'blog_title'  		=> 'Blogs',
			'menus_locations'	=> array(
									'owner_primary_menu' 	=> 'Primary Menu',
									'owner_footer_menu'		=> 'Footer Menu'
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'		=> esc_html__( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'  		=> 'contact-form-7',
						'install_setup'  	=> 'contact-form-7/wp-contact-form-7.php'
					),
					array(
						'plugin_name' 	=> __( 'WooCommerce', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'woocommerce',
						'install_setup' => 'woocommerce/woocommerce.php',
					)
				)
			)
		)
	);
	
	return $demo_config;
	
}
