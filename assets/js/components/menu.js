export function initializeSubMenu() {
	document.querySelector( '#ubc-isp-nav__menu .sub-menu__toggle' ).addEventListener( 'click', function( e ) {
		e.preventDefault();
		e.stopPropagation();
		const menuItem = e.target.closest( '.menu-item' );
		menuItem.classList.toggle( 'menu-item--open' );
		const subMenu = menuItem.querySelector( '.sub-menu' );
		subMenu.style.display = 'none' ? 'block' : 'none';
	} );
}
