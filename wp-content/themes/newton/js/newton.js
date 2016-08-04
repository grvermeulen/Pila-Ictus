/**
 * Newton.js
 *
 * Some custom scripts for this theme.
 */
( function( $ ) {

	/*--------------------------------------------------------------
	Back-To-Top.
	--------------------------------------------------------------*/

	// Check to see if the window is top if not then display back-to-top button.
	$(window).scroll(function(){
		if ($(this).scrollTop() > 500) {
			$( ".back-to-top" ).addClass( "show-back-to-top" );
		} else {
			$( ".back-to-top" ).removeClass( "show-back-to-top" );
		}
	});

	// Click event to scroll to top.
	$( '.back-to-top' ).click(function(){
		$( 'html, body' ).animate({scrollTop : 0},800);
		return false;
	});

	/*--------------------------------------------------------------
	Merge sidebars.
	--------------------------------------------------------------*/

	$( window ).on( 'resize',function() {

		var windowWidth = window.innerWidth;

		// Move left sidebar if width is less than 960px.
		if ( windowWidth < 960 ) {
			$( "#site-info" ).prependTo( "#colophon" );
			$( "#tertiary" ).prependTo( "#colophon" );
			$( "#secondary" ).prependTo( "#colophon" );
		}

		// Move both left and right sidebars between 960 and 1280px.
		if ( ( windowWidth >= 960 ) && ( windowWidth < 1280 ) ) {
			$( "#secondary" ).appendTo( "#masthead" );
			$( "#tertiary" ).appendTo( "#masthead" );
			$( "#site-info" ).appendTo( "#masthead" );
		}

		//Move right sidebar if width is more than or equal to 1280px.
		if ( windowWidth >= 1280 ) {
			$( "#secondary" ).appendTo( "#masthead" );
			$( "#site-info" ).prependTo( "#colophon" );
			$( "#tertiary" ).prependTo( "#colophon" );
		}

	}).trigger( 'resize' );

	/*--------------------------------------------------------------
	Center content.
	--------------------------------------------------------------*/

	$( window ).on( 'resize',function() {

		var windowWidth = window.innerWidth;

		// Center content by adding right margin on medium screen resolutions.
		if ( ( windowWidth >= 960 ) && ( windowWidth < 1280 ) ) {

			var contentMargin = ( $( "body" ).outerWidth() - $( "#content" ).outerWidth() - $( "#masthead" ).outerWidth() ) / 2;

			$( "#content" ).css( "margin-right" , contentMargin );

		}

		else {

			$( "#content" ).css( "margin-right" , 0 );
		}

	}).trigger( 'resize' );

	/*--------------------------------------------------------------
	Menu toggle.
	--------------------------------------------------------------*/
	
	$( ".menu-toggle" ).click(function() {
		$( ".menu" ).slideToggle( 'fast' );
	});

	/*--------------------------------------------------------------
	Child menu items toggle.
	--------------------------------------------------------------*/

	// Add dropdown toggle that display child menu items.
	$( '.main-navigation .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

	// Toggle buttons and submenu items with active children menu items.
	$( '.main-navigation .current-menu-ancestor > button' ).addClass( 'toggle-on' );
	$( '.main-navigation .current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );
	$( '.main-navigation .current-menu-ancestor > .sub-menu' ).css( 'display' , 'block' );

	$( '.dropdown-toggle' ).click( function( e ) {
		var _this = $( this );
		e.preventDefault();
		_this.toggleClass( 'toggle-on' );
		_this.next( '.children, .sub-menu' ).slideToggle( 'fast' );
		_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
		_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
	} );

})( jQuery );