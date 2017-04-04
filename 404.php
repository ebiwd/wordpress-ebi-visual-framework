<?php get_header(); ?>
<div class="row">
  <div class="large-12 columns">
    <h1><?php _e('Well Hellicopter, What the fudge, Hell\'s bells! (404)', 'ebiframework'); ?></h1>
    <span><?php _e('You might be wondering what went wrong... here\'s some possible reasons!', 'ebiframework'); ?></span>
    <ul>
      <li><?php _e('You may have missed type the URL address', 'ebiframework'); ?></li>
      <li><?php _e('You may have copied and pasted the URL incorrectly', 'ebiframework'); ?></li>
      <li><?php _e('The page you are attempting to access no longer exists', 'ebiframework'); ?></li>
    </ul>
    <span><?php _e('You may be able to find what you\'re looking for by visiting our', 'ebiframework'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e('homepage', 'ebiframework'); ?></a></span>
  </div>
</div>
<?php get_footer(); ?>