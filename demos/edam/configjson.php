<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/8degreethemes/8degreethemes.github.io/master/demos/edam/';
$data = array(
	'magazine' => array(
		'demo_name' => 'magazine',
		'xml_file'     		=> $git_url . 'magazine/content.xml',
		'widgets_file'  	=> $git_url . 'magazine/widgets.wie',
		'theme_settings'  	=> $git_url . 'magazine/customizer_options.dat',
		'screen'			=> $git_url . 'magazine/magazine.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/edam/magazine',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'magazine/themeoptions.json',
			'option_name' 	=> 'edam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
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
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";