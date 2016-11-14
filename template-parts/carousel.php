<div class="carousel mmd-carousel">
<?php
// Get the queried object and sanitize it
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$slug = $current_page->post_name;
$options = [
	'slug' => $slug,
	'form' => 'carousel',
];
$items = material_design_get_attachments( $options );
foreach ($items as $item) : ?>
		<a class="carousel-item" href="#"><img src="<?php echo $item->guid ?>"></a>
<?php
endforeach;
?>
</div>
