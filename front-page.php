<?php get_header(); ?>


<section id="hero">
	<div class="container">
		<div class="hero-text">
			<?php echo get_post_meta(get_the_ID(), 'introduction', true) ?>

			<a class="button" href="<?php echo get_post_meta(get_the_ID(), 'hero_cta_link', true) ?>">
				<?php echo get_post_meta(get_the_ID(), 'hero_cta_button_label', true) ?>
			</a>
		</div>


		<img class="hero-image" src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'hero_image', true)); ?>" alt="">
	</div>
</section>


<section id="about">
	<div class="container">
		<h2>About Us</h2>
		<p>
			<?php echo get_post_meta(get_the_ID(), 'about_brief', true) ?>
		</p>
	</div>
</section>


<section id="cards">
	<div class="container">
		<div class="card-container">
			<div class="card">
				<img src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'card_container_card_1_card_thumbnail', true)); ?>" alt="">
				<h3><?php echo get_post_meta(get_the_ID(), 'card_container_card_1_card_title', true) ?></h3>
				<p><?php echo get_post_meta(get_the_ID(), 'card_container_card_1_card_content', true) ?></p>
			</div>

			<div class="card">
				<img src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'card_container_card_2_card_thumbnail', true)); ?>" alt="">
				<h3><?php echo get_post_meta(get_the_ID(), 'card_container_card_2_card_title', true) ?></h3>
				<p><?php echo get_post_meta(get_the_ID(), 'card_container_card_2_card_content', true) ?></p>
			</div>

			<div class="card">
				<img src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'card_container_card_3_card_thumbnail', true)); ?>" alt="">
				<h3><?php echo get_post_meta(get_the_ID(), 'card_container_card_3_card_title', true) ?></h3>
				<p><?php echo get_post_meta(get_the_ID(), 'card_container_card_3_card_content', true) ?></p>
			</div>
		</div>
</section>


</div>


<?php get_footer(); ?>