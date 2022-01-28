<footer class="content-info b-fm-black py-3 py-md-4">

  <div class="w-85 border-w">
    <div class="w-85 py-3 py-md-4">

      <div class="row">
        <div class="col-md-6">
          <img class="footer-logo" src="http://franmurilloco.local/wp-content/uploads/2021/12/Franmurillo-Logo-White.png" alt="">
        </div>
        <div class="col-md-6">
          <nav class="footer-menu">
            @if (has_nav_menu('footer_navigation'))
              {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
        </div>
      </div>

    </div>
  </div>
  </br>

</footer>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{!! get_template_directory_uri()!!}/js/modernizr.custom.js"></script>
<script type="text/javascript" src="{!! get_template_directory_uri()!!}/js/classie.js"></script>
<script type="text/javascript" src="{!! get_template_directory_uri()!!}/js/overlay.js"></script>

<script>
  AOS.init();
</script>
