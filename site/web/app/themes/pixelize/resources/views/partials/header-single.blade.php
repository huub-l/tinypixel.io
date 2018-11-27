<div class="header type-single">
  <span class="category">> @foreach(get_the_category() as $category) {!! $category->name !!} @endforeach</span>
  <h1>{!! App::title() !!}</h1>
  @include('partials.entry-meta')
</div>
