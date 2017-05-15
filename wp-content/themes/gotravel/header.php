<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gotravel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" /> </a>
         
        <?php wp_nav_menu( array(
             'theme_location' => 'primary',
             'menu_id' => 'primary-menu',
             'container'       => 'nav',
            'container_class' => 'menu',
            'container_id'    => '',
            'menu_class'      => 'menu-ul',
              ) 
          ); 
          ?>
        
        
        <div class="header-search">
            <aside id="secondary" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'header-search' ); ?>
            </aside><!-- #secondary -->
        </div>
         <button id="btn-menu" class="header-btn-menu">
                <i class="icon-menu"></i>
            </button>
        <a href="#request-popup" class="book request-popup-link"><i class="icon-book"></i> Customize your shuttle </a>
    </div>
    
   
</header>