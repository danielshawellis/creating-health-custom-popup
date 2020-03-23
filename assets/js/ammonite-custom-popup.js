// WRAPPER FUNCTION
function ammoniteCustomPopup() {
  // SCRIPT SETTINGS
  let settings = {
    popupDelay: 1000,
    fadeDuration: 500,
    minimumScreenSize: 900
  }

  // ASSOCIATED CLASSES
  let classes = {
    container: 'ammonite-custom-popup-container',
    main: 'ammonite-custom-popup-main',
    exitButton: 'ammonite-custom-popup-button-exit'
  }


  // EVENT LISTENERS
  // Display popup at a delay after DOM content is loaded if screen size is not too low
  jQuery( document ).ready( function() {
    if ( window.innerWidth >= settings.minimumScreenSize ) {
      setTimeout( displayPopup, settings.popupDelay );
    }
  } );

  // Hide popup when user clicks outside of popup main
  jQuery( '.' + classes.container ).click( function( event ) {
    if ( event.target === event.currentTarget ) {
      hidePopup();
    }
  } );

  // Hide popup when user clicks exit exit
  jQuery( '.' + classes.exitButton ).click( hidePopup );


  // SCRIPT FUNCTIONS
  function displayPopup() {
    // Remove the display property set to "none" such that element falls back on display "grid" within stylesheet
    jQuery( '.' + classes.container ).css( 'display', '' );
  }

  function hidePopup() {
    jQuery( '.' + classes.container ).animate( {
      opacity: 0
    }, settings.fadeDuration, function() {
      jQuery( '.' + classes.container ).css( 'display', 'none' );
    } );
  }
}

// CALL WRAPPER FUNCTION
ammoniteCustomPopup();
