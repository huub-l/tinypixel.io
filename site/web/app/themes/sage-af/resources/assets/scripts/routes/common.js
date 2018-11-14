import {MDCRipple} from '@material/ripple';
import {MDCTopAppBar} from '@material/top-app-bar';
import {MDCDrawer} from "@material/drawer";
import {MDCDialog} from '@material/dialog';

export default {
  init() {
    const topAppBar = new MDCTopAppBar.attachTo(document.querySelector('.app-bar')),
          drawer = new MDCDrawer.attachTo(document.querySelector('.mdc-drawer')),
          memberDialogueEl = document.querySelector('.mdc-dialog-member'),
          memberDialogueButtonEl = document.querySelector('.open-member-dialog'),
          fabs = document.querySelectorAll('.mdc-fab'),
          rippleEls = document.querySelectorAll('.ripple');
    
    if(rippleEls) rippleEls.forEach((item) => { MDCRipple.attachTo(item) })
    if(fabs) fabs.forEach((item) => { MDCRipple.attachTo(item) });

    topAppBar.setScrollTarget(document.querySelector('.mdc-top-app-bar--fixed-adjust'))
    topAppBar.listen('MDCTopAppBar:nav', () => {
      drawer.open = !drawer.open
    });

    if(memberDialogueEl && memberDialogueButtonEl) {
      const memberDialogue = new MDCDialog(memberDialogueEl);
      document.querySelector('.open-member-dialog').addEventListener('click', function() {
        memberDialogue.open();
      }, false)
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
