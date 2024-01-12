<?php
get_header();
?>

<div class="ubuntu-page-wrapper">
    <article class="ubuntu-page-content">
	<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post();
			the_content( );
		}
	}
	?>
	<?php
	if(is_active_sidebar('image-gallery-home')) {
		dynamic_sidebar( 'image-gallery-home' );
	}
	?>
    </article>
</div>

<?php
get_footer();
?>
