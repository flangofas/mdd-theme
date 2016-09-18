<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Material_Design_Dentistry
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_template_part( 'template-parts/slider' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
