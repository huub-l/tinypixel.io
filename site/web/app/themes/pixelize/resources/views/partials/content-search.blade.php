<article @php post_class() @endphp>
  <header>
    <h2><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  </header>
  <div class="entry-summary">
    {!! get_the_excerpt() }}
  </div>
</article>
