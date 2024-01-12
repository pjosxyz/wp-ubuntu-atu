<div class="container">
	<div class="post mb-5">
		<div class="media">
			<!-- <?php
			the_post_thumbnail_url();
			?> -->
			<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>">
			<div class="media-body">
				<h3 class="title mb-1">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>


				<a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
			</div><!--//media-body-->
		</div><!--//media-->
	</div>

</div>