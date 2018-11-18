@extends('layouts.project')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    {{ the_content() }}
    <a href="{!! $project->repository !!}" class="mdc-button mdc-button--raised ripple"><span class="mdc-ripple-surface--primary"></span>Github</a>
  @endwhile
@endsection
