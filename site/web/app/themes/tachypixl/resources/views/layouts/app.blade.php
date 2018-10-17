<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    @php do_action('get_header') @endphp
    <div role="document">
      <main class="main">
        @if ( is_front_page() )
          @include ( 'blocks.fixed-circle' )
          @include ( 'blocks.simple-header' )
          @include ( 'blocks.simple-statement' )
          @include ( 'blocks.interesting' )
        @else
          @yield ( 'top' )
          @yield ( 'content' )
        @endif
      </main>
    </div>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
