<?php get_header(); ?>

<h1>archive-blogs</h1>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<p><?php the_content(); ?></p>
		<a href=<?php the_permalink(); ?>>Read blog</a>
		<hr>

	<?php endwhile; ?>
	
<?php endif; ?>

<?php get_footer(); ?>