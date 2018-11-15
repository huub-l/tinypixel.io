@extends('layouts.project')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <article @php post_class() @endphp>
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell--span-10">
            <h5 class="type mdc-typography--headline5">{{ $project->type }}</h5>
            <h1 class="mdc-typography--headline3">{{ $project->name }}</h1>
            {{ the_content() }}
            <p class="mdc-typography--body1">
              <a href="{!! $project->repository !!}" class="mdc-button mdc-button--raised ripple"><span class="mdc-ripple-surface--primary"></span>Github</a>
            </p>
          </div>
        </div>
      </div>
    </article>  
  @endwhile
@endsection
