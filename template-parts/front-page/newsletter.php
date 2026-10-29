<?php
/** Newsletter (admin-supplied embed; hidden when empty). @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/* $pcz_embed = pcz_get( 'pcz_newsletter_embed' );
if ( empty( $pcz_embed ) ) {
	return;
} */
?>
<section style="background:var(--cream); padding:4rem 2rem;" id="newsletter">
	<div class="container fade-up" style="max-width:640px; text-align:center;">
		<div class="section-label" style="text-align:center;">Stay in the Loop</div>
		<h2 class="section-title" style="text-align:center; margin-left:auto; margin-right:auto;">Get Our Monthly Tour Agenda</h2>
		<p class="section-desc" style="text-align:center; margin:0 auto 2rem;">Subscribe to our newsletter and never miss a themed night, special edition, or upcoming event.</p>
		<div class="sib-form" style="text-align: center; background-color: transparent;">

		<div id="sib-form-container" class="sib-form-container">
			<div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px; margin:0 auto;">
			<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
				<svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
				<path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z"></path>
				</svg>
				<span class="sib-form-message-panel__inner-text">
				Your subscription could not be saved. Please try again.
				</span>
			</div>
			</div>
			<div></div>
			<div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px; margin:0 auto;">
			<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
				<svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
				<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"></path>
				</svg>
				<span class="sib-form-message-panel__inner-text">
				Your subscription has been successful. You will receive our monthly Agenda / Newsletter!
				</span>
			</div>
			</div>
			<div></div>
			<div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:480px; margin:0 auto; border-radius:14px; border-width:1px; border-color:rgba(33,49,128,0.12); border-style:solid; direction:ltr; box-shadow:0 4px 24px rgba(33,49,128,0.06);">
			<form id="sib-form" method="POST" action="https://cc2f7ce2.sibforms.com/serve/MUIFAFRth9JVl5LwG3jUDn3EGteuBH3h-BfJl25K1WCbuQCk0EMMrcPMrIVf8bs92xvAlU3Tdp2Alb0j2AqiEIOXh11STDfx9IkZTR-AWzBhljOS8J_2azdiz35CGwfeh9T4v9oYr-tkzMRD2qGI9JO5IhF9d4gzwwJMw2VYjffRKdMw73kt4aNzfvTijgCP9mXhdIlH9ot74SDN" data-type="subscription" novalidate="true">
				<div style="padding: 8px 0;">
				<div class="sib-input sib-form-block">
					<div class="form__entry entry_block">
					<div class="form__label-row ">
						<label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="EMAIL" data-required="*">Enter your email</label>
						<div class="entry__field">
						<input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="EMAIL" data-required="true" required="">
						<div data-lastpass-icon-root="" data-lastpass-icon-for="EMAIL" style="position: relative !important; height: 0px !important; width: 0px !important; display: initial !important; float: left !important;"><template shadowrootmode="closed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-lastpass-icon="true" data-testid="infield-icon" style="position: absolute; cursor: pointer; height: 22px; max-height: 22px; width: 22px; max-width: 22px; top: -11px; left: -27px; z-index: auto; color: rgb(215, 64, 58);"><rect x="0.680176" y="0.763062" width="22.6392" height="22.4737" rx="4" fill="currentColor"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7935 7.9516C19.7935 7.64414 20.0427 7.3949 20.3502 7.3949C20.6576 7.3949 20.9069 7.64414 20.9069 7.9516V16.0487C20.9069 16.3562 20.6576 16.6054 20.3502 16.6054C20.0427 16.6054 19.7935 16.3562 19.7935 16.0487V7.9516Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.76288 13.6577C5.68525 13.6577 6.43298 12.9154 6.43298 11.9998C6.43298 11.0842 5.68525 10.3419 4.76288 10.3419C3.8405 10.3419 3.09277 11.0842 3.09277 11.9998C3.09277 12.9154 3.8405 13.6577 4.76288 13.6577Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.3298 13.6577C11.2521 13.6577 11.9999 12.9154 11.9999 11.9998C11.9999 11.0842 11.2521 10.3419 10.3298 10.3419C9.4074 10.3419 8.65967 11.0842 8.65967 11.9998C8.65967 12.9154 9.4074 13.6577 10.3298 13.6577Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8964 13.6577C16.8188 13.6577 17.5665 12.9154 17.5665 11.9998C17.5665 11.0842 16.8188 10.3419 15.8964 10.3419C14.974 10.3419 14.2263 11.0842 14.2263 11.9998C14.2263 12.9154 14.974 13.6577 15.8964 13.6577Z" fill="white"></path></svg></template></div></div>
					</div>
					<label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
					</label>
					<label class="entry__specification" style="font-size:12px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#8390A4; text-align:left">
						Provide your email address to subscribe. For e.g abc@xyz.com
					</label>
					</div>
				</div>
				</div>
				<div style="padding: 8px 0;">
				<div class="sib-form-block" style="text-align: left">
					<button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:var(--navy); background-color:transparent; border-radius:8px; border-width:1.5px; border-style:solid; border-color:rgba(33,49,128,0.3); width:100%; justify-content:center; padding:0.9rem;" form="sib-form" type="submit">
					<svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
						<path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z"></path>
					</svg>
					SUBSCRIBE
					</button>
				</div>
				</div>
				<input type="text" name="email_address_check" value="" class="input--hidden" aria-hidden="true">
				<input type="hidden" name="locale" value="en">
			</form>
			</div>
		</div>
		</div>
		<?php // echo $pcz_embed; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- admin-entered embed code, sanitized on save. ?>
	</div>
</section>
