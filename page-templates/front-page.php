<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="slider-widget">
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?></div>

<div class="slider-right-widget">
<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div>
		</div><!-- #content -->
			
	</div><!-- #primary -->

</div><!-- #main-content -->

<?php

get_footer();
