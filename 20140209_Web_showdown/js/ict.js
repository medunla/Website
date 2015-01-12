/* ------------------------------
 * Smoot scroll link
 * --| By Chris Coyier
 * ---------------------------- */
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



$(document).ready(function () {

  /* ------------------------------
   * Touch slider
   * --| By smoothDivScroll
   * ---------------------------- */
  // content slider
  $("#content-slider").smoothDivScroll({
    hotSpotScrolling: false,
    touchScrolling: true,
    manualContinuousScrolling: false,
    mousewheelScrolling: true
  });

  // img slider automatic
  $("#img-slider-auto").smoothDivScroll({
    hotSpotScrolling: false,
    touchScrolling: false,
    manualContinuousScrolling: true,
    mousewheelScrolling: false,
    autoScrollingMode: "onStart"
  });


  /* ------------------------------
   * Icon in image-showcase
   * ---------------------------- */    
  $('.youtube').append("<img src=\"img/icon/youtube.png\">");
  $('.fb').append("<img src=\"img/icon/fb.png\">");
  $('.www').append("<img src=\"img/icon/www.png\">");


  /* ------------------------------
   * Waypoints header effect
   * --| By ...
   * ---------------------------- */ 
  var $head = $( '#ha-header' );
  $( '.ha-waypoint' ).each( function(i) {
    var $el = $( this ),
      animClassDown = $el.data( 'animateDown' ),
      animClassUp = $el.data( 'animateUp' );

    $el.waypoint( function( direction ) {
      if( direction === 'down' && animClassDown ) {
        $head.attr('class', 'ha-header ' + animClassDown + ' transition-0-5s');
      }
      else if( direction === 'up' && animClassUp ){
        $head.attr('class', 'ha-header ' + animClassUp + ' transition-0-5s');
      }
    }, { offset: '100%' } );
  } );


});






