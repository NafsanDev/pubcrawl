/**
 * Pub Crawl Zurich: fade-ins, hero sound toggle, gallery lightbox, mobile nav.
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {

		/* Fade-up on scroll */
		var fadeEls = document.querySelectorAll( '.fade-up' );
		if ( 'IntersectionObserver' in window ) {
			var observer = new IntersectionObserver( function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						setTimeout( function () { entry.target.classList.add( 'visible' ); }, 80 );
						observer.unobserve( entry.target );
					}
				} );
			}, { threshold: 0.12 } );
			fadeEls.forEach( function ( el ) { observer.observe( el ); } );
		} else {
			fadeEls.forEach( function ( el ) { el.classList.add( 'visible' ); } );
		}
		document.querySelectorAll( '.inc-items-row .inc-item, .reviews-grid .fade-up' ).forEach( function ( el, i ) {
			el.style.transitionDelay = ( i * 80 ) + 'ms';
		} );

		/* Hero sound toggle */
		var soundBtn = document.getElementById( 'sound-btn' );
		if ( soundBtn ) {
			soundBtn.addEventListener( 'click', function () {
				var video = document.querySelector( '.hero-video-bg video' );
				if ( ! video ) { return; }
				video.muted = ! video.muted;
				soundBtn.textContent = video.muted ? '🔇' : '🔊';
			} );
		}

		/* Gallery lightbox */
		var photos   = window.pczGalleryPhotos || [];
		var index    = 0;
		var box      = document.getElementById( 'gLightbox' );
		var boxImg   = document.getElementById( 'gLightboxImg' );
		var counter  = document.getElementById( 'gLightboxCounter' );

		function render() {
			if ( ! boxImg || ! photos.length ) { return; }
			boxImg.src = photos[ index ];
			if ( counter ) { counter.textContent = ( index + 1 ) + ' / ' + photos.length; }
		}
		function open( i ) {
			index = i;
			render();
			if ( box ) { box.classList.add( 'active' ); }
			document.body.style.overflow = 'hidden';
		}
		function close() {
			if ( box ) { box.classList.remove( 'active' ); }
			document.body.style.overflow = '';
		}
		function step( dir ) {
			if ( ! photos.length ) { return; }
			index = ( index + dir + photos.length ) % photos.length;
			render();
		}

		document.querySelectorAll( '.pcz-gallery-item' ).forEach( function ( el ) {
			var i = parseInt( el.getAttribute( 'data-index' ), 10 ) || 0;
			el.addEventListener( 'click', function () { open( i ); } );
			el.addEventListener( 'keydown', function ( e ) {
				if ( e.key === 'Enter' || e.key === ' ' ) { e.preventDefault(); open( i ); }
			} );
		} );

		if ( box ) {
			box.addEventListener( 'click', function ( e ) { if ( e.target === box ) { close(); } } );
		}
		var btnClose = document.getElementById( 'gLightboxClose' );
		var btnPrev  = document.getElementById( 'gLightboxPrev' );
		var btnNext  = document.getElementById( 'gLightboxNext' );
		if ( btnClose ) { btnClose.addEventListener( 'click', close ); }
		if ( btnPrev ) { btnPrev.addEventListener( 'click', function ( e ) { e.stopPropagation(); step( -1 ); } ); }
		if ( btnNext ) { btnNext.addEventListener( 'click', function ( e ) { e.stopPropagation(); step( 1 ); } ); }

		document.addEventListener( 'keydown', function ( e ) {
			if ( ! box || ! box.classList.contains( 'active' ) ) { return; }
			if ( e.key === 'Escape' ) { close(); }
			if ( e.key === 'ArrowLeft' ) { step( -1 ); }
			if ( e.key === 'ArrowRight' ) { step( 1 ); }
		} );

		/* Mobile nav */
		var burger = document.getElementById( 'nav-hamburger-btn' );
		var menu   = document.getElementById( 'mob-menu' );
		if ( burger && menu ) {
			burger.addEventListener( 'click', function () {
				var open = menu.classList.toggle( 'is-open' );
				burger.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
			} );
			menu.addEventListener( 'click', function ( e ) {
				if ( e.target.closest( 'a' ) ) { menu.classList.remove( 'is-open' ); burger.setAttribute( 'aria-expanded', 'false' ); }
			} );
			document.addEventListener( 'click', function ( e ) {
				if ( ! menu.classList.contains( 'is-open' ) || menu.contains( e.target ) || burger.contains( e.target ) ) { return; }
				menu.classList.remove( 'is-open' );
				burger.setAttribute( 'aria-expanded', 'false' );
			} );
		}

		/*  Module: subMenuItems */		
		const parents = document.querySelectorAll('.menu-item-has-children');
		parents.forEach(parent => {
			const toggleBtn = parent.querySelector('button');
			
			toggleBtn.addEventListener('click', function(e) {
				e.preventDefault();
				const parentLi = this.parentElement;
				const isExpanded = parentLi.classList.contains('toggled-on');
				
				// Close other menus at the same level
				parentLi.parentElement.querySelectorAll('.toggled-on').forEach(el => {
					if (el !== parentLi) el.classList.remove('toggled-on');
				});

				// Toggle current menu
				parentLi.classList.toggle('toggled-on');
				this.setAttribute('aria-expanded', !isExpanded);
			});
		});

		// Back to top button visibility
		const backTop = document.getElementById('back-top');
		const footer = document.getElementById('site-footer');
		const navbar     = document.getElementById('navbar');

		function updateBackToTop() {
			if (!backTop || !footer) return;
			const scrollY = window.scrollY;
			const viewportH = window.innerHeight;
			const footerTop = footer.offsetTop;

			navbar.classList.toggle('scrolled', scrollY > 60);

			if (scrollY > viewportH && scrollY + viewportH < footerTop - 100) {
				backTop.classList.add('visible');
			} else {
				backTop.classList.remove('visible');
			}
		}

		window.addEventListener('scroll', updateBackToTop);
		window.addEventListener('resize', updateBackToTop);
		updateBackToTop();

		// Back to top click
		if (backTop) {
			backTop.addEventListener('click', () => {
				window.scrollTo({ top: 0, behavior: 'smooth' });
			});
		}
		
	} );
} )();
