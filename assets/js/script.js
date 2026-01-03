$('.hotel-slider').slick({
    dots: false, // Usually looks better without dots when using stacked arrows
    arrows: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    autoplay: true,
    // Custom buttons with FontAwesome
    prevArrow: '<button type="button" class="slick-custom-prev"><i class="fa fa-chevron-up"></i></button>',
    nextArrow: '<button type="button" class="slick-custom-next"><i class="fa fa-chevron-down"></i></button>'
});

