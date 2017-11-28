<?php
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="content" class="site-content">
        <?php if ( get_theme_mod( 'show_post_banner' ) ) : ?>
		    <div class="banner-section post-banner">
		    	<div class="banner-section-content">

		    		<div class="entry-meta ">
						<?php
							$categories_list = get_the_category_list( esc_html__( ' &#8226; ', 'custompress' ) );
							if ( $categories_list) {
								/* translators: 1: list of categories. */
								printf( '<span class="cat-links custompress-cat-links">' . esc_html__( 'Posted in: %1$s', 'custompress' ) . '</span>', $categories_list ); // WPCS: XSS OK.
							}
						?>
		            </div><!-- /.entry-meta -->
		            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		            <div class="entry-meta">
						<?php custompress_posted_on(); ?>
					</div><!-- .entry-meta -->

		    	</div>

		    </div>

			    <style type="text/css">

					<?php if ( get_theme_mod( 'post_banner_background' ) == 'featured' ) :  ?>

				      <?php if ( has_post_thumbnail() ): ?>
						.post-banner{ background-image: url(<?php echo esc_url( the_post_thumbnail_url() ); ?>); }
		              <?php else : ?>
		               .post-banner{ background-image: url(<?php echo esc_url( get_theme_mod('default_post_banner_img') ); ?>); }
                       <?php  endif; ?>

					<?php elseif ( get_theme_mod( 'post_banner_background' ) == 'default' ) :  ?>
				            .post-banner{ background-image: url(<?php echo esc_url( get_theme_mod('default_post_banner_img') ); ?>);
				              }

					<?php else : ?>
			        .post-banner {
			        	background: <?php echo esc_html( get_theme_mod('default_post_banner_color') ); ?>;
			        }
					<?php  endif; ?>
	            </style>
	    <?php endif; ?>

		<div class="container pad-top-40">

			<div class="row">
				<?php if ( get_theme_mod( 'ads_sidebar_layout' ) == 'left'  ) : ?>
	                       <?php get_sidebar('ads'); ?>
				<?php endif; ?>

				<?php if ( get_theme_mod( 'single_post_layout' ) =='sidebar-left'  ) : ?>
	                <?php get_sidebar(); ?>
				<?php endif; ?>

				<div id="primary" class="content-area <?php if ( get_theme_mod( 'single_post_layout' ) =='no-sidebar' ) : echo 'column'; else : echo 'column content-width'; endif; ?>">
					<main id="main" class="site-main custompress-single-post">

					<?php


						get_template_part( 'template-parts/content', get_post_format() );

						if ( !get_theme_mod( 'hide_author_meta_box' ) ) {
									get_template_part( 'template-parts/authorbox' );
						}

	                    if ( !get_theme_mod( 'hide_navigation_single' ) ) {
							the_post_navigation( array(
								'next_text'         => __( '<span class="button">Next Post</span>', 'custompress' ),
								'prev_text'         => __( '<span class="button">Previous Post</span>', 'custompress' ),
					        ));
					    }


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;


					?>

					</main><!-- #main -->
				</div><!-- #primary -->

				<?php if ( get_theme_mod( 'single_post_layout' ) =='sidebar-right' || ! get_theme_mod( 'single_post_layout' ) ) : ?>
	                <?php get_sidebar(); ?>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'ads_sidebar_layout' ) == 'right'  ) : ?>
	                       <?php get_sidebar('ads'); ?>
				<?php endif; ?>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div><!-- #content -->

<?php endwhile; ?>

<?php
get_footer();
