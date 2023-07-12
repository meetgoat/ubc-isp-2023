import slick from 'slick-carousel';

/**
 * Initializes the accordions by attaching event listeners to the headers.
 */
export function initializePostSliders() {
	jQuery('.isp-post-slider .wp-block-post-template').slick({ fade: true });
}