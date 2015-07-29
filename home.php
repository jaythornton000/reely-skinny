<?php get_header(); ?>

<?php
	global $query_string;
	query_posts($query_string . "post_type=rs-front-page&post_status=publish&posts_per_page=10" . '&order=ASC');
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="row home-panel clearfix" id="<?php echo $post->post_name;?>">

		<article>

			<div class="small-11 small-centered columns">

				<header>
					<h2 class="home-title"><?php the_title(); ?></h2>
				</header>

				<section>
					<?php the_content(); ?>
				</section>

			</div>

		</article>

	</section>
			
	<?php endwhile; ?>
	<?php else : ?>

		<section class="row home-panel clearfix">

				<div class="small-11 small-centered columns">
					<?php _e( 'Somethings gone horribly wrong', 'reelyskinny' ); ?>
				</div>

		</section>

	<?php endif; ?>

<?php get_footer(); ?>
