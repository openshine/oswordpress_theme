<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'openshine' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php if ( have_comments() ) : ?>
			<header>
			<h3 id="comments-title"><?php
			printf( _n( '1 COMMENT', '%1$s COMMENTS', get_comments_number(), 'openshine' ),
			number_format_i18n( get_comments_number() ));
			?></h3>
			<p class="publish"><a href="#"><span></span><?php _e("Publish my comment"); ?></a></p>
			</header>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'openshine' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'openshine' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use openshine_comment() to format the comments.
				 */
				wp_list_comments(array ('callback' => 'openshine_comment' ) );
			?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'openshine' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'openshine' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'openshine' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>
			</div><!-- #comments -->

			<div id="commentForm"> 
				<header> 
					<h3><?php _e("PUBLISH MY COMMENT"); ?></h3> 
				</header> 
<?php
add_filter('comment_form_field_author', 'openshine_showauthor');
add_filter('comment_form_field_email', 'openshine_showemail');
add_filter('comment_form_field_url', 'openshine_showurl');
add_filter('comment_form_field_comment', 'openshine_showcomment');

function openshine_showauthor ($arg) {
	$arg = '<div class="grid3 f-l"><input type="text" class="texto" value="'.__("Your name").'" id="author" name="author" /></p>';
	return $arg;
}
function openshine_showemail ($arg) {
	$arg = '<p><input type="text" class="texto" value="'.__("Your email").'" id="email" name="email" /></p>';
	return $arg;
}
function openshine_showurl($arg) {
	$arg = '<p><input type="text" class="texto" value="'.__("Your website").'" id="url" name="url" /></p></div>';
	return $arg;
}
function openshine_showcomment ($arg) {
	$arg = '<div class="grid5 f-r"><p><textarea class="texto" cols="" rows=""i id="comment" name="comment" >'.__("Your comment").'</textarea></p>';
	return $arg;
}
$fields = array ('comment_notes_after' => '');

comment_form($fields);
?>
			</div><!--commentForm--> 

</div><!-- #comments -->
