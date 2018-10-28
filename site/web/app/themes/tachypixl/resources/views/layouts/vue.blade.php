<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  <div id="app">
    <full-page ref="fullpage" :options="options" id="fullpage">
      <div class="section min-vh-100">
        <div class="w-50 center v-mid min-vh-100 pt4">
          @svg('logo-horizontal')
        </div>
        <div class="section">
          Second section ...
        </div>
    </full-page>
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </div>
</body>

</html>