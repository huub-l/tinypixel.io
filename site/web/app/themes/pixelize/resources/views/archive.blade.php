@extends('layouts.app')

@section('navigation')
  @include('components.nav')
@endsection

@section('header')
  @include('partials.header-archive')
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col s10 m9">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content')
      @endwhile</div>
    <div class="side-right col s2 m3">
      @svg('logo-circle')
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
