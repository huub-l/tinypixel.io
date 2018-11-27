@extends('layouts.app')

@section('navigation')
  @include('components.nav')
@endsection

@if(have_posts())
@while(have_posts()) @php the_post() @endphp

  @section('header')
    @include('partials.header-single')
  @endsection

  @section('content')
      @include('partials.content-single')
  @endsection

@endwhile
@endif

@section('ancillary')
  @include('components.floating-action-button')
@endsection

@section('footer')
  @include('partials.footer')
@endsection