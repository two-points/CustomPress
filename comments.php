<?php
/**
 * The template for displaying comments
 *
 * @package custompress
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area tp-panel">

	<div class="card">

		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>

			<div class="card-block">
		        <h6 class="comments-title ">
					<?php
						$comments_number = get_comments_number();
						if ( '1' === $comments_number ) {
							/* translators: %s: post title */
							printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'custompress' ), get_the_title() );
						} else {
							printf(
								/* translators: 1: number of comments, 2: post title */
								_nx(
									'%1$s Reply to &ldquo;%2$s&rdquo;',
									'%1$s Replies to &ldquo;%2$s&rdquo;',
									$comments_number,
									'comments title',
									'custompress'
								),
								number_format_i18n( $comments_number ),
								get_the_title()
							);
						}
					?>
				</h6><!-- .comments-title -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'custompress' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'custompress' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'custompress' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>

				<ul class="comment-list">
					<?php
						wp_list_comments( array(
							'style'      => 'ul',
							'short_ping' => true,
							'avatar_size'	=> 60,
							'callback'		=> 'custompress_comments',
						) );
					?>
				</ul><!-- .comment-list -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'custompress' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'custompress' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'custompress' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
			<?php endif; // Check for comment navigation. ?>

			</div><!-- /.card-block -->


		<?php endif; // Check for have_comments().


		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<div class="card-block">
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'custompress' ); ?></p>
			</div>
			<!-- /.card-block -->
		<?php endif; ?>

		<div class="custompress-comments-form">
			<?php
				$custompress_comment_field = '<div class="comment-form-textarea form-group column"><textarea id="comment" name="comment" cols="45" rows="12" aria-required="true" class="form-control " placeholder="'. esc_html__('Enter your comment&hellip;', 'custompress') .'"></textarea></div>';

				$sp_fields =  array(

				  'author' =>
					'<div class="comment-form-author form-group column column-33"><input id="author" placeholder="'. esc_attr__('Name', 'custompress') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" class="form-control" required /></div>',

				  'email' =>
					'<p class="comment-form-email form-group column column-33"><input id="email" placeholder="'. esc_attr__('Email', 'custompress') .'" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" class="form-control" required /></p>',

				  'url' =>
					'<p class="comment-form-url form-group column column-33"><input id="url" placeholder="'. esc_attr__('Website', 'custompress') .'" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" class="form-control" /></p>',
				);


				comment_form(array(
					'comment_field' => $custompress_comment_field,
					'title_reply_before' => '<h4 class="reply-title custompress-reply-title text-center">',
					'title_reply_after' => '</h4>',
					'title_reply' => esc_html__('Leave a Comment', 'custompress'),
					'cancel_reply_link' => esc_html__('Cancel Comment', 'custompress'),
					'label_submit' => esc_html__('Post Comment', 'custompress'),
					'fields' => $sp_fields,
					'class_submit' => 'submit btn btn-primary comment-submit-btn',
					'submit_field' => '<div class="form-submit text-center column">%1$s %2$s</div>',
					'cancel_reply_before' => '<small class="custompress-cancel-reply">',
					'class_form' => 'comment-form align-items-center row'
				));
			?>
		</div><!-- /.card-block -->

	</div>
	<!-- /.card -->

</div><!-- #comments -->
