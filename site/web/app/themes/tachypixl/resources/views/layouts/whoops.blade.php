<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    @php do_action('get_header') @endphp

    <div role="document">
      <main class="main">
        @include ( 'blocks.fixed-circle' )
        @include ( 'blocks.four-oh-four' )
        @php do_action('get_footer') @endphp
        @php wp_footer() @endphp
      </main>
    </div>

  </body>
</html>
