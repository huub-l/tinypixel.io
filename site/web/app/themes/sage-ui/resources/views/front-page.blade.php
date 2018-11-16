@extends('layouts.app')

@section('content')
<div id="fullpage">
	<div id="sectionOne" class="section section-splash">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-10">
          <div class="horizontal-logo">@svg('logo_horizontal_white')</div>
          <h2 class="mdc-typography--headline5 mdc-theme--surface">Translating Powerful Ideas Into Mainstream Discourse</h2>
          <a href="#our-friends"><button class="mdc-button mdc-button--light mdc-button--raised ripple">Explore Our Work</button></a>
        </div>
      </div>
    </div>
  </div>
	<div id="sectionTwo" class="section section-work">
    <div class="slide">
      <div class="mdc-layout-grid pa6-l pt5-l">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell--span-3"></div>
          <div class="mdc-layout-grid__cell--span-6">
            <div class="mdc-card">
              <div class="mdc-card__media mdc-card__media--16-9" style="background-image: url(@asset('images/nfm.png'))">
                <a href="#"><div class="mdc-card__media-content ripple mdc-button h-100"><div class="h-100 mdc-ripple-surface db"></div></div></a>
              </div>
              <div class="mdc-card__actions">
                <div class="mdc-card__action-buttons">
                  <a href="https://newfloridamajority.org" class="mdc-button mdc-card__action mdc-button--raised ripple"><span class="mdc-ripple-surface--acent">New Florida Majority</span></a>
                  <a href="https://newfloridamajority.org" class="mdc-button mdc-card__action mdc-card__action--button ripple">Visit</a>
                </div>
              </div>
            </div>
          </div>
          <div class="mdc-layout-grid__cell--span-3"></div>
        </div>
      </div>
    </div>
    <div class="slide">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell--span-2"></div>
          <div class="mdc-layout-grid__cell--span-8">
            <div class="mdc-card">
              <div class="mdc-card__media mdc-card__media--16-9" style="background-image: url(@asset('images/ndn-fbook-header.jpg'))">
                <a href="https://ndncollective.org"><div class="mdc-card__media-content ripple mdc-button h-100"><div class="h-100 mdc-ripple-surface db"></div></div></a>
              </div>
              <div class="mdc-card__actions">
                <div class="mdc-card__action-buttons">
                  <a href="https://ndncollective.org" class="mdc-button mdc-card__action mdc-button--raised ripple"><span class="mdc-ripple-surface--acent">NDN Collective</span></a>
                  <a href="https://ndncollective.org" class="mdc-button mdc-card__action mdc-card__action--button ripple">Visit</a>
                </div>
              </div>
            </div>
          </div>
          <div class="mdc-layout-grid__cell--span-2"></div>
        </div>
      </div>
    </div>
  </div>
	<div id="sectionThree" class="section section-quote">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-12">
          <h1 class="mdc-typography--headline4">“There are plenty of good reasons for fighting, but no good reason ever to hate without reservation, to imagine that God Almighty Himself hates with you, too.”<br /><br /><span class="f3">&mdash; Kurt Vonnegut&nbsp; &nbsp;</span></h1>
        </div>
      </div>
    </div>
  </div>
  <div id="sectionFour" class="section section-ready">
    <h1 class="mdc-typography--headline5 tc mt0 pt0 lh-solid">HELLO@TINYPIXEL.IO</h1>
    <h1 class="mdc-typography--headline5 tc">360 &middot; 386 &middot; CODE</h1>
  </div>
</div>
@endsection