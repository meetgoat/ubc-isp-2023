/**
 * Initializes accordion functionality for elements with the class 'isp-accordion--header'.
 *
 * Clicking on a header toggles the 'isp-accordion--active' class on the clicked element.
 *
 * @summary Initializes accordions for the specified elements.
 *
 * @since 1.0.0
 *
 * @module accordions
 *
 * @example
 *
 *     // Initialize accordions
 *     initializeAccordions();
 */

/**
 * Initializes the accordions by attaching event listeners to the headers.
 */
export function initializeAccordions() {
	// Select all elements with class 'isp-accordion--header'
	const headers = document.querySelectorAll( '.isp-accordion--header' );
	if ( headers.length === 0 ) {
		return null;
	}
	// Attach click event listener to each header element
	headers.forEach( function( header ) {
		header.addEventListener( 'click', toggleAccordion );
	} );
}

// Function to toggle the 'isp-accordion--active' class
function toggleAccordion() {
	this.classList.toggle( 'isp-accordion--active' );
	jQuery( this.nextElementSibling ).slideToggle();
}

function closeSiblings( node ) {
	// Get the parent element with class .isp-accordion
	const parent = node.closest( '.isp-accordion' );
	// Get all elements with class .isp-accordion--header
	const headers = parent.querySelectorAll('.isp-accordion--header');
	// If there are no headers, return null
	if ( headers.length === 0 ) {
		return null;
	}
	// Remove the 'isp-accordion--active' class from all headers
	headers.forEach( function( header ) {
		header.classList.remove( 'isp-accordion--active' );
		jQuery( header.nextElementSibling ).slideUp();
	} );
}
