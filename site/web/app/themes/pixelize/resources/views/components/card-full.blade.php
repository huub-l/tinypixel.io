{{--
  @var $image
  @var $title
  @var $link_url
  @var $link_copy
  @var $button
  @var $reveal_title
  @var $reveal_body
--}}
<div class="card z-depth-4">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="@asset($image)">
  </div>
  <div class="card-content">
    <p class="card-title activator grey-text text-darken-4 sans-serif"><a href="#" script="onClick(preventDefault());" class="grey-text text-darken-2 activator">{!! $title !!}</a><span class="btn-floating waves-effect waves-light orange darken-3 right"><i class="material-icons v-mid">more_vert</i></span></p>
    <p class="card-title grey-text text-darken-2 activator study-name"><a href="#" script="onClick(preventDefault());" class="grey-text text-darken-2 activator">{!! $link_copy !!}</a></p>
  </div>
  <div class="card-reveal">
    <span>@foreach($reveal_icons as $icon) <i class='tech fa fab fa-{!! $icon !!}'></i> @endforeach</span>
    <div data-simplebar>{!! $reveal_body !!}</div>
  </div>
</div>