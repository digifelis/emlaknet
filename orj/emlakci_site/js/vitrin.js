$(document).ready(function(){
	
	var $animasyon = $('#mansetler').cycle({ 
		fx:	'slideX',
		timeout: 	 6000
	});
	
	var bc = $('#butonlar'); 
 
	$animasyon.children().each(function(i) { 
    	// create input 
    	$('<input type="image" src="res/'+(i+1)+'.png" style="margin-left:8px;" />') 
        // append it to button container 
        .appendTo(bc) 
        // bind click handler 
        .click(function() { 
            // cycle to the corresponding slide 
            $animasyon.cycle(i); 
            return false; 
        }); 
	}); 
	
});	