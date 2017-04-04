<?php get_header(); ?>
<div class="row">
  <div class="small-12 large-8 columns">
    <?php if ( have_posts() ) : ?>
    <?php ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    <?php ?>
    <?php if ( function_exists('ebiframework_pagination') ) { ebiframework_pagination(); } else if ( is_paged() ) { ?>
    <nav id="post-nav">
      <div class="post-previous"><?php next_posts_link( __('&larr; Older posts', 'ebiframework') ); ?></div>
      <div class="post-next"><?php previous_posts_link( __('Newer posts &rarr;', 'ebiframework') ); ?></div>
    </nav>
    <?php } ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
