<section class="sec-home b-fm-green">
  <div class="row row-eq-height sec-home-equal">
    <div class="col-md-6 dis-flex py-3 mobile-intro">
      <div class="mobile-intro_copy p-3 p-md-1">

        <div>
          <h1 class="c-fm-white py-3 p-md-4" style="max-width: 450px; min-height: 300px">
            <span class="homeintro"></span>
          </h1>
        </div>
        <div class="w-90 py-3 py-4 hidden-mobile">
          <div class="row pt-2 pt-sm-3 pt-ld-5">
            <div class="col-6">

              <a href="{!! $bold_link->url !!}" class="btn bt--white">{!! $bold_link->title !!}</a>
            </div>
            <div class="col-6">
              <a href="{!! $outline_link->url  !!}" class="btn btn--white-outline">{!! $outline_link->title  !!}</a>
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="col-md-6 mobile-video">
      <div class="hero-vid-container">
        <video id="video-container" autoplay loop muted>
          <source src="{{ $home->video_webm }}" type="video/webm">
          <source src="{{ $home->video_mp4 }}" type="video/mp4">
          Sorry, your browser doesn't support embedded videos.
        </video>



        <div class="video-content w-90 py-2 py-md-4 hidden-desktop">
          <div class="row pt-2 pt-5">
            <div class="col-sm-6 py-2">
              <a href="{!! $bold_link->url !!}" class="btn">{!! $bold_link->title !!}</a>
            </div>
            <div class="col-sm-6 py-2">
              <a href="{!! $outline_link->url !!}" class="btn btn--outline">{!! $outline_link->title !!}</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


</section>
