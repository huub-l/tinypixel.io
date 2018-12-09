<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @yield('navigation')
    <main id="app">

      @yield('header')
      @yield('open-container')
      @yield('content')
      @yield('sidebar')
      @yield('recent')
      @yield('close-container')

    </main>
    @php do_action('get_footer') @endphp
    @yield('footer')
    @php wp_footer() @endphp
  </body>
</html>