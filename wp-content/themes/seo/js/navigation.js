/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function() {
	var container, button, menu, links, subMenus, menuicon , shownav,
	servicesmenu, serviceButton;

	container = document.getElementsByClassName( 'cont-nav' )[0];
	if ( ! container ) {
		return;
	}
	else{console.log("yes container object exits" , container.childNodes.length);
	for (var i = 0 ; i < container.childNodes.length ; i++) {
		console.log("container Element Object  : ",i , container.childNodes[i]);
	};

}
	button= document.getElementById('menu-icon');
	


	menu = container.getElementsByTagName( 'ul' )[0];
	
	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}
	servicesmenu=container.getElementsByClassName('sub-menu')[1];
	serviceButton=document.getElementById('serviceExpand');
	
	shownav=container.getElementsByClassName('test')[0];
	button.onclick = function() {
		
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			console.log("inside if condition ");
			button.innerHTML = "<span class='menu-button'> </span><span class='menu-button'> </span><span class='menu-button'> </span><p class='mobileMenuIcon'>Menu</p>";
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
			shownav.style.display="none";
		} else {
			button.innerHTML = "<p style='color:white;'>Close</p>";
			console.log("inside onclick else condition" ,container.className.indexOf( 'toggled' ));
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
			shownav.style.display="block";
		}
	};
	serviceButton.onclick = function() {
		
		if ( -1 !== servicesmenu.className.indexOf( 'doggled' ) ) {
			console.log("inside if condition ");
			serviceButton.innerHTML = "+";
			servicesmenu.className = servicesmenu.className.replace( ' doggled', '' );
			serviceButton.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
			servicesmenu.style.display="none";
		} else {
			serviceButton.innerHTML = "close";
			console.log("inside onclick else condition" ,servicesmenu.className.indexOf( 'doggled' ));
			servicesmenu.className += ' doggled';
			serviceButton.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
			servicesmenu.style.display="block";
		}
	};
	
} )();
