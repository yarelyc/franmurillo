export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {

    var $status = $('.slide-counter');
    var $slickElement = $('.multiple-items');

    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide){
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0)+1;
      $status.text(i + '/' + slick.slideCount);
    });

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
