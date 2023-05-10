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
			<a class="logo" href="<?php echo home_url(); ?>">
				<div class="logo-container">
					<img class="logo-a" src="<?php echo wp_get_attachment_url(get_post_meta('71', 'logos_logo_icon', true)); ?>" alt="">
				</div>

				<img class="logo-b" src="<?php echo wp_get_attachment_url(get_post_meta('71', 'logos_logo_type', true)); ?>" alt="">
			</a>
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container' => 'nav'
				)
			); ?>

			<div class="hamburger-container">
				<div class="hamburger hamburger--3dx">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>




		</nav>


	</header>




	<div class=" main">