export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    $('.multiple-items').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
    });
  },
};
