<div id="fullpage">
	<div id="sectionOne" class="section section-splash">
    <div class="container">
      <h2>{!! get_bloginfo('description') !!}</h2>
      <p>Tiny Pixel is a small digital agency headquartered in Olympia, WA. If you're a non-profit, activist, artist (or something thereabouts) you've definitely come to the right place.</p>
      <a href="#wordpress" class="btn waves-effect waves-light">
        <i class="material-icons left">near_me</i> Let's get started
      </a>
    </div>
  </div>

  <div id="sectionTwo" class="section section-splash">
    <div class="logo">@svg('logo-circle')</div>
    <div class="container">
      <div class="row">
        <div class="copy col s12 m12 l5">
          <h2>Services</h2>
          <h3><i class="fa-wordpress fa fab wordpress"></i> WordPress Development</h3>
          <p>We <em>love</em> WordPress, the most popular content management system on the planet. We specifically work with the Roots.io platform, a fast and scalable WordPress architecture utilizing modern PHP and JS tools.</p>
          <a href="#javascript" class="btn waves-effect waves-light z-4">Continue <i class="material-icons right">chevron_right</i></a>
        </div>
        <div class="col s12 m12 l7 hide-on-small-only">
          @include('components.card-full',
                    array('key'          => 1,
                          'title'        => 'Case Study',
                          'link_url'     => '#',
                          'link_copy'    => 'New Florida Majority',
                          'image'        => 'images/gillum.jpg',
                          'reveal_title' => 'New Florida Majority',
                          'reveal_icons' => array('php', 'js', 'wordpress'),
                          'reveal_body'  => '<p>New Florida Majority is an upstart organization making massive gains in the fight for equal treatment of people of color in the state of Florida.</p>
                                              <p>We crafted a new theme using Google\'s Material Design framework accompanied by a set of bespoke custom plugins.</p>
                                              <p>The organization now has a digital presence befitting their tireless drive and revolutionary aims ✊🏾</p>'))
        </div>
      </div>
    </div>
  </div>
  <div id="sectionThree" class="section section-splash">
    <div class="bg">@svg('programmin')</div>
    <div class="container">
      <div class="row">
        <div class="copy col s12 m12 l5">
          <h2>Services</h2>
          <h3><i class="fa-js fa fab"></i> __Single Page Applications</h3>
          <p>We've done more than a few lithe, single-page JavaScript applications for coalitions. Some small, and some helmed by orgs like Greenpeace US,
            The Other 98% and Stand.Earth. All total, we've gathered millions of signatures, pledges and donations by leveraging
            tools like Action Network, Revere Mobile, Stripe, and Mapbox 💪🏾</p>
          <a href="#launch" class="btn waves-effect waves-light z-4">Continue<i class="material-icons right">chevron_right</i></a>
        </div>
        <div class="col s12 m12 l7 hide-on-small-only">
          @include('components.card-full',
                    array('key'          => 2,
                          'title'        => 'Case Study',
                          'link_url'     => '#',
                          'link_copy'    => 'Stop Kinder Morgan Legal Defence Fund',
                          'image'        => 'images/stop-km.png',
                          'reveal_title' => 'Stop Kinder Morgan Legal Defence Fund',
                          'reveal_icons' => array('js', 'react'),
                          'reveal_body'  => '<p>The Stop KM Legal Defence Fund\'s purpose is to collect and distribute funds to support legal defence costs stemming from civil disobedience to the Trans Mountain pipeline expansion.</p>
                                              <p>In support, Tiny Pixel deployed a lightweight web application built with Gatsby/React. To date they have raised ~ 80,000 CAD on the platform 🙌🏽</p>'))
        </div>
      </div>
    </div>
  </div>
  <div id="sectionFour" class="section section-splash">
    <div class="bg">@svg('launch')</div>
    <div class="container">
      <div class="row">
        <div class="copy col s12 m8 l4">
          <h3>Let's make it happen!</h3>
          <p>To get started send a text to <a href="tel:3603862633">360&middot;386&middot;CODE (2633)</a>. Or, keep it traditional: <a href="mailto:hello@tinypixel.io">hello@tinypixel.io</a>. We can't wait to hear what you've got planned 👩🏼‍💻✨</a>
        </div>
      </div>
    </div>
  </div>
</div>