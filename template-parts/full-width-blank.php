<?php
/*
* Template Name: Full Width Blank
*
*/

get_header(); ?>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custompress' ),
					'after'  => '</div>',
				) );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #content -->
<?php
get_footer();
