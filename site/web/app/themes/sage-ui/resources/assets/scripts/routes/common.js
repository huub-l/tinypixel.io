import {MDCRipple} from '@material/ripple';
import {MDCTopAppBar} from '@material/top-app-bar';
import {MDCDrawer} from "@material/drawer";

export default {
  init() {
    const topAppBarEl = document.querySelector('.app-bar'),
          drawerEl = document.querySelector('.mdc-drawer'),
          rippleEls = document.querySelectorAll('.ripple');

    let topAppBar, drawer;

    drawerEl ? drawer = new MDCDrawer.attachTo(drawerEl) : null;
    topAppBarEl ? topAppBar = new MDCTopAppBar.attachTo(topAppBarEl) : null;
    rippleEls ? rippleEls.forEach((item) => { MDCRipple.attachTo(item) }) : null;

    topAppBar.setScrollTarget(document.querySelector('.mdc-top-app-bar--fixed-adjust'))
    topAppBar.listen('MDCTopAppBar:nav', () => {
      drawer.open = !drawer.open
    });
  },
};
