<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo waves-effect waves-purple">@svg('logo_horizontal_black')</a>
      <ul id="nav-mobile" class="right">
        <li class="hide-on-med-and-down"><a href="{!! esc_url( get_theme_mod( 'facebook_url' )) !!}" target="_blank"><i class="fab fa-1x fa-facebook"></i></a></li>
        <li class="hide-on-med-and-down"><a href="{!! esc_url( get_theme_mod( 'twitter_url' )) !!}" target="_blank"><i class="fab fa-1x fa-twitter"></i></a></li>
        <li class="hide-on-med-and-down"><a href="{!! esc_url( get_theme_mod( 'github_url' )) !!}" target="_blank"><i class="fab fa-1x fa-github"></i></a></li>
        <li><a href="#" data-target="side" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a></li>
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="side">
    <li>
      <div class="user-view">
        <div class="background">
        </div>
        <a href="#user">Tiny Pixel Collective</a>
        <a href="#name"><span class="white-text name">developers@tinypixel.io</span></a>
        <a href="#email"><span class="white-text email">360 &middot; 876 &middot; CODE</span></a>
      </div>
    </li>
    {{ App::primaryNav() }}
  </ul>
</div>