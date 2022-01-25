@extends('layouts.secondary')

@section('content')

  <section class="py-2 py-md-5">

    <div class="container-md py-1 py-md-2">

      <div class="w-95">
        <h1 class="my-4 border-g c-fm-green">Work</h1>

        <div class="row">
          @foreach( $work as $single_work)

            <div class="col-6 col-lg-3 py-2">

              <a href="{{ $single_work->permalink }}">
                <div>

                  <div class="img-zoom">
                    <img src="{{ $single_work->img->thumb }}" alt="{{$single_work->img->alt}}"
                         title="{{ $single_work->img->title }}">
                  </div>

                  <p class="f-plex-mono py-2"> {{ $single_work->name }}</p>
                </div>
              </a>

            </div>


          @endforeach
          <br>
        </div>

      </div>

      <br>


    </div>
  </section>

@endsection
