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
$('.guest-slider').slick({
    dots: true, // Usually looks better without dots when using stacked arrows
    arrows: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    autoplay: true,
    // Custom buttons with FontAwesome
  
});


function openSlider(index) {
    // Select the carousel element
    var myCarouselEl = document.querySelector('#hotelCarousel');
    var carousel = new bootstrap.Carousel(myCarouselEl);
    
    // Jump to the specific image index clicked
    carousel.to(index);
    
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('galleryModal'));
    myModal.show();
}