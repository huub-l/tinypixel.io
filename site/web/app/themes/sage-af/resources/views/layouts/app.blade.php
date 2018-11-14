<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body data-sticky-container id="app-data" @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header.app-bar')
    <div class="mdc-top-app-bar--fixed-adjust">
      @include('partials.header.page-header')
      <main class="wordpress-main">
        @yield('content')
      </main>
      @if(!(is_page('become-a-member') || is_page('donate')))
        @include('partials.action-network/membership-modal')
      @endif
      @if(!(is_page('donate')))
        @include('partials.action-network/donate-modal')
      @endif
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
</html>