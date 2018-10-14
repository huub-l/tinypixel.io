<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    @php do_action('get_header') @endphp
    @include ( 'blocks.fixed-circle' )
    <div role="document">
      <main class="main">
        @if ( is_front_page() )
          @include ( 'blocks.simple-header' )
          @include ( 'blocks.simple-statement' )
          @include ( 'blocks.interesting' )
        @else
          @include('blocks.two-column')
          @yield ( 'top' )
          @yield ( 'content' )
        @endif
      </main>
      @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      @endif
    </div>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
