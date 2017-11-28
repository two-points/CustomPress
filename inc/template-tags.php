<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package CustomPress
 */

if ( ! function_exists( 'custompress_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function custompress_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		if ( get_theme_mod( 'metadata_icons' ) ) {
			$posted_on = '<span class="dashicons dashicons-calendar"></span>' . '<a href="' . esc_url( get_permalink() ) . '" class="bvcenter">' . $time_string . '</a>';
		}
		else {
			$posted_on = sprintf(
				/* translators: %s: post date. */
				esc_html_x( 'Posted on %s', 'post date', 'custompress' ),
				'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
			);
		}

		if ( get_theme_mod( 'metadata_icons' ) ) {
			$byline = '<span class="dashicons dashicons-admin-users"></span>' . '<span class="author vcard"><a class="url fn n bvcenter" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';
		}
		else {
			$byline = sprintf(
				/* translators: %s: post author. */
				esc_html_x( 'by %s', 'post author', 'custompress' ),
				'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);
		}

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'custompress_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function custompress_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'custompress' ) );
			if ( $categories_list ) {
				if ( get_theme_mod( 'metadata_icons' ) ) {
					/* translators: 1: list of categories. */
					printf( '<span class="cat-links"><span class="dashicons dashicons-category"></span>' . esc_html__( '<span class="screen-reader-text">Posted in:</span> %1$s', 'custompress' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
				else {
					/* translators: 1: list of categories. */
					printf( '<span class="cat-links">' . esc_html__( 'Posted in: %1$s', 'custompress' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'custompress' ) );
			if ( $tags_list ) {
				if ( get_theme_mod( 'metadata_icons' ) ) {
					/* translators: 1: list of tags. */
					printf( '<span class="tags-links"><span class="dashicons dashicons-tag"></span>' . esc_html__( '<span class="screen-reader-text">Tagged</span> %1$s', 'custompress' ) . '</span>', $tags_list ); // WPCS: XSS OK.
				}
				else {
					/* translators: 1: list of tags. */
					printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'custompress' ) . '</span>', $tags_list ); // WPCS: XSS OK.
				}
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'custompress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'custompress' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
