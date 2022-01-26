<article @php post_class() @endphp>


  <div class="entry-content">


    <section class="sec-work-single">
      <div class="container-md py-2 py-md-5">
        <div class="w-95">

          <h1 class="border-g c-fm-green pt-1 pt-md-4">{{ get_the_title() }}</h1>
          <h6 class="f-plex-mono c-light-grey">Brand Development</h6>
          <br>

          <div class="row row-eq-height flex-col-reverse py-2">
            <div class="col-md-6 dis-flex">

              <div class="mxy-auto">

                <div class="img-zoom">
                  <img src="@php echo $work->img->url; @endphp" alt="@php echo $work->img->alt @endphp"
                       title="@php echo$work->img->title  @endphp">
                </div>

                <br>
              </div>


            </div>
            <div class="col-md-6 dis-flex py-2">
              <div class="my-auto">
                <div class="m-auto m-md-0">


                  <div class="work-content pr-3 py-3 py-md-5">
                    <p class="f-plex-mono c-fm-green">My role:</p>

                    <div class="work-role">
                      @php echo $work->role; @endphp
                    </div>

                  </div>

                </div>
              </div>
            </div>
            </br>
          </div>
    </section>

    <section class="sec-work-gallery">

      @if($work->gallery)
        <div class="multiple-items">
          @foreach($work->gallery as $image)
            <div class="p-2">
             @php echo wp_get_attachment_image($image, 'feature-large'); @endphp
            </div>
          @endforeach
        </div>
        <div class="w-85">
          <div class="float-right">
            <p class="slide-counter f-plex-mono c-fm-light-grey"></p>
          </div>
        </div>

      @endif


    </section>

    <section class="sec-work-brief">
      <div class="container-md">
        <div class="w-90 py-2 py-md-4">
          <div class="row">
            <div class="col-md-6">
              <div class="w-90 mx-0 work-content pr-3 py-3 py-md-5">
                <p class="f-plex-mono c-fm-green">The brief:</p>


                <div class="work-brief">
                  @php echo $work->brief; @endphp
                </div>
              </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec-work-solution pb-2 pb-5">
      <div class="container-md">
        <div class="w-90 py-2 py-md-4">
          <div class="row row-eq-height">
            <div class="col-md-6 dis-flex">
              <div>
                <div class="img-zoom">
                <img src="@php echo $work->solution_image->url; @endphp" alt="@php echo $work->solution_image->alt @endphp"
                     title="@php echo$work->solution_image->title  @endphp">

                </div>
              </div>
            </div>
            <div class="col-md-6 dis-flex">
              <div class="mxy-auto">
                <div class="w-90 mx-0 work-content pr-3 py-3 py-md-5">
                  <p class="f-plex-mono c-fm-green">The solution:</p>
                  <div class="work-solution">
                    @php echo $work->solution; @endphp
                  </div>

                  </br>
                  <a href="/lets-talk/" class="btn">Let's Work</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </br>
    </section>

  </div>


  @php comments_template('/partials/comments.blade.php') @endphp
</article>
