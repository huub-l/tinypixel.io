@extends('layouts.app')

@section('header')
  @include('partials.header')
@endsection

@section('content')
  @if(!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile
  {!! get_the_posts_navigation() !!}
@endsection

@section('footer')
  @include('partials.footer')
@endsection