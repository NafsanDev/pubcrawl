/**
 * Contact form: opens the visitor's mail client with a prefilled message
 * (same behaviour as the original static template; no server-side handling).
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var form = document.getElementById( 'contact-message-form' );
		if ( ! form ) { return; }

		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			var to      = form.getAttribute( 'data-mailto' ) || '';
			var email   = document.getElementById( 'contact-email' ).value;
			var message = document.getElementById( 'contact-message' ).value;
			if ( ! to ) { return; }

			var subject = encodeURIComponent( 'Message from ' + email + ' — ' + document.title );
			var body    = encodeURIComponent( message + '\n\n— Sent from the website contact form\nReply to: ' + email );
			window.location.href = 'mailto:' + to + '?subject=' + subject + '&body=' + body;
		} );
	} );
} )();
