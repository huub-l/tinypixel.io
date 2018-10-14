<div class="fl w-50 w-25-ns bg-black">
  <a href="@php echo $entry['permalink'] @endphp" class="db aspect-ratio aspect-ratio--1x1">
    <div aria-label="{{ $entry['title'] }}" style="background-image:url({!! $entry['thumbnail'] !!});" class="dt bg-center cover aspect-ratio--object hide-child center">
      <span class="dtc center child v-mid w-100 h-100 mw5 pa5 bg-black-40 white code 100 tc">
        <span class="inline center tc">
          {{ $entry['title'] }}
        </span>
      </span>
    </div>
  </a>
</div>