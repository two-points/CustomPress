<?php
/**
 * Template part for displaying Author Box
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CustomPress
 */

?>


<div class="custompress-author-box tp-panel">
	<!-- author bio -->
	<h4><?php esc_html_e( 'Author: ', 'custompress' ) ?></h4>
	<div class="author-bio content-box-inner row">

		<!-- avatar -->
		<div class="avatar column column-20">
		    <?php echo get_avatar(get_the_author_meta('ID'), '120'); ?>
		</div>
		<!-- end avatar -->

		<!-- user bio -->
		<div class="author-bio-content column column-80">

			<h5 class="author-name"><?php echo esc_html( get_the_author_meta('display_name') ); ?></h5>
			<p class="author-description">
				<?php echo wp_kses_post( get_the_author_meta('description') ); ?>
			</p>

			<a href="<?php echo esc_url( get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')) ); ?>"><?php esc_html_e( 'View all posts by ', 'custompress' ) ?><?php the_author(); ?>
			</a>

		</div><!-- end .author-bio-content -->


	</div><!-- end .author-bio  -->

</div>
