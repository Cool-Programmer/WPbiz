<?php
	require_once 'wp-bootstrap-navwalker.php';
	require_once 'includes/class-wp-widget-categories.php';

	function wpbiz_theme_setup()
	{
		// Menus
		register_nav_menus([
			'primary' => 'Primary'
		]);

		// custom logo
		add_theme_support('custom-logo');

		// Thumbnails
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'wpbiz_theme_setup');

require_once('includes/customizer.php');

// Widgets
function init_widgets($id)
{
	register_sidebar([
		'name' => 'Content Region One',
		'id' => 'content-region-one',
		'before_widget' => '<section class="row content-region-1 pt50 pb40"> <div class="col-md-12">',
		'after_widget' => '</div></section>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	]);

	register_sidebar([
		'name' => 'Content Region Two',
		'id' => 'content-region-two',
		'before_widget' => '<section class="row content-region-2 pt40 pb40"><div class="container">',
		'after_widget' => '</div></section>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	]);

	register_sidebar([
		'name' => 'Footer Widget I',
		'id' => 'footer-widget-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	]);

	register_sidebar([
		'name' => 'Footer Widget II',
		'id' => 'footer-widget-2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	]);

	register_sidebar([
		'name' => 'Footer Widget III',
		'id' => 'footer-widget-3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	]);

	register_sidebar([
		'name' => 'Side Widget',
		'id' => 'side-widget',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	]);

	register_sidebar([
		'name' => 'Side Categories Widget',
		'id' => 'side-categories-widget',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	]);
}

add_action('widgets_init', 'init_widgets');



// Custom widgets
function custom_register_widgets()
{
	register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'custom_register_widgets');

// Add list-group-item to li in category widget
function add_new_class_li_cats($list)
{
	$list = str_replace('cat-item', 'cat-item list-group-item', $list);
	return $list;
}

add_filter('wp_list_categories', 'add_new_class_li_cats');