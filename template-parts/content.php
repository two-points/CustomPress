<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CustomPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'tp-panel' ); ?>>
	<?php
		$custompress_thumb_size = 'post-thumbnail';
		if ( get_theme_mod( 'post_thumb_size' ) ) {
			$custompress_thumb_size = get_theme_mod( 'post_thumb_size' );
		}
		$custompress_thumb_align = 'thumb-center';
		if ( get_theme_mod( 'post_thumb_align' ) ) {
			$custompress_thumb_align = get_theme_mod( 'post_thumb_align' );
		}
	?>

	<?php if ( has_post_thumbnail() ) : ?>
		<?php if ( is_singular() ) : ?>
            <?php if ( get_theme_mod( 'featured_image_above_title_single' ) == true ) :  ?>
            	<?php if ( !get_theme_mod( 'show_post_banner' ) ) : ?>
					<?php if ( !get_theme_mod( 'hide_featured_image_single' ) ) : ?>
						<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => '' ) ); ?>
					<?php endif; ?>
				<?php endif; ?>
            <?php endif; ?>
		<?php else : ?>

            <?php if ( get_theme_mod( 'featured_image_above_title_archive' ) == true ) : ?>
				<?php if ( !get_theme_mod( 'hide_featured_image' ) ) : ?>

					<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="custompress-thumb-link">
						<?php the_post_thumbnail( $custompress_thumb_size, array( 'class' => $custompress_thumb_align ) ); ?>
					</a>
				<?php endif; ?>
           <?php endif; ?>

		<?php endif; ?>
	<?php else : ?>

        <?php if ( get_theme_mod( 'featured_image_above_title_archive' ) == true ) : ?>
		    <?php if ( !get_theme_mod( 'hide_featured_image' ) ) : ?>

				<?php if ( get_theme_mod( 'custompress_default_thumbnail_image' ) ) : ?>
					<?php if ( !is_single() ) : ?>
			    		<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="custompress-thumb-link">
			                 <?php if ( get_theme_mod( 'custompress_change_default_post_thumbnail' ) ) : ?>
			                  <img src="<?php echo esc_url( get_theme_mod('custompress_change_default_post_thumbnail') ); ?>" alt="<?php the_title_attribute(); ?>" class="<?php echo $custompress_thumb_size; ?> <?php echo $custompress_thumb_align; ?>">
			                <?php else : ?>
			                 	<img src="<?php echo esc_url( get_template_directory_uri() . '/images/default-img.png' ); ?>" alt="<?php the_title_attribute(); ?>" class="<?php echo $custompress_thumb_size; ?> <?php echo $custompress_thumb_align; ?>">
			                <?php endif; ?>
			            </a>
			        <?php endif; ?>
				<?php endif; ?>
					<!-- .default images show -->
		    <?php endif; ?>
		<?php endif; ?>

	<?php endif; ?>

	<header class="entry-header <?php if ( get_theme_mod( 'show_post_banner' ) ) : echo 'post-header'; endif; ?>">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php custompress_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
		<?php if ( is_singular() ) : ?>
            <?php if ( get_theme_mod( 'featured_image_above_title_single' ) == false ) : ?>
            	<?php if ( !get_theme_mod( 'show_post_banner' ) ) : ?>
					<?php if ( !get_theme_mod( 'hide_featured_image_single' ) ) : ?>
						<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => '' ) ); ?>
					<?php endif; ?>
				<?php endif; ?>
            <?php endif; ?>
		<?php else : ?>
            <?php if ( get_theme_mod( 'featured_image_above_title_archive' ) == false ) : ?>
				<?php if ( !get_theme_mod( 'hide_featured_image' ) ) : ?>

					<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="custompress-thumb-link">
						<?php the_post_thumbnail( $custompress_thumb_size, array( 'class' => $custompress_thumb_align ) ); ?>
					</a>
				<?php endif; ?>
            <?php endif; ?>
		<?php endif; ?>
	<?php else : ?>

		<?php if ( get_theme_mod( 'featured_image_above_title_archive' ) == false ) : ?>
		    <?php if ( !get_theme_mod( 'hide_featured_image' ) ) : ?>

				<?php if ( get_theme_mod( 'custompress_default_thumbnail_image' ) ) : ?>
					<?php if ( !is_single() ) : ?>
			    		<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" class="custompress-thumb-link">
			                 <?php if ( get_theme_mod( 'custompress_change_default_post_thumbnail' ) ) : ?>
			                  <img src="<?php echo esc_url(get_theme_mod('custompress_change_default_post_thumbnail')); ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top d-block img-fluid w-100">
			                <?php else : ?>
			                 	<img src="<?php echo esc_url( get_template_directory_uri() . '/images/default-img.png' ); ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top d-block img-fluid w-100">
			                <?php endif; ?>
			            </a>
			        <?php endif; ?>
				<?php endif; ?>
					<!-- .default images show -->
			<?php endif; ?>
		<?php endif; ?>

    <?php endif; ?>



	<?php if ( is_single() ) : ?>

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'custompress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custompress' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php else : ?>
        <?php if ( !get_theme_mod( 'hide_excerpt' ) ) :  ?>

			<div class="entry excerpt entry-summary">
                <?php if ( get_theme_mod( 'full_text' ) ) : ?>
						<?php the_content(); ?>
	           	        <!-- full content -->
	           	<?php else : ?>
					    <?php the_excerpt(); ?>  <!-- only show excerpt -->
			    <?php endif; ?>

	        </div><!--/.entry-->
        <?php endif; ?>

	<?php endif; ?>

	<footer class="entry-footer">
		<?php custompress_entry_footer(); ?>

		<?php if ( get_theme_mod( 'read_more_btn' ) && !get_theme_mod( 'full_text' )  ) : ?>
			<?php if ( !is_single() ) : ?>
	            <div class="read-more-btn">
	    			<a href="<?php echo esc_url( get_permalink() ); ?>" class="custompress-btn btn btn-primary"><?php echo wp_kses_post( get_theme_mod( 'read_more_label', __( 'Read More', 'custompress' ) ) ); ?>
	    			</a>
	    		</div>
	       <?php endif; ?>
        <?php endif; ?>
	</footer><!-- .entry-footer -->

	<?php if ( is_sticky() && !is_single() ) : ?>
        <div class="sticky-icon">
            <span class="dashicons dashicons-admin-post" title="<?php echo esc_attr__( 'Sticky Post', 'custompress' ) ?>"></span>
        </div>
        <!-- /.sticky-icon -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
