<?php
/** Newsletter (admin-supplied embed; hidden when empty). @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$pcz_embed = pcz_get( 'pcz_newsletter_embed' );
if ( empty( $pcz_embed ) ) {
	return;
}
?>
<section style="background:var(--cream); padding:4rem 2rem;" id="newsletter">
	<div class="container fade-up" style="max-width:640px; text-align:center;">
		<?php echo $pcz_embed; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- admin-entered embed code, sanitized on save. ?>
	</div>
</section>
