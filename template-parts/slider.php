<?php
$args = array(
	'post_type' => 'slide',
	'orderby' => 'menu_order',
	'order' => 'ASC',
);
$query = new WP_Query( $args );
?>
<div class="slider">
	<ul class="slides">
	<?php
	while ( $query->have_posts() ) :
		$query->the_post();
		$valid_animations = ['left', 'center', 'right'];
		$animation = get_post_meta( get_the_ID(), 'animation', true );
		if ( !in_array($animation, $valid_animations) ) {
			$animation = 'center';
		}
	?>
		<li>
			<?php the_post_thumbnail(); ?>
			<div class="caption <?php echo $animation ?>-align">
				<h3><?php the_title() ?></h3>
				<h5 class="light grey-text text-lighten-3"><?php the_content(); ?></h5>
			</div>
		</li>
	<?php
	endwhile;
	?>
	</ul>
</div>
