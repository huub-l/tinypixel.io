<article @php post_class() @endphp>
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-10">
        <h1 class="mdc-typography--headline2">{{ $project->title }}</h1>
        {{ $project->description }}
        <p class="mdc-typography--body1"><a href="{!! $project->repository !!}">Github</a></p>
      </div>
    </div>
  </div>
</article>