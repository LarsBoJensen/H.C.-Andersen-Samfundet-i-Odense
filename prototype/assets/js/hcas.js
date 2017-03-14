$(document).ready(function(){

  /**
   * This is supposed to track the vclick event for touch-enabled devices in
   * order to rid off the (ca.) 300 ms delay on mobile devices. The solution
   * is too simple and buggy, though. http://www.creativebloq.com/javascript/make-your-site-work-touch-devices-51411644
   * describes some of the complexity involved. The library at http://www.creativebloq.com/javascript/make-your-site-work-touch-devices-51411644
   * may offer a viable solution.
   */
    // var click_event = $.support.touch ? "vclick" : "click";
  var click_event = "click"; // Use click on any device

  /**
   * Menu toggling
   */

  var mainMenu        = $('#main_menu');
  var mainMenuIcon    = $('.icon-main-menu');

  var mobileView      = window.matchMedia("(max-width: 750px)");

  /**
   * Page scroll behaviour
   */
  var lastScrollTop = 0;

  $(window).scroll(function(){

    /**
     * This script counts the pixels scrolled from the top of the page
     * and toggles CSS classes.
     * Not relevant for mobile devices.
     * @type {*|jQuery|HTMLElement}
     */

    if(!mobileView.matches) {
    // If the viewport is at least 750px wide (see media query above)

      var scrolledClass = 'scrolled'; // class to set on the body element
      var scrollEvent   = 100; // how many pixels from the top the party starts

      /**
       * This code catches the direction of the scroll.
       * TODO: Debounce
       *
       * @type {*|jQuery}
       */

      var scrollTop = $(this).scrollTop();


      if (scrollTop <= scrollEvent) {
      // At the top of page

        // Remove the 'scrolled' mark/CSS class from the body element
        $('body').removeClass(scrolledClass);

      } else {
        /**
         * If page is scrolled to the scrollEvent (number of pixels from
         * the top) defined above
         */

        // Mark the body element as scrolled with a CSS class
        $('body').addClass(scrolledClass);

      }

    }
  });

});
