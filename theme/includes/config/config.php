<?php

class Config
{

	public function __construct() {
		
		show_admin_bar(false);
		add_theme_support('menus');
		add_theme_support('post-thumbnails');
		add_theme_support('woocommerce');
		add_theme_support('sensei');
		add_editor_style('css/tiny.css');

		register_nav_menus(array(
			'primary' => 'Menu Principal',
			'footer' => 'Menu do Rodapé',
			'mobile' => 'Menu Mobile',
		));

	}
}

new Config();
