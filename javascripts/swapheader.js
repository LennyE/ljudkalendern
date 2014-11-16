window.onload = function () {
	if (window.navigator.standalone) {
	    // standalone web app running from homescreen in iOS
	    document.getElementById( 'logo' ).style.display = 'none';
		document.getElementById( 'ios-header' ).style.display = 'block';
		document.getElementById( 'ios-header-padding' ).style.display = 'block';
	}
	else {
	    // everytime else when viewed in a browser (even in browser on iOS)
	    document.getElementById( 'logo' ).style.display = 'block';
		document.getElementById( 'ios-header' ).style.display = 'none';
		document.getElementById( 'ios-header-padding' ).style.display = 'none';
	};
};