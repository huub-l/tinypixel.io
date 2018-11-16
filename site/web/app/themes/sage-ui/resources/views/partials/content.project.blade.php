<article @php post_class() @endphp>
  <h1 class="mdc-typography--headline2">{{ $project->title }}</h1>
  {{ $project->description }}
  <p class="mdc-typography--body1"><a href="{!! $project->repository !!}">Github</a></p>
</article>