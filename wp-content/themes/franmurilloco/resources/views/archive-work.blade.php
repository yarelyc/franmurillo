@extends('layouts.secondary')

@section('content')

  <section class="py-5">

    </br>
    <div class="container-md py-1 py-md-2">

      <div class="w-95">
        <h1 class="my-4 border-g c-fm-green">Work</h1>

        <div class="row">
          @foreach( $work as $single_work)

            <div class="col-6 col-lg-3 py-2">

              <a href="{{ $single_work->permalink }}">
                <div>

                  <img src="{{ $single_work->img->thumb }}" alt="{{$single_work->img->alt}}"
                       title="{{ $single_work->img->title }}">

                  <p class="f-plex-mono"> {{ $single_work->name }}</p>
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
