<?php
/*
* Template Name: Left Sidebar
*
*/

get_header(); ?>
<div id="content" class="site-content">
	<div class="container pad-top-40">
		<div class="row">
			<?php get_sidebar('page'); ?>
			<div id="primary" class="content-area column content-width">
				<main id="main" class="site-main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
			
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- #content -->
<?php
get_footer();
