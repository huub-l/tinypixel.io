@extends('layouts.app')

@section('navigation')
  @include('components.nav')
@endsection

@section('header')
  @include('partials.header-page')
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-page')
  @endwhile
@endsection

@section('ancillary')
  @include('components.floating-action-button')
@endsection

@section('footer')
  @include('partials.footer')
@endsection