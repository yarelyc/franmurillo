{{--
  Template Name: Home Page
--}}

@extends('layouts.home')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-page-home')
  @endwhile
@endsection
