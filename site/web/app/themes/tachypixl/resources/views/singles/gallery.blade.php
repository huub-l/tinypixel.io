<div class="fl w-50 w-25-ns bg-black">
  <a href="{{ the_permalink() }}" class="db aspect-ratio aspect-ratio--1x1">
    <div aria-label="{{ the_title() }}" style="background-image:url(@php echo get_the_post_thumbnail_url() @endphp);" class="dt bg-center cover aspect-ratio--object hide-child center">
      <span class="dtc center child v-mid w-100 h-100 mw5 pa5 bg-black-40 white code 100 tc">
        <span class="inline center tc">
          {{ the_title() }}
        </span>
      </span>
    </div>
  </a>
</div>