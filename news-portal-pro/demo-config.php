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
	
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/news-portal-pro/';
	$demo_config 	= array(
		'default' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/news-portal-pro.xml',
			'theme_settings' 	=> $git_url . 'default/news-portal-pro-export.dat',
			'widgets_file'  	=> $git_url . 'default/news-portal-pro-widgets.wie',
			'screen'			=> $git_url . 'default/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal-pro/',
			'is_shop'			=> true,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_top_menu' 		=> 'top menu',
									'news_portal_primary_menu' 	=> 'primary menu',
									'news_portal_footer_menu'  	=> 'footer menu'
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'slug'  	    => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					),
					array(
						'plugin_name' 	=> __( 'WooCommerce', 'mystery-demo-importer' ),
						'slug'  	  	=> 'woocommerce',
						'install_setup' => 'woocommerce/woocommerce.php',
					)
				),
			)
		),
		'fashion' => array(
			'demo_name'			=> esc_html__( 'Fashion Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'fashion/news-portal-pro.xml',
			'theme_settings' 	=> $git_url . 'fashion/news-portal-pro-export.dat',
			'widgets_file'  	=> $git_url . 'fashion/news-portal-pro-widgets.wie',
			'screen'			=> $git_url . 'fashion/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal-pro-fashion/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'slug'  	    => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'sports' => array(
			'demo_name'			=> esc_html__( 'Sport Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'sports/news-portal-pro.xml',
			'theme_settings' 	=> $git_url . 'sports/news-portal-pro-export.dat',
			'widgets_file'  	=> $git_url . 'sports/news-portal-pro-widgets.wie',
			'screen'			=> $git_url . 'sports/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal-pro-sports/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_primary_menu' 	=> 'primary',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'slug'  	    => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'blog' => array(
			'demo_name'			=> esc_html__( 'Blog Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'blog/news-portal-pro.xml',
			'theme_settings' 	=> $git_url . 'blog/news-portal-pro-export.dat',
			'widgets_file'  	=> $git_url . 'blog/news-portal-pro-widgets.wie',
			'screen'			=> $git_url . 'blog/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal-pro-blog/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'slug'  	    => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'food' => array(
			'demo_name'			=> esc_html__( 'Food Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'food/news-portal-pro.xml',
			'theme_settings' 	=> $git_url . 'food/news-portal-pro-export.dat',
			'widgets_file'  	=> $git_url . 'food/news-portal-pro-widgets.wie',
			'screen'			=> $git_url . 'food/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal-pro-food/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'slug'  	    => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'tech' => array(
			'demo_name'			=> esc_html__( 'Food Demo', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'tech/news-portal-pro.xml',
			'theme_settings' 	=> $git_url . 'tech/news-portal-pro-export.dat',
			'widgets_file'  	=> $git_url . 'tech/news-portal-pro-widgets.wie',
			'screen'			=> $git_url . 'tech/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/news-portal-pro-tech/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus'				=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'slug'  	    => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		)
	);

	return $demo_config;
	
}
