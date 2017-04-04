<article id="post-<?php the_ID(); ?>">
  <header>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php ebiframework_article_meta(); ?>
  </header>
  <p><?php the_content( __('Read More', 'ebiframework') ); ?></p>
</article>