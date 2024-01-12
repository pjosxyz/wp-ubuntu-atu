<?php
/* Template Name: Custom Search Results */
?>
<?php
get_header();
?>

	<div class="ubuntu-page-wrapper">
		<article class="ubuntu-page-content">

			<?php
			if( have_posts() ) {
				while( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content', 'archive');
				}
			} else {
                echo "<h2>No results</h2>";
            }
			?>
			<?php
			the_posts_pagination();
			?>
		</article></div>


<?php
get_footer();
?>