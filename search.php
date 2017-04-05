<?php
/**
 * The template for displaying search results pages.
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

get_header(); ?>

<div id="page" role="main">

<?php do_action( 'ebiframework_before_content' ); ?>

<article <?php post_class('main-content') ?> id="search-results">
	<header>
	    <h1 class="entry-title"><?php _e( 'Search Results for', 'ebiframework' ); ?> "<?php echo get_search_query(); ?>"</h1>
	</header>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<?php do_action( 'ebiframework_before_pagination' ); ?>

	<?php
	if ( function_exists( 'ebiframework_pagination' ) ) :
		ebiframework_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'ebiframework' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'ebiframework' ) ); ?></div>
		</nav>
	<?php endif; ?>

</article>

<?php do_action( 'ebiframework_after_content' ); ?>
<?php get_sidebar(); ?>

</div>

<?php get_footer();