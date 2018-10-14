@extends('layouts.app')

@section ( 'partners' )
  <div class="cf">
  @foreach ( App::partners() as $partner ) 
    @include ( 'singles.partner-gallery', array ( 'entry' => $partner ) )
  @endforeach
  </div>
@endsection