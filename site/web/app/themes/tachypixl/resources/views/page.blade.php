@extends('layouts.app')

@section ( 'content' )
  @while ( have_posts () ) @php the_post () @endphp
    @include ( 'blocks.left-title-top-border', array ( 
      'title'   => get_the_title () ,
      'excerpt' => get_the_author (),
      'content' => apply_filters ( 'the_content', get_the_content () ),
      'date' => get_the_date (),
    ))
  @endwhile
@endsection

@section ( 'social-footer' )
  @include ( 'blocks.social-footer' )
@endsection

