<footer class="bt f1 mt0">
  <div class="mw9 ml-auto mr-auto f1 pl0">
    <div class="mv4-l cf white">
      <div class="pv0 white ttu mb4 w-100 mw6">
        @svg ( 'logo-horizontal' )
      </div>
      @include ( 'atoms.address', array (
        'place' => 'STORMCOAST',
        'street' => '1400 Cooper Point Road SW<br/>P.O. Box #11088',
        'city' => 'Olympia',
        'state' => 'W.A.',
        'postal' => '98502',
        'phone' => '360 &middot; 386 &middot; CODE',
        'email' => 'developers@tinypixel.io',
      ))
    </div>
    <div class="dt w-100" >
      <div class="dn dtc-ns v-mid">
        <p class="f6 white-70 dib pl0 mb3 code">
          © Tiny Pixel Collective, LLC {!! date ( 'Y' ) !!}
        </p>
      </div>
      <div class="dn dtc-ns white-70 tc tr-ns v-mid code ttu tracked">
        <a class="no-underline bg-animate bg-white near-black hover-bg-pink inline-flex items-center mt2 mr0 ml1 mb2 tc br2 pa2" href="https://facebook.com" title="Facebook">
          <svg class="dib h1 w1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.476-1.195 1.176v1.54h2.39l-.31 2.416h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
          <span class="f7 ml3 pr1">FB</span>
        </a>
        <a class="no-underline bg-animate bg-white near-black hover-bg-pink inline-flex items-center mt2 mr0 ml1 mb2 tc br2 pa2" href="https://facebook.com" title="Facebook">
          <svg class="dib h1 w1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C3.58 0 0 3.582 0 8c0 3.535 2.292 6.533 5.47 7.59.4.075.547-.172.547-.385 0-.19-.007-.693-.01-1.36-2.226.483-2.695-1.073-2.695-1.073-.364-.924-.89-1.17-.89-1.17-.725-.496.056-.486.056-.486.803.056 1.225.824 1.225.824.714 1.223 1.873.87 2.33.665.072-.517.278-.87.507-1.07-1.777-.2-3.644-.888-3.644-3.953 0-.873.31-1.587.823-2.147-.083-.202-.358-1.015.077-2.117 0 0 .672-.215 2.2.82.638-.178 1.323-.266 2.003-.27.68.004 1.364.092 2.003.27 1.527-1.035 2.198-.82 2.198-.82.437 1.102.163 1.915.08 2.117.513.56.823 1.274.823 2.147 0 3.073-1.87 3.75-3.653 3.947.287.246.543.735.543 1.48 0 1.07-.01 1.933-.01 2.195 0 .215.144.463.55.385C13.71 14.53 16 11.534 16 8c0-4.418-3.582-8-8-8"/></svg>
          <span class="f7 ml3 pr1">GitHub</span>
        </a>
        <a class="no-underline bg-animate bg-white near-black hover-bg-pink inline-flex items-center mt2 mr0 ml1 mb2 tc br2 pa2" href="https://facebook.com" title="Facebook">
          <svg class="dib h1 w1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill-rule="nonzero"/></svg>
          <span class="f7 ml3 pr1">Twtr</span>
        </a>
      </div>
    </div>
    <div class="db dn-ns">
      <p class="f7 white-70 mt4 tc code">
        Copyright © Tiny Pixel Collective, LLC @php date ( 'Y' ) @endphp
      </p>
    </div>
  </div>
</footer>