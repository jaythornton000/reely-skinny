
	<footer class="sitewide">
		
		<div class="columns">
			<?php if ( is_active_sidebar( 'rs-footer-widgets' ) ) : ?>

				<?php dynamic_sidebar( 'rs-footer-widgets' ); ?>

			<?php else : ?>


			<?php endif; ?>
		</div>

		<nav class="sub-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-nav') ); ?>
		</nav>

		<div class="row text-center">
			<div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | All Rights Reserved</div>
		</div>

	</footer>
	
	<?php wp_footer(); ?>

	<script>
		jQuery.noConflict();
		jQuery(document).foundation();
	</script>
	
	</body>

</html>
