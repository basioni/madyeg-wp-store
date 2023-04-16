<?php
/*
Template Name: Header 1 : Free Style Page
*/
global $header_style;
$header_style = 'header-style-1';

get_header(); ?>

<div id="main-content" class="main-content">

	<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</div><!-- #post-<?php the_ID(); ?> -->
	<?php endwhile; ?>

</div><!-- #main-content -->

<?php 
get_footer();