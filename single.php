<?php 
/*
Template Name: Releases
Template Post Type: post

@package Nikkon
*/

get_header(); ?>

	<div id="primary" class="content-area <?php echo ( get_theme_mod( 'nikkon-blog-single-full-width', false ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/contents/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( get_theme_mod( 'nikkon-blog-single-full-width', false ) ) : ?>
        <!-- No Sidebar -->
    <?php else : ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>
	
	<div class="clearboth"></div>
	
<?php get_footer(); ?>
