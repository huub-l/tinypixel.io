import 'fullpage.js/vendors/scrolloverflow.min.js';
import fullpage from 'fullpage.js/dist/fullpage.extensions.min.js';

export default {
  init() {
    new fullpage('#fullpage', {
      licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
      //Navigation
      lockAnchors: false,
      anchors:['hello', 'wordpress', 'javascript', 'launch'],
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: ['The Collective', 'WordPress', 'Javascript', 'Launch'],
      showActiveTooltip: false,
      slidesNavigation: false,
      slidesNavPosition: 'bottom',

      //Scrolling
      css3: true,
      scrollingSpeed: 700,
      autoScrolling: true,
      fitToSection: true,
      fitToSectionDelay: 0,
      scrollBar: true,
      easing: 'easeInOutCubic',
      easingcss3: 'ease',
      loopBottom: false,
      loopTop: false,
      loopHorizontal: false,
      continuousVertical: false,
      continuousHorizontal: false,
      scrollHorizontally: false,
      interlockedSlides: false,
      dragAndMove: true,
      offsetSections: true,
      resetSliders: false,
      fadingEffect: false,
      scrollOverflow: true,
      scrollOverflowReset: true,
      scrollOverflowOptions: null,
      touchSensitivity: 1,
      normalScrollElementTouchThreshold: 5,
      bigSectionsDestination: 'top',

      //Accessibility
      keyboardScrolling: true,
      animateAnchor: true,
      recordHistory: true,

      //Design
      controlArrows: false,
      verticalCentered: true,
      sectionsColor : ['rgb(255, 255, 255)', 'rgb(255, 255, 255)', 'rgb(255, 255, 255)'],
      responsiveWidth: false,
      responsiveHeight: true,
      responsiveSlides: false,

      //Custom selectors
      sectionSelector: '.section',
      slideSelector: '.slide',
      lazyLoading: true,
    });
  },
}