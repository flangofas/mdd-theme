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
		<div class="section section-first">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="center-align">
							<h2 class="heading">ABOUT US</h2>
						</div>
						<p class="read-more">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a href="#">Read more</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="section split">

		</div>
		<div class="section split">

		</div>
		<div class="section social-media">

		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
