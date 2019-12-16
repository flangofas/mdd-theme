<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Material_Design_Dentistry
 */

get_header(); ?>
<div id="primary">
	<main id="main" class="site-main" role="main">
		<?php get_template_part( 'template-parts/slider' ); ?>
		<?php
		$args = [
			'pagename' => 'about-us',
			'post_type' => 'page',
		];
		$query = new WP_Query( $args );
		while ( $query->have_posts() ) :
			$query->the_post(); ?>
			<div class="section section-first">
				<div class="container">
					<div class="row">
						<div class="col s12">
							<div class="section-content">
								<div class="center-align">
									<h2 class="heading"><?php the_title() ?></h2>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_query();
		unset($query);
		$args = [
			'pagename' => 'social-media',
			'post_type' => 'page',
		];
		$query = new WP_Query( $args );
		while ( $query->have_posts() ) :
			$query->the_post();
		?>
			<div class="section" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>'); background-position: top left;">
				<div class="container sm-content">
					<div class="row">
						<div class="col offset-l3 l6 s12">
							<h2 class="heading"><?php the_title(); ?></h2>
							<?php echo do_shortcode('[fts_facebook type=page id=Dr.Leonidou posts=2 posts_displayed=page_only images_align=center]') ?>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_query();
		unset($query);
		?>
		<div class="section split large">
			<div class="row no-gutter">
				<?php
				$sections = material_design_get_sections();
				$total = count($sections);
				$odd = (bool)($total % 2);
				$i = 0;
				foreach ($sections as $section) :
					$last = ($total - 1) == $i;
					$i++;
					$full_col = ($odd && $last);
					if ($section->post_thumbnail_url) :
				?>
						<div class="col <?php echo ($full_col) ? '' : 'l6'; ?> s12">
							<div class="card hoverable medium">
								<div class="card-image">
									<img src="<?php echo $section->post_thumbnail_url ?>" alt="<?php echo $section->post_title ?>">
									<h2 class="card-title heading"><?php echo $section->post_title ?></h2>
								</div>
								<div class="card-content">
									<?php echo $section->post_excerpt ?>
								</div>
								<div class="card-action">
									<a href="<?php echo $section->link ?>"><?php _e('Read more', 'mmd') ?></a>
								</div>
							</div>
						</div>
				<?php else : ?>
						<div class="col <?php echo ($full_col) ? '' : 'l6'; ?> s12">
							<div class="section-valign valign-wrapper">
								<div class="valign">
									<h2 class="heading"><?php echo $section->post_title ?></h2>
									<p><?php echo material_design_the_excerpt($section); ?></p>
								</div>
							</div>
						</div>
				<?php endif;
				endforeach; ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
