<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_Wordpress
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 * I used underscores comment.php; removed <?php the_comments_navigation(); ?>; 
 * removed the if else statments
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<div class="comments-wrap">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php $comment_count = get_comments_number();
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'bootstrap2wordpress' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
		?>

		</h3><!-- .comments-title -->


		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php 
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) : ?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bootstrap2wordpress' ); ?></p>
			<?php endif;

			endif; // Check for have_comments().

			comment_form();
		?>
	</div>  <!-- .comments-wrap -->
</div><!-- #comments -->
