<header class="page-header backsplash" style="background-image: url({!! get_the_post_thumbnail_url(get_the_id(),'full') !!});">
  <div class="backsplash-screen">
    <div class="logo-overlay">
      @svg('logo-circle')
    </div>
    <h1>{{ get_the_title() }}</h1>
    @if(get_the_excerpt())
      <h2>{{ get_the_excerpt() }}</h2>
    @endif
    </h1>
  </div>
</header>