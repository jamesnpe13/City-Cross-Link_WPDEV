<?php get_header(); ?>











<!-- hero -->




<section class="hero bg-primary">

	<div class="section-container">

		<img class="logo-icon" src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'logos_logo_icon', true)); ?>" alt="">


		<div class="hero-text">
			<?php echo get_post_meta(get_the_ID(), 'introduction', true) ?>
		</div>


		<a class="button bg-white" href="<?php echo get_post_meta(get_the_ID(), 'hero_cta_link', true) ?>">
			<?php echo get_post_meta(get_the_ID(), 'hero_cta_button_label', true) ?>
		</a>

	</div>

	<img class="bg-image" src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'hero_image', true)); ?>" alt="">

</section>




<!-- announcements -->




<section class="announcements">
	<div class="section-container">

		<div class="card-wrapper">

			<?php
			$query1 = new WP_Query(array(
				'post_type'		=>		'announcements'
			));


			if ($query1->have_posts()) :
				while ($query1->have_posts()) : $query1->the_post() ?>

					<div class="card">
						<img class="image" src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), 'image', true)); ?>" alt="">

						<div class="content-container">
							<h3 class="title"><?php the_title(); ?></h3>
							<p class="date"><?php echo get_post_meta(get_the_ID(), 'event_date', true) ?></p>
							<p class="content"><?php the_content(); ?></p>
						</div>


					</div>

			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>

		</div>

	</div>
</section>

<!-- about -->

<section class="about">
	<div class="section-container">

		<h3 class="section-heading">Who we are</h3>
		<p class="section-content"><?php echo get_post_meta(get_the_ID(), 'about_brief', true); ?></p>

		<a class="button bg-white" href="<?php echo get_post_meta(get_the_ID(), 'about_cta_link', true) ?>">
			<?php echo get_post_meta(get_the_ID(), 'about_cta_button_label', true) ?>
		</a>



	</div>
</section>























<!-- <section id="hero">
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


</div> -->


<?php get_footer(); ?>