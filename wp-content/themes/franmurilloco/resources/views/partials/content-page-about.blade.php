<section class="sec-about-me" data-aos="fade-up" data-aos-duration="1500">
  <div class="container-md py-2 py-md-5">
    <div class="row row-eq-height flex-col-reverse py-2">
      <div class="col-md-6 py-2">


        <div class="w-80 hidden-desktop">
          <h1 class="border-g c-fm-green pt-2 pt-md-4">About me</h1>
        </div>

        <div class="px-3 px-md-5 pt-2">
          {!! $about->image !!}
          <h6 class="f-plex-mono pt-3">
            Francisco Murillo Jr.
          </h6>
        </div>
      </div>
      <div class="col-md-6 py-2">
        <div class="w-80 my-auto m-md-0">

          <div class="about-intro">
            <div class="hidden-mobile">
              <h1 class="border-g c-fm-green pt-2 pt-md-4">About me</h1>
              </br>
            </div>


            <div class="py-2">
              {!! $about->about !!}
            </div>


            <p>Enjoys:</br>
              <span class="f-plex-mono">
              {!! $about->enjoys !!}
            </span>
            </p>

          </div>



          <div class=" py-3 py-4">
            <div class="row py-1 py-3">
              <div class="col-sm-6 py-2">
                @if($about->work_link)
                  <a href="@php echo $about->work_link['url'];  @endphp" class="btn" alt="@php echo $about->work_link['title'];  @endphp" target="@php echo $about->work_link['target'];  @endphp">@php echo $about->work_link['title'];  @endphp</a>
                @endif
              </div>
              <div class="col-sm-6 py-2">
                @if($about->lets_talk_link)
                  <a href="@php echo $about->lets_talk_link['url'];  @endphp" class="btn  btn--outline" target="@php echo $about->lets_talk_link['target'];  @endphp" alt="@php echo $about->lets_talk_link['title'];  @endphp">@php echo $about->lets_talk_link['title'];  @endphp</a>
                @endif
              </div>
            </div>
            </br>
            @if($about->download)
              <a target="_blank" href="@php echo $about->download['url'];  @endphp"  class="link" alt="@php echo $about->download['title'];  @endphp">@php echo $about->download['title'];  @endphp</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    </br>
  </div>
</section>
