<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body data-sticky-container id="app-data" @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header.app-bar')
    <div class="mdc-top-app-bar--fixed-adjust">
      @include('partials.header.front-page-header')     
      <main class="main">
        @yield('content')
      </main>
      @include('partials.action-network/membership-modal')
      @include('partials.action-network/donate-modal')
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
</html>