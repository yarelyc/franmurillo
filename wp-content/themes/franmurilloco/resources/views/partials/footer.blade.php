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
