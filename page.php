<?php
get_header(); ?>
<div id="content" class="site-content">
	<div class="container pad-top-40">
		<div class="row">
			<?php if ( get_theme_mod( 'ads_sidebar_layout' ) == 'left'  ) : ?>
                    <?php get_sidebar('ads'); ?>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'single_page_layout' ) =='sidebar-left'  ) : ?>
                <?php get_sidebar('page'); ?>
			<?php endif; ?>
			<div id="primary" class="content-area <?php if ( get_theme_mod( 'single_page_layout' ) =='no-sidebar' ) : echo 'column'; else : echo 'column content-width'; endif; ?>">
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
			<?php if ( ( get_theme_mod( 'single_page_layout' ) == 'sidebar-right' ) || ! get_theme_mod( 'single_page_layout' ) ) : ?>
                <?php get_sidebar('page'); ?>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'ads_sidebar_layout' ) == 'right'  ) : ?>
                       <?php get_sidebar('ads'); ?>
			<?php endif; ?>

		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- #content -->
<?php
get_footer();
