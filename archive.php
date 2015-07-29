<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="row content-section">

	<div id="content" class="row">

		<div id="primary" class="columns large-8 small-12">

			<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> >

			<header>
				<a class="archive-title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
				<div class="meta"><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></div>
			</header>

			<section>
				<div class="archive-thumb left"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
				<div class="archive-excerpt"><?php the_excerpt(); ?></div>
			</section>

			<footer>
				<div class="archvie-meta"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></div>
				<div class="archvie-tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'reelyskinny' ) . '</span> ', ', ', '' ); ?></div>
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
