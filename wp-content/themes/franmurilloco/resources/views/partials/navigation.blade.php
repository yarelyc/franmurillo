<div class="overlay overlay-door">
  <button id="overlay-btn" type="button" class="overlay-close"><i class="fas fa-times"></i></button>
  <nav class="main-navigation">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>

  <nav class="header-footer-navigation">
    <div class="header-line">
      <hr>
    </div>
  @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'header-footer-inner']) !!}
    @endif
  </nav>
</div>
