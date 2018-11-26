@extends('layouts.app')

@section('navigation')
  @include('components.nav')
@endsection

@while(have_posts()) @php the_post() @endphp

@section('header')
  @include('partials.header-single')
@endsection

@section('content')
    @include('partials.content-single')
@endsection

@endwhile

@section('ancillary')
  @include('components.floating-action-button')
@endsection

@section('footer')
  @include('partials.footer')
@endsection