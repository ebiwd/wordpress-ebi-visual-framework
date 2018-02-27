<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>

    <!-- <meta name="ebi:masthead-color" content="#11180f" />
    <meta name="ebi:masthead-image" content="//tsc.ebi.ac.uk/sites/tsc.ebi.ac.uk/files/tsc/images/sections/tsc-about-us.png" /> -->
  </head>
  <body <?php body_class(); ?>>
  <div id="skip-to">
    <a href="#content">Skip to main content</a>
  </div>
  <header id="masthead-black-bar" class="clearfix masthead-black-bar">
  </header>

  <?php do_action( 'ebiframework_after_body' ); ?>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <?php do_action( 'ebiframework_layout_start' ); ?>

  <div data-sticky-container>
    <header id="masthead" class="masthead" data-sticky data-sticky-on="large" data-top-anchor="content:top" data-btm-anchor="content:bottom">
      <div class="masthead-inner row">
        <!-- local-title -->
        <div class="columns medium-8" id="local-title">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php bloginfo( 'description' ); ?>
        </div>
        <!-- /local-title -->

        <div class="columns medium-4>
          <?php dynamic_sidebar( 'header-widgets' ); ?>
        </div>

        <!-- local-nav -->
        <nav id="main-menu" class="navigation" role="navigation">
          <?php ebiframework_top_bar_r(); ?>
          <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
            <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
          <?php endif; ?>
        </nav>
        <!-- /local-nav -->
      </div>
    </header>
  </div>

  <div id="content" class="row padding-top-large" role="main">

    <section class="container">
      <?php do_action( 'ebiframework_after_header' );
