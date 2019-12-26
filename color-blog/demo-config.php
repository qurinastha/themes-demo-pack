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
			'name'			=> esc_html__( 'Color Blog', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'        => '1.2',
			'theme_description' => esc_html__( 'A clean and colorful WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . $theme_slug.'.xml',
			'theme_settings' 	=> $git_url . $theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . $theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'screenshot.png',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> true,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
			'show_on_front'     => 'posts',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
			   'top_header_menu' => 'Top Menu',
			   'primary_menu' => 'main-menu'
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'=> 'Contact Form 7',
					'slug'=> 'contact-form-7/wp-contact-form-7.php',
					'required'=> true
				)
			  )
		)
	);
	return $demo_config;
	
}
