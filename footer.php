<div class="ubuntu__wrapper ubuntu-footer__border">
    <footer class="ubuntu-footer">
        <div class="ubuntu-footer__content">
			<?php
			wp_nav_menu(
				array(
					'menu'           => 'nav-menu',
					'container'      => '',
					'theme_location' => 'footer',
					'items-wrap'     => '<ul>%3$s</ul>'
				)
			);
			?>
            <div class="ubuntu-footer__social-icons">
	            <?php
	            wp_nav_menu(
		            array(
			            'menu'           => 'social-footer-links',
			            'container'      => '',
			            'theme_location' => 'social-footer',
			            'items-wrap'     => '<ul>%3$s</ul>'
		            )
	            );
	            ?>
            </div>
        </div>
        <div class="ubuntu-footer__legal">
            &#169; 2024 Pearce O'Shea Operating Systems and Cloud Computing Project
        </div>
    </footer>
</div>


<?php
wp_footer();
?>

</body>
</html>