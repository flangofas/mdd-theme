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
		?>
		<div class="section split medium">
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
									<img src="<?php echo $section->post_thumbnail_url ?>">
									<h2 class="card-title heading"><?php echo $section->post_title ?></h2>
								</div>
								<div class="card-content">
									<?php echo $post->post_excerpt ?>
								</div>
								<div class="card-action">
									<a href="#"><?php _e('Read more', 'mmd') ?></a>
								</div>
							</div>
						</div>
				<?php else : ?>
						<div class="col <?php echo ($full_col) ? '' : 'l6'; ?> s12">
							<div class="section-valign valign-wrapper">
								<div class="valign">
									<h2 class="heading"><?php echo $section->post_title ?></h2>
									<p><?php echo apply_filters('the_excerpt', $section->post_excerpt) ?></p>
								</div>
							</div>
						</div>
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="clearfix"></div>
		<?php
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
			<div class="section sm" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
				<div class="container sm-content">
					<div class="row">
						<div class="col offset-l3 l6 s12">
							<h2 class="heading"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_query();
		unset($query);
		?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
