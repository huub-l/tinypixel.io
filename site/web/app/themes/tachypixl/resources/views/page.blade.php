@extends('layouts.app')

@section('top')
<div class="mw8 pa4 center">
  <div class="w-20-ns black">
    @svg('logo-horizontal')
  </div>
  <h4 class="db pv3 code f5 fw1 lh-title mt0 ttu tracked">Translating Powerful Ideas Into Mainstream Discourse</h4>
</div>
@endsection

@section ( 'content' )
  @while ( have_posts () ) @php the_post () @endphp
    @include ( 'blocks.left-title-top-border' )
  @endwhile
@endsection

