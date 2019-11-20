<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/8degreethemes/8degreethemes.github.io/master/demos/wp-corporate/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings'  	=> $git_url . 'default/customizer_options.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/wp-corporate/',
		'is_shop'			=> true,
		'home_title'  		=> 'home',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
				array(
					'slug'      => 'yith-woocommerce-wishlist',
					'init' 	=> 'yith-woocommerce-wishlist/init.php',
					'name' 	=> 'YITH WooCommerce Wishlist',
				),
				array(
					'slug'      => 'yith-woocommerce-quick-view',
					'init' 	=> 'yith-woocommerce-quick-view/init.php',
					'name' 	=> 'YITH WooCommerce Quick View',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(

		array(
			'screen'			=> $git_url . 'wp-corporate-pro/upgrade.png',
			'preview_url'		=> 'https://8degreethemes.com/demo/wp-corporate-pro/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/wp-corporate-pro/',
			'demo_name'			=> 'WP Corporate Pro',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";