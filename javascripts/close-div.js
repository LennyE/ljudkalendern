/**
 * close-div.js 
 */

    window.addEvent('load', function() {
    closeslideone.onclick = function() {
        var div = document.getElementById('first');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
        }
        else {
            div.style.display = 'block';
        }
    };
    });//]]>  
    
	
    window.addEvent('load', function() {
    closeslidetwo.onclick = function() {
        var div = document.getElementById('second');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
        }
        else {
            div.style.display = 'block';
        }
    };
    });//]]>  


    window.addEvent('load', function() {
    closeslidethree.onclick = function() {
        var div = document.getElementById('third');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
        }
        else {
            div.style.display = 'block';
        }
    };
    });//]]>  
