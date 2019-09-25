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
	
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/scholarship/';
	$demo_config 	= array(
		'default' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/scholarship.xml',
			'theme_settings' 	=> $git_url . 'default/scholarship.dat',
			'widgets_file'  	=> $git_url . 'default/scholarship.wie',
			'screen'			=> $git_url . 'default/screenshot.jpg',
			'preview_url'		=> 'https://demo.mysterythemes.com/scholarship/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> 'Blog',
			'menus'				=> array(
									'scholarship_primary_menu' => 'Primary Menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'slug'  	=> 'contact-form-7',
						'init'  	=> 'contact-form-7/wp-contact-form-7.php',
						'name'  	=> esc_html__( 'Contact Form 7', 'mystery-demo-importer' )
					)
				)
			)
		)
	);
	
	return $demo_config;
	
}
