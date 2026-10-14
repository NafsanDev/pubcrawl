<?php
/**
 * Comments template.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) || post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area" style="padding:2rem 0;">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf(
				/* translators: %s: number of comments */
				esc_html( _n( '%s comment', '%s comments', get_comments_number(), 'pubcrawl-zurich' ) ),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>
		<ol class="comment-list"><?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?></ol>
		<?php the_comments_pagination(); ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p><?php esc_html_e( 'Comments are closed.', 'pubcrawl-zurich' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
