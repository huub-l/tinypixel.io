<aside class="mdc-drawer mdc-drawer--modal">
  <div class="mdc-drawer__header">
    <h3 class="mdc-drawer__title">
      <a href="/">@svg('logo_horizontal_black')</a>
    </h3>
  </div>
  <div class="mdc-drawer__content" dir="ltr">
    <nav class="mdc-list">
      <hr class="mdc-list-divider">
      @shortcode('[mdc-menu location="mdc_drawer_navigation_a" component="mdc_drawer"]')
      @shortcode('[mdc-menu location="mdc_drawer_navigation_b" component="mdc_drawer"]')
      <div class="mdc-drawer__header">
        <p class="mdc-typography--body2">
        <br /><br />
        <span class="ttu">{{ $organization->email }}</span><br />
        <a class="black-80 no-underline" title="Call {{ $organization->name }}" href="tel:+1 {{$organization->phone}}">+1 {{ $organization->phone }}</a><br /><br /></p>
        <a href="{!! $organization->facebook !!}" class="link mr3" title="{{ $organization->name }} on Facebook">
          @svg('facebook')
        </a>
        <a href="{!! $organization->twitter !!}" class="link mr3" title="{{ $organization->name }} on Twitter">
          @svg('twitter')
        </a><br /><br />
        <p class="mdc-typography--body2">© {{ $organization->name }} {{ date('Y') }}</p>
      </div>
    </nav>
  </div>
</aside>
<div class="mdc-drawer-scrim"></div>
<div class="mdc-drawer-app-content">
  <div class="mdc-top-app-bar app-bar" id="app-bar">
    <div class="mdc-top-app-bar__row">
      <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start ripple-surface">
        <a href="#" class="top-menu mdc-button ripple mdc-top-app-bar__navigation-icon"><span class="material-icons">menu</span></a>
        <span class="mdc-top-app-bar__title"><a class="white" href="/">@svg('logo_horizontal_white')</a></span>
      </section>
      <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
        @shortcode('[mdc-menu location="mdc_app_bar_navigation" component="mdc_app_bar"]')
      </section>
    </div>
</div>