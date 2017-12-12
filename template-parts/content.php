<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header class="clearfix padding-top-medium padding-bottom-large">
		<h2 class="no-underline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php ebiframework_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Read more', 'ebiframework' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
