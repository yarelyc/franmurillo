{{--
  Template Name: Let's Work Page
--}}

@extends('layouts.secondary')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-page-letswork')
  @endwhile
@endsection
