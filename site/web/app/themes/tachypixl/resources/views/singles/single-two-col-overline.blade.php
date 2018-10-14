<article class="cf ph5-ns pa4 f1 measure center">
  <header class="fn fl-ns w-50-l w-100-m pr5-ns pb5-m">
    <h1 class="f2 lh-title fw9 mb3 mt0 pt3 bt bw2 code">
      {{ the_title() }}
    </h1>
    <h2 class="f3 fw2 mid-gray lh-title sans-serif">
     {{ the_excerpt() }}
    </h2>
    <time class="f6 ttu tracked gray code fw1">{{ the_date() }}</time>
  </header>
  <div class="pxl-content fn fl-ns pl0-m w-50-l w-100-m">
    {{ the_content() }}
  </div>
</article>
