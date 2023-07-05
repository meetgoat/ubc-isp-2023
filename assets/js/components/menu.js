export function initializeSubMenu() {
	// Select all elements with class 'isp-accordion--header'
	jQuery("#ubc-isp-nav__menu").on("click", ".sub-menu__toggle", function (e) {
		e.preventDefault();
		e.stopPropagation();

		jQuery( this ).closest('.menu-item').toggleClass('menu-item--open').children('.sub-menu').slideToggle();

	});
}
