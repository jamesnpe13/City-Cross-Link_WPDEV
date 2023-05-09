<?php

// scripts ands styles
function load_assets()
{
	wp_enqueue_style('style', get_theme_file_uri() . '/style.css');
	wp_enqueue_script('script', get_theme_file_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'load_assets');

// navigation menus
register_nav_menus(
	array(
		'primary' => __('Header Menu'),
		'secondary' => __('Footer Menu'),
	)
);

// custom post types
function custom_post_types()
{

	// ministries
	$labels_ministries = array(
		'name'               => 'Ministries',
		'singular_name'      => 'Ministry',
		'menu_name'          => 'Ministries',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Ministry',
		'edit'               => 'Edit',
		'edit_item'          => 'Edit Ministry',
		'new_item'           => 'New Ministry',
		'view'               => 'View',
		'view_item'          => 'View Ministry',
		'search_items'       => 'Search Ministries',
		'not_found'          => 'No Ministries found',
		'not_found_in_trash' => 'No Ministries found in trash',
		'parent'             => 'Parent Ministry'
	);

	register_post_type(
		'ministries',
		array(
			'labels'              => $labels_ministries,
			'public'              => true,
			'has_archive'         => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'menu_icon'           => 'dashicons-buddicons-groups'
		)
	);

	// events
	$labels_events = array(
		'name'               => 'Events',
		'singular_name'      => 'Event',
		'menu_name'          => 'Events',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Event',
		'edit'               => 'Edit',
		'edit_item'          => 'Edit Event',
		'new_item'           => 'New Event',
		'view'               => 'View',
		'view_item'          => 'View Event',
		'search_items'       => 'Search Events',
		'not_found'          => 'No Events found',
		'not_found_in_trash' => 'No Events found in trash',
		'parent'             => 'Parent Event'
	);

	register_post_type(
		'events',
		array(
			'labels'              => $labels_events,
			'public'              => true,
			'has_archive'         => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'menu_icon'           => 'dashicons-calendar-alt'
		)
	);

	// blogs
	$labels_blogs = array(
		'name'               => 'Blogs',
		'singular_name'      => 'Blog',
		'menu_name'          => 'Blogs',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Blog',
		'edit'               => 'Edit',
		'edit_item'          => 'Edit Blog',
		'new_item'           => 'New Blog',
		'view'               => 'View',
		'view_item'          => 'View Blog',
		'search_items'       => 'Search Blogs',
		'not_found'          => 'No Blogs found',
		'not_found_in_trash' => 'No Blogs found in trash',
		'parent'             => 'Parent Blog'
	);

	register_post_type(
		'blogs',
		array(
			'labels'              => $labels_blogs,
			'public'              => true,
			'has_archive'         => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'menu_icon'           => 'dashicons-welcome-write-blog'
		)
	);
}

add_action('init', 'custom_post_types');

// admin styles
function admin_styles()
{
	echo '<style>
		#menu-posts, #menu-media, #menu-comments {
			display: none;
		}

		</style>';
}

add_action('admin_head', 'admin_styles');

// disable block editor
add_filter('use_block_editor_for_post', '__return_false');

// disable content rich text editor

function remove_pages_editor()
{
	remove_post_type_support('page', 'editor');
}
add_action('init', 'remove_pages_editor');


// custom widget

// function admin_dashboard_widget()
// {
// 	wp_add_dashboard_widget(
// 		'admin_dashboard_widget',
// 		'Dashboard Widget',
// 		'admin_dashboard_widget_callback'
// 	);
// }

// add_action('wp_dashboard_setup', 'admin_dashboard_widget');

// function admin_dashboard_widget_callback()
// {
// }
