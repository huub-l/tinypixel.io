<article class="pv2 fl w-100 w-50-l pl0 pl0-l">
  <div class="w-80 mr-auto aspect-ratio aspect-ratio--16x9">
      <img style="background-image:url(@php echo get_the_post_thumbnail_url() @endphp);" 
      class="db bg-center cover aspect-ratio--object" />
    </div>
  <header>
    <h2 class="entry-title f4 f3-ns fw4 mb3"><a href="{{ get_permalink() }}" class="sans-serif ttu black hover-bg-black hover-white pa2 pl1 no-underline bg-animate">{{ get_the_title() }}</a></h2>
  </header>
  <div class="entry-summary f5 fw3 measure lh-copy mt0 code">
    @php echo strip_tags(get_the_excerpt()) @endphp
  </div>
</article>
