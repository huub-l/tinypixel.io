import anime from 'animejs';
import fullpage from 'fullpage.js/dist/fullpage.extensions.min.js';

export default {
  init() {
    new fullpage('#fullpage', {
      licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
      //Navigation
      lockAnchors: false,
      anchors:['hello', 'our-friends', 'belief'],
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: ['The Collective', 'Work', 'Belief', 'Service'],
      showActiveTooltip: true,
      slidesNavigation: true,
      slidesNavPosition: 'bottom',

      //Scrolling
      css3: true,
      scrollingSpeed: 700,
      autoScrolling: true,
      fitToSection: true,
      fitToSectionDelay: 1000,
      scrollBar: false,
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
      scrollOverflow: false,
      scrollOverflowReset: false,
      scrollOverflowOptions: null,
      touchSensitivity: 15,
      normalScrollElementTouchThreshold: 5,
      bigSectionsDestination: null,

      //Accessibility
      keyboardScrolling: true,
      animateAnchor: true,
      recordHistory: true,

      //Design
      controlArrows: true,
      verticalCentered: true,
      sectionsColor : ['rgb(58, 4, 152)', 'rgb(3, 151, 181)', '#d5008f'],
      responsiveWidth: true,
      responsiveHeight: true,
      responsiveSlides: true,

      //Custom selectors
      sectionSelector: '.section',
      slideSelector: '.slide',

      lazyLoading: true,
    });
  },
  finalize() {
    anime({
      element: '#tiny-circle-logo',
      rotate: 360,
      duration: 5000,
      loop: true,
      easing: 'easeOutElastic',
    });
  },
};
