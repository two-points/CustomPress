<?php
/**
 * Implementation of the Custom Comments
 *
 * @package custompress
 */

if ( ! function_exists( 'custompress_comments' ) ) {
    function custompress_comments( $comment, $args, $depth ) {

    	?>
    	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

            <div class="media custompress-comment row">
                <div class="column column-10">
                    <?php $avtr_url = get_avatar_url( $comment ); ?>
                    <?php if (! empty( $avtr_url )) : ?>
                        <img class="comment-img" src="<?php echo esc_url( get_avatar_url( $comment ) ); ?>" alt="" width="60">
                    <?php else : ?>
                        <img class="comment-img" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/default-img.png'; ?>" alt="" width="60">
                    <?php endif; ?>
                </div>
                <div class="media-body column column-80">
                    <h6 class="mt-0 comment-author">
                        <?php echo get_comment_author_link(); ?>
                        <?php if ( $comment->comment_author_email == get_the_author_meta( 'email' ) ) : ?>
                            <small class="custompress-comment-by-author"><?php echo esc_html__( '&#8226; Post Author &#8226;', 'custompress' ) ?></small>
                        <?php endif; ?>
                    </h6>
                    <small class="date">
                        <?php
                            /* translators: 1: comment date. */
                            printf(esc_html__('%1$s at %2$s', 'custompress'), get_comment_date(),  get_comment_time())
                        ?>
                    </small>
                    <?php if ($comment->comment_approved == '0') : ?>
    					<em class="comment-awaiting"><?php esc_html_e('Comment is awaiting approval', 'custompress'); ?></em>
    					<br />
    				<?php endif; ?>
    				<?php comment_text(); ?>

                    <?php
                        $args['before'] = ''
                    ?>

                    <small class="reply">
    					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'custompress' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ), $comment->comment_ID ); ?>
    					<?php edit_comment_link( esc_html__( 'Edit', 'custompress' ), '<span class="" style="padding: 0 5px;">&middot;</span>' ); ?>
    				</small>
                </div>
            </div>

    	</li>

    	<?php
    }
}
