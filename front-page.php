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

    </article>
</div>

<?php
get_footer();
?>
