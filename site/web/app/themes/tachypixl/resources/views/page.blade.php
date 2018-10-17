@extends('layouts.app')

@section ( 'content' )
  @while ( have_posts () ) @php the_post () @endphp
    @include ( 'blocks.left-title-top-border' )
  @endwhile
@endsection

@section ( 'social-footer' )
  @include ( 'blocks.social-footer' )
@endsection

