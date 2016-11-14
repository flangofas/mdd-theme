<div class="carousel mmd-carousel">
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
foreach ($items as $item) : ?>
		<a class="carousel-item" href="#"><img src="<?php echo $item->guid ?>"></a>
<?php
endforeach;
?>
</div>
