<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf(
					_n( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'rye' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<section class="commentlist">
			<?php
			wp_list_comments(
				array(
                    'type'	=> 	'comment',
					'style'	=>	'div'
				)
			);
            ?>
		</section><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>    
            <nav id="comment-nav-below" class="blog-pagination" role="navigation">
                <?php previous_comments_link( '<button type="button" class="btn btn-outline-primary">Older comments</button>' ); ?>
                <?php next_comments_link( '<button type="button" class="btn btn-outline-primary">Newer comments</button>' ); ?>
            </nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) :
		?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'rye' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form( 
        array(
            'submit_field' => '<p class="form-submit">%1$s %2$s</p>',    
            'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-secondary %3$s" value="%4$s" />',
        )
    ); ?>

</div><!-- #comments .comments-area -->