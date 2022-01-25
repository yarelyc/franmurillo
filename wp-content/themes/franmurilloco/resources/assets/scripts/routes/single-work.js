export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    $('.multiple-items').slick({
      slidesToShow: 1,
      infinite: true,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      centerMode: true,
      arrows: false,
      centerPadding: '100px',
    });
  },
};
