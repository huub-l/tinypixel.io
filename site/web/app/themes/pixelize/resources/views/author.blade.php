@extends('layouts.app')

@section('navigation')
  @include('components.nav')
@endsection

@section('open-container')
  <div class="container">
    <div class="row">
@endsection

@section('header')
  @php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval(get_the_author_meta('ID'))) @endphp
  @include('partials.header-author', array('author' => $curauth))
@endsection

@section('content')
  <div class="col s10 m9">
    @if(have_posts())
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content')
      @endwhile
    @endif
  </div>
@endsection

@section('sidebar')
  <div class="side-right col s2 m3">@include('partials.sidebar')</div>
@endsection

@section('close-container')
    </div>
  </div>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
