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
  </head>
  <body <?php body_class(); ?>>
  <div id="skip-to">
    <a href="#content">Skip to main content</a>
  </div>
  <header id="masthead-black-bar" class="clearfix masthead-black-bar">
    <nav class="row">
      <ul id="global-nav" class="menu">
        <!-- set active class as appropriate -->
        <li class="home-mobile"><a href="//www.ebi.ac.uk"></a></li>
        <li class="home active"><a href="//www.ebi.ac.uk">EMBL-EBI</a></li>
        <li class="services"><a href="//www.ebi.ac.uk/services">Services</a></li>
        <li class="research"><a href="//www.ebi.ac.uk/research">Research</a></li>
        <li class="training"><a href="//www.ebi.ac.uk/training">Training</a></li>
        <li class="about"><a href="//www.ebi.ac.uk/about">About us</a></li>
        <li class="search">
          <a href="#" data-toggle="search-global-dropdown"><span class="show-for-small-only">Search</span></a>
          <div id="search-global-dropdown" class="dropdown-pane" data-dropdown data-options="closeOnClick:true;">
            <form id="global-search" name="global-search" action="/ebisearch/search.ebi" method="GET">
              <fieldset>
                <div class="input-group">
                  <input type="text" name="query" id="global-searchbox" class="input-group-field" placeholder="Search all of EMBL-EBI">
                  <div class="input-group-button">
                    <input type="submit" name="submit" value="Search" class="button">
                    <input type="hidden" name="db" value="allebi" checked="checked">
                    <input type="hidden" name="requestFrom" value="masthead-black-bar" checked="checked">
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </li>
        <li class="float-right show-for-medium embl-selector">
          <button class="button float-right" type="button" data-toggle="embl-dropdown">Hinxton</button>
          <!-- The dropdown menu will be programatically added by script.js -->
        </li>
      </ul>
    </nav>
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
        <div class="columns medium-12" id="local-title">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <!-- /local-title -->

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

  <div id="content" role="main">

    <section class="container">
      <?php do_action( 'ebiframework_after_header' );
