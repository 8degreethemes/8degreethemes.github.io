<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/8degreethemes/8degreethemes.github.io/master/demos/eightstore-lite/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings'  	=> $git_url . 'default/customizer_options.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/eightstore-lite/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug' 		=> 'woocommerce',
					'init' 	=> 'woocommerce/woocommerce.php',
					'name' 	=> 'WooCommerce'
				),
				array(
					'slug' 		=> 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite'
				),
				array(
					'slug' 		=> '8-degree-coming-soon-page',
					'init' 	=> '8-degree-coming-soon-page/8-degree-coming-soon-page.php',
					'name' 	=> 'Eight Degree Coming Soon Page'
				),
				array(
					'slug' 		=> '8-degree-notification-bar',
					'init' 	=> '8-degree-notification-bar/8degree-notification.php',
					'name' 	=> '8Degree Notification Bar'
				)
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(

		array(
			'screen'			=> $git_url . 'eightstore-pro/upgrade.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/eightstore-pro/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/eightstore-pro/',
			'demo_name'			=> 'Eightstore Pro',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";