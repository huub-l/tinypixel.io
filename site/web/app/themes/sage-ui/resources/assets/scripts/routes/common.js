import {MDCRipple} from '@material/ripple';
import {MDCTopAppBar} from '@material/top-app-bar';
import {MDCDrawer} from "@material/drawer";
import Rellax from 'rellax';
import Particles from 'particlesjs';

export default {
  init() {
    const topAppBarEl = document.querySelector('.app-bar'),
          drawerEl = document.querySelector('.mdc-drawer'),
          rippleEls = document.querySelectorAll('.ripple'),
          rellaxEls = document.querySelectorAll('.rellax'),
          particleEl = document.querySelector('.particles');

    let topAppBar, drawer;

    drawerEl ? drawer = new MDCDrawer.attachTo(drawerEl) : null;
    topAppBarEl ? topAppBar = new MDCTopAppBar.attachTo(topAppBarEl) : null;
    rippleEls ? rippleEls.forEach((item) => { MDCRipple.attachTo(item) }) : null;

    topAppBar.setScrollTarget(document.querySelector('.mdc-top-app-bar--fixed-adjust'))
    topAppBar.listen('MDCTopAppBar:nav', () => {
      drawer.open = !drawer.open
    });

    rellaxEls ? rellaxEls.forEach((item) => { 
      new Rellax(item, {
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false,
      });
    }) : null;

    particleEl ? 
    Particles.init({
      selector: '.particles',
      connectParticles: true,
      color: '#ffffff',
      maxParticles: 200,
      minDistance: 40,
      speed: 0.8,
    }):
    null;
  },
};
