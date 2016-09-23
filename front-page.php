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
						<div class="section-content">
							<div class="center-align">
								<h2 class="heading">ABOUT US</h2>
							</div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a href="#" class="rm">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section split medium">
			<div class="row no-gutter">
				<div class="col l6 s12">
					<div class="card hoverable medium">
						<div class="card-image">
							<img src="<?php echo get_template_directory_uri() . '/img/our-clinic.jpg'; ?>">
							<h3 class="card-title heading">ABOUT OUR CLINIC</h3>
						</div>
						<div class="card-content">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
						<div class="card-action">
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col l6 s12">
					<div class="section-valign valign-wrapper">
						<div class="valign">
							<h4 class="heading">BOOK AN APOINTMENT</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a href="#" class="rm">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col l6 s12">
					<div class="section-valign valign-wrapper">
						<div class="valign">
							<h4 class="heading">OUR DOCTORS</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a href="#" class="rm">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col l6 s12">
					<div class="card hoverable medium">
						<div class="card-image">
							<img src="<?php echo get_template_directory_uri() . '/img/our-treatments.jpg'; ?>">
							<h3 class="card-title heading">OUR TREATMENTS</h3>
						</div>
						<div class="card-content">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
						<div class="card-action">
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="section sm" style="background-image: url('<?php echo get_template_directory_uri() . '/img/social-media.jpg'; ?>');">
			<div class="container sm-content">
				<div class="row">
					<div class="col offset-l3 l6 s12">
						<h3 class="heading">Dr.Leonidou Clinic</h3>
						<div class="sm-post">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<p><small>July 8 at 7:29am</small></p>
						</div>
						<div class="sm-post">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<p><small>July 8 at 7:29am</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
