<?php
get_header(); ?>
<div id="content" class="site-content">
	<div class="container pad-top-40">
		<div class="row">
			<div id="primary" class="content-area column content-width">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for : %s', 'custompress' ), '<span>' . get_search_query() . '</span>' );
						?></h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation( array(
						'next_text'         => __( '<span class="button">Newer Posts</span>', 'custompress' ),
						'prev_text'         => __( '<span class="button">Older Posts</span>', 'custompress' ),
					) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- #content -->

<?php
get_footer();
