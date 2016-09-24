<div class="container gallery">
	<div class="row">
		<div class="col s12">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="row">
		<?php for ($i=1;$i<14;$i++) : ?>
		<div class="col s12 m3">
			<img class="responsive-img materialboxed" data-caption="A picture of some deer and tons of trees" src="<?php echo get_template_directory_uri() . '/img/gallery/' . $i . '.jpg'; ?>" />
		</div>
		<?php endfor; ?>
	</div>
</div>