export default function accordion() {
	$('.isp-accordion--header').on('click', function () {
		$(this).toggleClass('isp-accordion--active');
	});
}