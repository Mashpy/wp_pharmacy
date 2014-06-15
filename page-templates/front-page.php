<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-4' ); ?>

<?php endif; ?>


<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-5' ); ?>

<?php endif; ?>



<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-6' ); ?>

<?php endif; ?>



<?php

get_footer();
