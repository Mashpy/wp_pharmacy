<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div style="margin-bottom: 40px" class="row marketing">
<div class="col-lg-7">
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-4' ); ?>

<?php endif; ?>
</div>
<div class="col-lg-5">
<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-5' ); ?>

<?php endif; ?>
</div>
</div>


<div class="row">
  <div class="col-xs-6 col-sm-3"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/banners01.jpg" border="0" /></a></div>
  <div class="clearfix visible-xs"></div>
  <div class="col-xs-6 col-sm-3"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/banners02.jpg" border="0" /></a></div>

  <!-- Add the extra clearfix for only the required viewport -->
  <div class="clearfix visible-xs"></div>

  <div class="col-xs-6 col-sm-3"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/banners03.jpg" border="0" /></a></div>
 <div class="clearfix visible-xs"></div>
  <div class="col-xs-6 col-sm-3"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/banners04.jpg" border="0" /></a></div>
</div>


<?php

get_footer();
