<?php
if ( ! function_exists( 'openshine_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 */
function openshine_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
                case '' :
        ?>
	<div class="comment clearfix">
		<div class="grid3 f-l" id="li-comment-<?php comment_ID(); ?>"> 
                        <?php echo get_avatar( $comment, 40 ); ?>
			<ul> 
				<li><?php comment_author_link(); ?></li> 
				<li><?php printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></li>
			</ul> 
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'openshine' ); ?></em>
				<br />
			<?php endif; ?>
		</div> 
		<div class="grid5 f-r"> 
			<?php comment_text(); ?>
                        <p><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></p>
		</div> 
	</div>

        <?php
                        break;
                case 'pingback'  :
                case 'trackback' :
        ?>
	<div class="comment clearfix">
                <p><?php _e( 'Pingback:', 'openshine' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'openshine' ), ' ' ); ?></p>
	</div>
        <?php
                        break;
        endswitch;
}
endif;

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));

?>
