/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

//used in the callback for views filters, will not work inside other functions
function imgFilter(){
  $('.img-lq').imgLiquid();
  alert('imgReset!');
}

(function($) {


function pullDown(){
      $('.pos-bottom').each(function() {
        $(this).css('margin-top', 0 );
        $(this).css('margin-top', $(this).parent().height()-$(this).height())
      });
      console.log('match');
    }

function resetMargin(){
  $('.pos-bottom').each(function() {
    $(this).css('margin-top', 0 );
  });
  console.log('unmatch');
}



// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {

      //having scope issues, trying this
      

      //Add starts
      $('.wpfp-link[title="Remove from Curriculum"]').before('<i class="fa fa-star left marg-5-h yellow"></i>');
      $('.wpfp-link[title="Add to Curriculum"]').before('<i class="fa fa-star left marg-5-h"></i>');

      enquire.register("screen and (min-width: 768px)", {

        // OPTIONAL
        // If supplied, triggered when a media query matches.
        match : function() {
          pullDown();
        },      
                                    
        // OPTIONAL
        // If supplied, triggered when the media query transitions 
        // *from a matched state to an unmatched state*.
        unmatch : function() {
          resetMargin();
        },    
        
        // OPTIONAL
        // If supplied, triggered once, when the handler is registered.
        setup : function() {},    
                                    
        // OPTIONAL, defaults to false
        // If set to true, defers execution of the setup function 
        // until the first time the media query is matched
        deferSetup : true,
                                    
        // OPTIONAL
        // If supplied, triggered when handler is unregistered. 
        // Place cleanup code here
        destroy : function() {}
          
      });

      // JavaScript to be fired on all pages
      $('.img-lq').imgLiquid();
      $('.content').fitVids();
      
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

