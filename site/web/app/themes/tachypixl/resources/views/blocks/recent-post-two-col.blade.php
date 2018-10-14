<article class="cf ph5-ns pa4 f1 measure center">
  <header class="fn fl-ns w-50-l w-100-m pr5-ns pb5-m">
    @include ( 'atoms.h1', array (
      'h1' => $title,
    ))
    @include ( 'atoms.h3', array (
      'h3' => $excerpt,
    ))
    @isset ($date)
      @include ( 'atoms.date', array (
        'date' => $date,
      ))
    @endisset
  </header>
  <div class="pxl-content fn fl-ns pl0-m w-50-l w-100-m">
    {!! $content !!}
  </div>
</article>
