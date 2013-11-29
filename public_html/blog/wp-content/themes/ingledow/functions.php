<?php

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 280, true);

function remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

include 'custom-tweet-button.php';

if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	
			<div class="gravatar">
			<?php
			$avatar_size = 68;
			if ( '0' != $comment->comment_parent )
				$avatar_size = 39;
		
			echo get_avatar( $comment, $avatar_size );
		
			/* translators: 1: comment author, 2: date and time */
			printf( __( '<p class="comment-author">%1$s</p>', 'twentyeleven' ),
				sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
				sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
					esc_url( get_comment_link( $comment->comment_ID ) ),
					get_comment_time( 'c' ),
					/* translators: 1: date, 2: time */
					sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
				)
			);
			?>
			</div>
			
			<div class="comment-content"><?php comment_text(); ?></div>
	
	<p class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</p><!-- .reply -->

	<?php break; endswitch;
}
endif; // ends check for twentyeleven_comment()

?>