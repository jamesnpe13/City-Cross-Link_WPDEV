<?php 

/*
Plugin Name: Dashboard Widget

*/

function admin_dashboard_widget()
{
	wp_add_dashboard_widget(
		'admin_dashboard_widget',
		'Dashboard Widget',
		'admin_dashboard_widget_callback'
	);
}

add_action('wp_dashboard_setup', 'admin_dashboard_widget');

function admin_dashboard_widget_callback()
{
	echo 'Hello Dashboard!!!';
}
