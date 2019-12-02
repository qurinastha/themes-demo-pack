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

	$theme_slug 	= 'color-blog';
	//$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$git_url 		= 'https://raw.githubusercontent.com/qurinastha/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'color-blog' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'A clean and colorful WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
									'top_header_menu' 	=> 'top menu',
									'primary_menu'		=> 'main-menu'
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
		)
	);
	
	return $demo_config;
	
}
