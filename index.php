<?php
get_header(); ?>

<div id="content" class="site-content">
	<div class="container pad-top-40">

		<div class="row">
			<?php if ( get_theme_mod( 'ads_sidebar_layout' ) == 'left'  ) : ?>
                    <?php get_sidebar('ads'); ?>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'archive_post_layout' ) =='sidebar-left'  ) : ?>
                <?php get_sidebar(); ?>
			<?php endif; ?>
			<div id="primary" class="content-area column content-width">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;  ?>

					<?php if ( get_theme_mod( 'post_display_layout' ) == 'grid'  ) : ?>

		                <div class="row">

		                    <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();  ?>
								     <div class="column column-50">

								      	<?php	get_template_part( 'template-parts/content', get_post_format() ); ?>
			                          </div>
                            <?php
		                    endwhile;  ?>


		                </div>

                   <?php else : ?>

                      	<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() );

							endwhile;
                        ?>

					<?php endif; ?>

					<?php

					the_posts_navigation( array(
						'next_text'         => __( '<span class="button">Newer Posts</span>', 'custompress' ),
						'prev_text'         => __( '<span class="button">Older Posts</span>', 'custompress' ),
					) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
			<?php if ( ( get_theme_mod( 'archive_post_layout' ) =='sidebar-right'  ) || ! get_theme_mod( 'archive_post_layout' ) ) : ?>
                <?php get_sidebar(); ?>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'ads_sidebar_layout' ) == 'right'  ) : ?>
                       <?php get_sidebar('ads'); ?>
			<?php endif; ?>

		</div><!-- /.row -->
	</div><!-- /.container -->

</div><!-- #content -->
<?php
get_footer();
