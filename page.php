<?php
get_header();
?>

<div class="ubuntu-page-wrapper">
    <article class="ubuntu-page-content">
		<?php
		if(have_posts()) {
			while(have_posts()) {
				the_post();

				get_template_part( 'template-parts/content', 'page' );
			}
		}
		?>
    </article>
</div>

<?php
get_footer();
?>


