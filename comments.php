<?php function ebiframework_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?>>
    <article class="callout" id="comment-<?php comment_ID(); ?>">
      <header class="comment-author">
        <?php echo get_avatar($comment,$size='96',$default=get_template_directory_uri() .' /img/ebiframework-avatar.png'); ?>
        <div class="author-meta">
          <?php printf(__('<cite class="fn">%s</cite>', 'ebiframework'), get_comment_author_link()) ?>
          <time datetime="<?php echo comment_date('c') ?>"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'ebiframework'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)', 'ebiframework'), '', '') ?>
        </div>
      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="notice">
        <p class="bottom"><?php _e('Your comment is awaiting moderation.', 'ebiframework') ?></p>
          </div>
      <?php endif; ?>
      <div class="comment">
        <?php comment_text() ?>
      </div>
      <footer><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></footer>
    </article>
<?php } ?>
<?php
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die (__('Please do not load this page directly. Thanks!', 'ebiframework'));
  if ( post_password_required() ) { ?>
  <div id="comments">
    <div class="notice">
      <p class="bottom"><?php _e('This post is password protected. Enter the password to view comments.', 'ebiframework'); ?></p>
    </div>
  </div>
  <?php
    return;
  }
?>
<?php if ( have_comments() ) : ?>
  <div id="comments">
    <div class="callout">
      <h5 class="comment-counter"><?php comments_number(__('No Comments', 'ebiframework'), __('One Comment', 'ebiframework'), __('% Comments', 'ebiframework') ); ?></h5>
    </div>
    <ul class="no-bullet commentlist">
      <?php wp_list_comments('type=comment&callback=ebiframework_comments'); ?>
    </ul>
    <footer>
      <nav id="comments-nav">
        <div class="comments-previous"><?php previous_comments_link( __( '&larr; Older comments', 'ebiframework' ) ); ?></div>
        <div class="comments-next"><?php next_comments_link( __( 'Newer comments &rarr;', 'ebiframework' ) ); ?></div>
      </nav>
    </footer>
  </div>
<?php else : // this is displayed if there are no comments so far ?>
  <?php if ( comments_open() ) : ?>
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php else : // comments are closed ?>
  <div id="comments">
    <div class="notice">
      <p class="bottom"><?php _e('Comments disabled by administrator.', 'ebiframework') ?></p>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
  <?php
    // Cleanup Comments
    $comments_args = array(
      'id_form' => 'commentform',
      'class_form' => 'comment-form',
      'class_submit' => 'small radius button',
      'name_submit' => 'submit',
      'title_reply' => __( 'Leave a Reply', 'ebiframework' ),
      'title_reply_to' => __( 'Leave a Reply to %s', 'ebiframework' ),
      'cancel_reply_link' => __( 'Cancel Reply', 'ebiframework' ),
      'label_submit' => __( 'Post Comment', 'ebiframework' ),
      'format' => 'xhtml',
      'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'ebiframework' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>'
    );
    comment_form($comments_args);
  ?>
</div>
<?php endif; // if you delete this you will die irl ?>
