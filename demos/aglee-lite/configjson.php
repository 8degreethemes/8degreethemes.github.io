<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/8degreethemes/8degreethemes.github.io/master/demos/aglee-lite/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings'  	=> $git_url . 'default/customizer_options.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/aglee-lite/',
		'is_shop'			=> true,
		'home_title'  		=> 'home',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug' 		=> 'accesspress-social-counter',
					'init' 	=> 'accesspress-social-counter/accesspress-social-counter.php',
					'name' 	=> 'AccessPress Social Counter'
				),
				array(
					'slug' 		=> 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7'
				),
				'newsletter' => array(
					'slug' 		=> 'newsletter',
					'init' 	=> 'newsletter/plugin.php',
					'name' 	=> 'Newsletter'
				),
				array(
					'slug' 		=> 'accesspress-twitter-feed',
					'init' 	=> 'accesspress-twitter-feed/accesspress-twitter-feed.php',
					'name' 	=> 'WP TFeed'
				)
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(

		array(
			'screen'			=> $git_url . 'aglee-pro/upgrade.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/aglee-pro/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/aglee-pro/',
			'demo_name'			=> 'Aglee Pro',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";