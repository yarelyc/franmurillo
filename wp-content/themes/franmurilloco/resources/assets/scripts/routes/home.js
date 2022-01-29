// Can also be included with a regular script tag
import Typed from 'typed.js';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    var optionsLoader = {
      strings: ['Hello', 'Hola', 'Hello', 'Hola'],
      typeSpeed: 120,
      backDelay: 1500,
      backSpeed: 100,
      loop: true,
    };

    var typedLoader= new Typed('.loading-copy', optionsLoader);
    typedLoader.start();

    $(window).on('load', function () {

      setTimeout(() => {
        $('#loading').hide();
        startHomeIntro();
        typedLoader.destroy();
        },
        5000);

    });

    function startHomeIntro() {
      var options = {
        strings: ['Hi, I&#39;m Fran, Let&#39;s work together.'],
        typeSpeed: 130,
        backSpeed: 100,
        backDelay: 2000,
        loop: true,
      };

      var typed = new Typed('.homeintro', options);
      typed.start();
    }

    document.getElementById('video-container').play();


  },
};
