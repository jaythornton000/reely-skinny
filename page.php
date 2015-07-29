<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="row content-section" id="<?php echo $post->post_name;?>">

	<div id="content" class="row">

		<div id="primary" class="columns large-8 small-12">

			<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> >

			<header>
				<h2><?php the_title(); ?></h2>
				<div class="meta"><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></div>
			</header>

			<section>
				<?php the_content(); ?>
				<div data-alert class="alert-box secondary"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></div>
			</section>

			<footer>
				<?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'reelyskinny' ) . '</span> ', ', ', '' ); ?>
				<?php comments_template(); ?>
			</footer>

			</article>
		
		<?php endwhile; ?>

		<?php else : ?>

			<header>
				<?php _e( 'Oops, Post Not Found!', 'reelyskinny' ); ?>
			</header>

			<section>
				<?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'reelyskinny' ); ?>
			</section>

			<footer>
				<?php _e( 'This is the error message in the index.php template.', 'reelyskinny' ); ?></p>
			</footer>


		<?php endif; ?>

		</div>

	<div id="secondary" class="columns large-4 small-12">
		<?php get_sidebar(); ?>
	</div>

</div> <!-- /content -->
</div> <!-- /content-section -->
<?php get_footer(); ?>