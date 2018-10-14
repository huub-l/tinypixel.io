@extends('layouts.app')

@section('content')
  <header class="pb2-ns pt0 mt0 pb0-s pl5-ns pr5-ns w-40-l">
    @include('partials.page-header')
  </header>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <div class="cf">
    @while (have_posts()) @php the_post() @endphp
      @include ( 'singles.gallery' )
    @endwhile
  </div>
  {!! get_the_posts_navigation() !!}
@endsection