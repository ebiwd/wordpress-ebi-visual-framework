<?php /* Template Name: Page Sidebar Right */ get_header(); ?>
<?php ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="large-12 columns">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</div>
	<div class="small-12 large-8 columns">
		<?php the_content(); ?>
	</div>
	<?php get_sidebar('page'); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>