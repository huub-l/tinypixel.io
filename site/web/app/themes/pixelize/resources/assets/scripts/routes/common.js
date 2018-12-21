import M from 'materialize-css/dist/js/materialize.js';
import LogRocket from 'logrocket';

export default {
  init() {
    LogRocket.init('8y25el/tinypixelio');

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
