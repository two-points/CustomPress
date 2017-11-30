<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CustomPress
 */

?>

     <div class="container ">
        <?php if ( is_active_sidebar( 'social-footer' ) ) : ?>
			<div id="footer-social" class="social-footer">
				<?php dynamic_sidebar( 'social-footer' ) ?>
			</div>
	    <?php endif; ?>
     </div>
	<footer id="colophon" class="<?php if ( !get_theme_mod( 'footer_in_container' ) ) : echo 'site-footer'; endif; ?>">
		<div class="container">
			<div class="<?php if ( get_theme_mod( 'footer_in_container' ) ) : echo 'site-footer'; endif; ?>">

				<?php if ( get_theme_mod( 'site_footer_align' ) =='center' ) : ?>

					<div class="site-info row">


						<div class="column text-center">

							<div class="<?php if ( get_theme_mod( 'footer_in_container' ) ) : echo 'site-footer'; endif; ?>">
								<?php if ( is_active_sidebar( 'middle-lower-footer' ) ) : ?>
									<div class="site-footer-lower">
										<?php dynamic_sidebar( 'middle-lower-footer' ); ?>
									</div>
				                <?php endif; ?>
								<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'custompress' ) ); ?>"><?php
									/* translators: %s: CMS name, i.e. WordPress. */
									printf( esc_html__( 'Proudly powered by %s', 'custompress' ), 'WordPress' );
								?></a>
								<?php
									/* translators: 1: Theme name, 2: Theme author. */
									printf( esc_html__( 'Theme: %1$s by %2$s.', 'custompress' ), 'custompress', '<a href="http://two-points.com/">TwoPoints</a>' );
								?>
							</div>
						</div>
						<!-- /.column -->
					</div><!-- .site-info -->

				<?php else : ?>

						<div class="site-info row">
							<div class="column">
								<div class="<?php //if ( get_theme_mod( 'footer_in_container' ) ) : echo 'site-footer'; endif; ?>">
									<div class="row">
										<div class="column">
											<p class="mb-0"><?php esc_html_e( '(c) Copyright 2017 - All Rights Reserved', 'custompress' ) ?></p>
										</div>
										<!-- /.column -->
										<?php if ( is_active_sidebar( 'middle-lower-footer' ) ) : ?>
											<div class="column site-footer-lower">
												<?php dynamic_sidebar( 'middle-lower-footer' ); ?>
											</div>
				                        <?php endif; ?>
										<div class="column text-right">
											<p class="mb-0"><?php wp_kses_post( _e('<a href="https://wp-custompress.com/">CustomPress Theme</a> by TwoPoints', 'custompress') )  ?></p>
										</div>
										<!-- /.column -->
									</div>
								</div>
							</div>

						</div><!-- .site-info -->

				<?php endif; ?>

                  <?php //do_action( 'my_footer_hook' ); ?>

            </div><!-- condition .site-footer -->
            <?php if ( !get_theme_mod( 'hide_back_top_button' ) ) : ?>
			  <div class="scroll-to-top">
			    <span class="dashicons dashicons-arrow-up-alt"></span>
		      </div>
	        <?php endif; ?>
		<!-- /.scroll-to-top -->

		</div>
		<!-- /.container -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
