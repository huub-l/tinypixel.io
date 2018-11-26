@extends('layouts.app')

@section('header')
  @include('partials.header')
@endsection

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection

@section('footer')
  @include('partials.footer')
@endsection