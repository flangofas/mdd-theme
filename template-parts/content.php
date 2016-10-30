<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Material_Design_Dentistry
 */

?>
<div class="row">
	<div class="col s12">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="card">
				<div class="card-image">
					<img src="<?php the_post_thumbnail_url() ?>">
					<span class="card-title"><?php the_title() ?></span>
				</div>
				<div class="card-content">
					<?php
					echo get_the_excerpt();
					?>
				</div>
				<div class="card-action">
					<a href="<?php esc_url( get_permalink() ) ?>">Read more</a>
				</div>
			</div>
		</article><!-- #post-## -->
	</div>
</div>