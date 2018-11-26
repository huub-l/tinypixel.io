import M from 'materialize-css/dist/js/materialize.js';

export default {
  init() {
    let navEl = document.querySelectorAll('.sidenav');
    const nav = M.Sidenav.init(navEl, {
      preventScroling: true,
      inDuration: 200,
    });
    console.log(nav);

    let tabsEls = document.querySelectorAll('.tabs');
    const tabs = M.Tabs.init(tabsEls, {
      swipeable: true,
    });
    console.log(tabs);

    const parallaxEls = document.querySelectorAll('.parallax');
    const parallax = M.Parallax.init(parallaxEls, {
      responsiveThreshold: 900,
    });
    console.log(parallax);


    let fixedButtonEl = document.querySelectorAll('.fixed-action-btn');
    const fixedButton = M.FloatingActionButton.init(fixedButtonEl, {
      direction: top,
      hoverEnabled: true,
      toolbarEnabled: false,
    });
    console.log(fixedButton)
  },
  finalize() {
  },
};
