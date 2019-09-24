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
	
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/news-portal/';
	$demo_config 	= array(
		'default-demo' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default-demo/news-portal.xml',
			'theme_settings' 	=> $git_url . 'default-demo/news-portal-export.dat',
			'widgets_file'  	=> $git_url . 'default-demo/news-portal-widgets.wie',
			'screen'			=> $git_url . 'default-demo/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal/',
			'is_shop'			=> true,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_top_menu' => 'top menu',
									'news_portal_primary_menu' => 'primary menu',
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
