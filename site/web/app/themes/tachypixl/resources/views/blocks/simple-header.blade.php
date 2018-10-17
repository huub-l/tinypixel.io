@if (has_nav_menu('primary_navigation'))
<div class="navigator">
  <div class="mw8 center">
    <div>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    </div>
  </div>
</div>
@endif
<header class="ph0-l pt7 pb0 ph4-l vh-100 header">
  <div class="mw8 pa4 mt6 pt7 pb6 white ml-auto mr-auto">
    <h1 class="white"><a href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}">@svg ( 'logo-horizontal' )</a><br/>
    <span class="code f3 fw1 ttu lh-solid white">Translating Powerful Ideas Into Mainstream Discourse</h1>
  </div>
  <canvas id="drip" width="1000" height="1000"></canvas>
</header>