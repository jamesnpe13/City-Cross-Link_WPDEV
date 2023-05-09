<?php get_header(); ?>

<h1>archive-ministries</h1>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<p><?php the_content(); ?></p>
		<a href=<?php the_permalink(); ?>>Visit group</a>
		<hr>

	<?php endwhile; ?>
	
<?php endif; ?>

<?php get_footer(); ?>