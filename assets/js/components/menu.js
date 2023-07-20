/* global jQuery */
export function initializeSubMenu() {
	jQuery( '#ubc-isp-nav__menu' ).on(
		'click',
		'.sub-menu__toggle',
		function( e ) {
			e.preventDefault();
			e.stopPropagation();
			jQuery( this )
				.closest( '.menu-item' )
				.toggleClass( 'menu-item--open' )
				.children( '.sub-menu' )
				.slideToggle();
		}
	);
}
