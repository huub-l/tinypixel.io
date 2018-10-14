<article class="pb5">
  <header class="bg-gold eczar">
    <div class="mw9 center pa4 pt5-ns ph6-l code f5 ttu">
      <div class="f6 tracked ttu code">
        <time class="mb4 dib ttu tracked code">@php the_date( 'Y' ) @endphp</time>
        &middot;&nbsp;by @php the_author() @endphp
      </div>
      <h3 class="code f2 f-headline-l measure-narrow lh-solid mv0 tracked-tight">
        <span class="bg-black white ph1">
          &ldquo;@php the_title() @endphp&rdquo;
        </span>
      </h3>
      <h4 class="f4 fw1 lh-tight pt3 sans-serif">@php the_excerpt () @endphp</h4>
    </div>
  </header>
  <div class="pxl-content pa4 ph6-l mw9 center fw1">
      @php the_content() @endphp
  </div>
</article>