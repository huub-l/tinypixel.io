<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body data-sticky-container @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.app-bar', array( 'organization' => $organization))
    
    <div class="mdc-top-app-bar--fixed-adjust">

      @if(!is_front_page())
        @include('partials.header')
        <main class="wordpress-main">
          <div class="wordpress-main__content">
            @yield('content')
          </div>
        </main>

      @else
        @yield('content')
      @endif
      
      @php do_action('get_footer') @endphp
      @if(!is_front_page()) @include('partials.footer') @endif
      @php wp_footer() @endphp
    </div>
  </body>
</html>