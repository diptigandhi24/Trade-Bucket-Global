/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function() {
	
	var container, button, subMenusIcon, menuicon , showNavMenu,
	    servicesButton , servicesSubmenu , industriesButton , industriesSubmenu ,test;

	container = document.getElementsByClassName( 'cont-nav' )[0];
	menuicon = document.getElementById('menu-icon');
	showNavMenu = container.getElementsByClassName('showNavMenu')[0]; 
	servicesButton = document.getElementById("servicesSubmenuButton");
	industriesButton = document.getElementById("supportedIndustriesSubmenuButton");
	console.log("PRINTING THE VALUE AT THE BEGINNING" , industriesButton);
	industriesSubmenu=showNavMenu.getElementsByClassName('sub-menu')[1];
	servicesSubmenu = showNavMenu.getElementsByClassName('sub-menu')[0];
	
	/*if ( ! container ) {
		return;
	}
	else{
		console.log("yes container object exits" , container.childNodes.length);
	for (var i = 0 ; i < container.childNodes.length ; i++) {
		console.log("container Element Object  : ",i , container.childNodes[i]);
	};

}*/
	function expand(){

		console.log("calling expand function");
		if ( -1 !== showNavMenu.className.indexOf( 'toggled' ) ) {
			console.log("inside if condition ");
			menuicon.innerHTML = "<span class='menu-button'> </span><span class='menu-button'> </span><span class='menu-button'> </span><p class='mobileMenuIcon'>Menu</p>";
			showNavMenu.className = showNavMenu.className.replace( ' toggled', '' );
			showNavMenu.style.display="none";
			if(-1 !== servicesSubmenu.className.indexOf('toggled')){
			servicesSubmenu.className = servicesSubmenu.className.replace('toggled' ,'');
			servicesSubmenu.style.display="none" ;
			servicesButton.innerHTML="+" ;
			}
			if(-1 !== industriesSubmenu.className.indexOf('toggled')){
			industriesSubmenu.className = industriesSubmenu.className.replace('toggled','');
			industriesSubmenu.style.display="none" ;
			industriesButton.innerHTML="+" ;}
		} else {
			menuicon.innerHTML = "<p style='color:white;'>Close</p>";
			console.log("inside onclick else condition" ,showNavMenu.className.indexOf( 'toggled' ));
			showNavMenu.className += ' toggled';
			showNavMenu.style.display="block";
		}
	}
	
	//Access the submenu button
	function toggleSubmenu(button , menuContent){
		console.log("calling toggleSubmenu function" , menuContent);
		if(-1!== menuContent.className.indexOf('toggled')){
			button.innerHTML = "+";
			menuContent.className = menuContent.className.replace('toggled' , '' );
			menuContent.style.display="none";
		}else{
				button.innerHTML = "X";
				menuContent.className += ' toggled';
				menuContent.style.display="block";

		}

	}
	
	servicesButton.onclick = function(){toggleSubmenu(servicesButton , servicesSubmenu);}
	menuicon.onclick = expand;
	console.log("VALUE OF industriesButton " , industriesButton);
	industriesButton.onclick = function(){toggleSubmenu(industriesButton , industriesSubmenu);}
	
	}
	
 )();
