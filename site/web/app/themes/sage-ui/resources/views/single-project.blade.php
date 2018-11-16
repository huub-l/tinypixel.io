@extends('layouts.project')

@section('content')
  @while (have_posts()) @php the_post() @endphp
      <h5 class="type mdc-typography--headline5">{{ $project->type }}</h5>
      <h1 class="mdc-typography--headline3">{{ $project->name }}</h1>
      {{ the_content() }}
      <a href="{!! $project->repository !!}" class="mdc-button mdc-button--raised ripple"><span class="mdc-ripple-surface--primary"></span>Github</a>
  @endwhile
@endsection
