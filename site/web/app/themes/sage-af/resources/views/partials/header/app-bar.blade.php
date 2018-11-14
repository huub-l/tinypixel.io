<aside class="mdc-drawer mdc-drawer--modal" dir="rtl">
  <div class="mdc-drawer__header" dir="ltr">
    <h3 class="mdc-drawer__title">About Face</h3>
    <h6 class="mdc-drawer__subtitle">Veterans Against The War</h6>
  </div>
  <div class="mdc-drawer__content" dir="ltr">
    <nav class="mdc-list">
      <h6 class="mdc-list-group__subheader">Mobilize</h6>
      {!! App::drawer_menu('take-action_navigation') !!}
      <hr class="mdc-list-divider">
      <h6 class="mdc-list-group__subheader">Our Organization</h6>
      {!! App::drawer_menu('who-we-are_navigation') !!}
      <hr class="mdc-list-divider">
      <div class="db">About Face: Veterans Against The War</div>
      <div class="db">P.O. Box 3565<br />New York City, N.Y. 10008<br /><br /><a class="black-80 no-underline" title="Call NYC" href="tel:+16466230989">
      +1 929-430-4988</a><br /><br /><a href="https://www.facebook.com/VetsAboutFace/" class="link mr3" title="About Face on Facebook">
              <svg width='32' data-icon="facebook" viewBox="0 0 32 32" fill="black">
                <title>Facebook</title>
                <path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z"
                ></path>
              </svg>
            </a>
            <a href="https://twitter.com/VetsAboutFace" class="link mr3" title="About Face on Twitter">
              <svg width='32' data-icon="twitter" viewBox="0 0 32 32" fill="black">
                <title>Twitter</title>
                <path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"
                ></path>
              </svg>
            </a><br /><br />© {{ the_date('Y') }}</div>
    </nav>
  </div>
</aside>
<div class="mdc-drawer-scrim"></div>
<div class="mdc-drawer-app-content">
  <div class="mdc-top-app-bar app-bar" id="app-bar">
    <div class="mdc-top-app-bar__row">
      <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-star">
        <span class="mdc-top-app-bar__title"><a href="/">AF</a></span>
      </section>
      <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
        {!! App::menu('primary_navigation') !!}
        <a href="#" class="top-menu material-icons mdc-top-app-bar__navigation-icon ripple">menu</a>
      </section>
    </div>
</div>