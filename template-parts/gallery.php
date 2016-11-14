<div class="container gallery main-content breathing-space">
	<div class="row">
		<div class="col s12">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="row">
		<?php
		// Get the queried object and sanitize it
		$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
		// Get the page slug
		$slug = $current_page->post_name;
		$template = basename(str_replace('page-', '', get_page_template()), '.php');
		$args = [
			'page_template' => $template,
			'page_slug' => $slug,
		];
		$items = material_design_get_attachments($args);
		foreach ($items as $item) :
			$caption = $item->post_excerpt ?: false;
			?>
			<div class="col s12 m3">
				<img class="responsive-img materialboxed" src="<?php echo $item->guid ?>" <?php echo ($caption) ? 'data-caption="$caption"' : '' ?>" />
			</div>
		<?php endforeach; ?>
	</div>
</div>