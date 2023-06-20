

jQuery('.isp-accordion--header').on('click', function () {
    jQuery(this).toggleClass('isp-accordion--active');
    jQuery(this).siblings('.isp-accordion--body').slideToggle();
});