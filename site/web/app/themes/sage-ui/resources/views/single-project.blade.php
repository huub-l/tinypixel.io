@extends('layouts.project')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <h1>{{ the_title() }}</h1>
    <h2>{{ strip_tags(get_the_excerpt()) }}</h2>
    {{ the_content() }}
    <a href="{!! $project->repository !!}" class="mdc-button mdc-button--raised ripple"><span class="mdc-ripple-surface--primary"></span>Github</a>
  @endwhile
@endsection
