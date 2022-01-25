<header class="sec-banner banner py-3 py-md-4">
  <div class="container">


      <div class="row row-eq-height">
        <div class="col-md-3 dis-flex">

          <div class="mxy-auto">

            <a class="fran-logo" href="{{ home_url('/') }}"><img src="http://franmurilloco.local/wp-content/uploads/2022/01/Franmurillo-logo-green.png"></a>

          </div>

        </div>
        <div class="col-md-9 dis-flex">

          <div class="menu-btn">
            <a class="btn-open" href="javascript:void(0)"></a>
          </div>

          <div class="overlay">
            <div class="menu">
              <nav class="nav-primary">
                @if (has_nav_menu('primary_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                @endif
              </nav>
            </div>

          </div>

        </div>
      </div>




  </div>
</header>
