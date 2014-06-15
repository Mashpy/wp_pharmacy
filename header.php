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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

			<h1>
				<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<!--Rone fix the size and padding of header image-->					
				<img class="header-image" src="<?php header_image(); ?>" width="20px" height="20px" alt="">
				</a>
				<?php endif; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Noakhali Science and Technology University</a>
			</h1>

		
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>


				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

				<?php get_search_form(); ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<?php echo esc_html( $description ); ?>
	<?php endif; ?>
		<img class="demoimg" src="<?php echo get_template_directory_uri();?>/images/demo-pic.png" />


				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) );  ?>
