<?php



if( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			$comments_number    =   get_comments_number();
			if( 1 === $comments_number ) {
				printf( esc_attr_x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'thesimplest' ), get_the_title() );
			} else {
				printf(
				/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s comment',
						'%1$s comments',
						$comments_number,
						'thesimplest'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h3>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'         =>  'ol',
					'short_ping'    =>  true,
					'avatar_size'   =>  62,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_attr_e( 'Comments are closed.', 'thesimplest' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form( array(
		'title_reply_before'    =>  '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'     =>  '</h3>',
	) );
	?>

</div><!-- .comments-area -->
					