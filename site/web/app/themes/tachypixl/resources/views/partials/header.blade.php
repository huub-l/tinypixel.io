<header class="pb2-ns pb0-s mb0-s pl5-ns pr5-ns pt5 w-40-l w-70-m w-70-s mw40">
  <a class="code" href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}">@svg ( 'logo-horizontal' )</a>
  <nav class="sans-serif">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</header>
