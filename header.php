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
    <ul>
      <li><a href="#content">Skip to main content</a></li>
      <li><a href="#local-nav">Skip to local navigation</a></li>
      <li><a href="#global-nav">Skip to EBI global navigation menu</a></li>
      <li><a href="#global-nav-expanded">Skip to expanded EBI global navigation menu (includes all sub-sections)</a></li>
    </ul>
  </div>
  <div data-sticky-container>
    <div id="local-masthead" data-sticky data-sticky-on="large" data-top-anchor="180" data-btm-anchor="300000">
      <header>

        <div id="global-masthead" class="clearfix">
          <!--This has to be one line and no newline characters-->
          <a href="//www.ebi.ac.uk/" title="Go to the EMBL-EBI homepage"><span class="ebi-logo"></span></a>

          <nav>
            <div class="row">
              <ul id="global-nav" class="menu">
                <!-- set active class as appropriate -->
                <li id="home-mobile" class=""><a href="//www.ebi.ac.uk"></a></li>
                <li id="home" class="active"><a href="//www.ebi.ac.uk"><i class="icon icon-generic" data-icon="H"></i> EMBL-EBI</a></li>
                <li id="services"><a href="//www.ebi.ac.uk/services"><i class="icon icon-generic" data-icon="("></i> Services</a></li>
                <li id="research"><a href="//www.ebi.ac.uk/research"><i class="icon icon-generic" data-icon=")"></i> Research</a></li>
                <li id="training"><a href="//www.ebi.ac.uk/training"><i class="icon icon-generic" data-icon="t"></i> Training</a></li>
                <li id="about"><a href="//www.ebi.ac.uk/about"><i class="icon icon-generic" data-icon="i"></i> About us</a></li>
                <li id="search">
                  <a href="#" data-toggle="search-global-dropdown"><i class="icon icon-functional" data-icon="1"></i> <span class="show-for-small-only">Search</span></a>
                  <div id="search-global-dropdown" class="dropdown-pane" data-dropdown data-options="closeOnClick:true;">
                    <form id="global-search" name="global-search" action="/ebisearch/search.ebi" method="GET">
                      <fieldset>
                        <div class="input-group">
                          <input type="text" name="query" id="global-searchbox" class="input-group-field" placeholder="Search all of EMBL-EBI">
                          <div class="input-group-button">
                            <input type="submit" name="submit" value="Search" class="button">
                            <input type="hidden" name="db" value="allebi" checked="checked">
                            <input type="hidden" name="requestFrom" value="global-masthead" checked="checked">
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
            </div>
          </nav>
        </div>

        <div class="masthead row">
          <!-- local-title -->
          <div class="columns medium-12" id="local-title">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          </div>
          <!-- /local-title -->

          <!-- local-nav -->
          <?php ebiframework_top_bar_r(); ?>
          <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
            <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
          <?php endif; ?>
          <!-- /local-nav -->
        </div>
      </header>
    </div>
  </div>


  <?php do_action( 'ebiframework_after_body' ); ?>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <?php do_action( 'ebiframework_layout_start' ); ?>

  <header id="masthead" class="site-header" role="banner">
    <div class="title-bar" data-responsive-toggle="mobile-menu">
      <button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
      <div class="title-bar-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      </div>
    </div>

    <nav id="site-navigation" class="main-navigation top-bar" role="navigation">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <?php ebiframework_top_bar_r(); ?>

        <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
          <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <div id="content" role="main" class="row">
    <section class="container">
      <?php do_action( 'ebiframework_after_header' );
