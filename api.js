$.get("https://flightaware.com/live/flight/DAL3728", function( data ) {  
	// Set the API response to the dom element class `result` 
	$( ".result" ).html( data ); 
	alert( "Load was performed." ); 
}); 