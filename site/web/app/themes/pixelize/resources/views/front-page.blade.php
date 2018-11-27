@extends('layouts.app')

@section('navigation')
  @include('components.nav')
@endsection

@if(have_posts())
  @while(have_posts()) @php the_post() @endphp

    @section('content')
      @include('partials.content-front-page')
    @endsection

  @endwhile
@endif

@section('ancillary')
  @include('components.floating-action-button')
@endsection

@section('footer')
@endsection