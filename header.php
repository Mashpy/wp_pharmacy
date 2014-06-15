<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel='stylesheet' href="<?php bloginfo('stylesheet_url')?>" type="text/css" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title">
				<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<!--Rone fix the size and padding of header image-->					
				<img class="header-image" src="<?php header_image(); ?>" width="20px" height="20px" alt="">
				</a>
				<?php endif; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Noakhali Science and Technology University</a>
			</h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>

	<div id="dept-header">
	<div class="dept-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</div>

	<div class="dept-des">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<?php echo esc_html( $description ); ?>
	<?php endif; ?>
	</div>
	</div>
			<img class="demoimg" src="<?php echo get_template_directory_uri();?>/images/demo-pic.png" />
		</div>
	</header><!-- #masthead -->
	
	<div style="float: left;padding-left:6%">	<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) );  ?>
			</nav>
	</div>			
	<div id="main" class="site-main">
		
