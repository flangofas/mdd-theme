<div class="container mmd-card-horizontal-wrapper">
	<div class="row">
		<div class="col s12">
			<div class="card horizontal">
				<div class="card-image hide-on-small-only">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="card-stacked">
					<div class="card-content">
					  <p><?php the_content() ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>