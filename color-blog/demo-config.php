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
	
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/color-blog/';
	$demo_config 	= array(
		'default-demo' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default-demo/color-blog.xml',
			'theme_settings' 	=> $git_url . 'default-demo/color-blog.dat',
			'widgets_file'  	=> $git_url . 'default-demo/color-blog.wie',
			'screen'			=> $git_url . 'default-demo/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/color-blog/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> 'Blog',
			'menus'				=> array(
									'top_header_menu' 	=> 'top menu',
									'primary_menu'		=> 'main-menu'
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'slug'  	=> 'contact-form-7',
						'init'  	=> 'contact-form-7/wp-contact-form-7.php',
						'name'  	=> 'Contact Form 7',
					)
				)
			)
		)
	);
	
	return $demo_config;
	
}
