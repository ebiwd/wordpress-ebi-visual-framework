<!doctype html>
<html class="ef-theme" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/default.min.css">
</head>
<body <?php body_class(); ?>>
<header class="ef-topbar">
  <div class="title-bar" data-responsive-toggle="EBIFramework" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title"><?php bloginfo( 'name' ); ?></div>
  </div>
  <nav class="top-bar" id="EBIFramework">
    <div class="top-bar-left">
      <ul class="menu show-for-medium">
        <li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </li>
      </ul>
    </div>
    <div class="top-bar-right">
      <?php wp_nav_menu( array( 'theme_location' => 'topbarmenu', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="menu" data-responsive-menu="drilldown medium-dropdown" data-click-open="false">%3$s</ul>', 'fallback_cb' => 'ebiframework_menu_fallback', 'walker' => new ebiframework_menu( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
    </div>
  </nav>
</header>
<main>