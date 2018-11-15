<article @php post_class() @endphp>
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-10">
        <header>
          <h6>{{ $project->type }}</h6>
          <h5 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h5>
        </header>
      </div>
    </div>
  </div>
</article>
