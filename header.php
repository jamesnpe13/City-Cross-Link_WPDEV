<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>



	<header>
		<nav class="header-nav">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container' => 'nav'
				)
			); ?>
		</nav>
	</header>




	<div class=" main">