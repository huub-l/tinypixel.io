<article @php post_class() @endphp>
  <div class="card">
    @if(get_the_post_thumbnail_url(get_the_id()))
      <div class="card-image">
        <img src="{!! get_the_post_thumbnail_url(get_the_id()) !!}">
        <span class="card-title">{!!  the_title() !!}</span>
      </div>
      <div class="card-content">
        <p>{!!  get_the_excerpt() !!}</p>
      </div>
    @else
      <div class="card-content">
        <span class="card-title bold sans-serif"><a href="{!!  get_the_permalink() !!}">{!!  the_title() !!}</a></span>
        <p class="subtitle">{!!  get_the_excerpt() !!}</p>
      </div>
    @endif
    <div class="card-action">
      <a class="btn btn-flat btn-grey waves-effect waves-light href="{!! get_the_permalink(get_the_id()) !!}">Read more</a>
    </div>
  </div>
</article>