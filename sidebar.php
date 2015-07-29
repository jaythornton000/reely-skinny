<div id="sidebar" class="" role="complementary">

<?php if ( is_active_sidebar( 'rs-sidebar' ) ) : ?>

	<?php dynamic_sidebar( 'rs-sidebar' ); ?>

<?php else : ?>

	<div class="alert-box alert round">
		<?php _e( 'Widgets! We need Widgets!.', 'rs' );  ?>
	</div>

<?php endif; ?>

</div>