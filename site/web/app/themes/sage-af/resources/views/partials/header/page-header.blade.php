<header class="page-header backsplash" style="background-image: url({!! get_the_post_thumbnail_url(get_the_id(),'full') !!});">
  <div class="backsplash-screen">
    <h1>{{ the_title() }}
      @if(get_the_excerpt())<span class="sub">{{ the_excerpt() }}</span>@endif
    </h1>
  </div>
</header>