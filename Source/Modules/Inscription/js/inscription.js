$(document).ready(function(){
	$i=0;
	
	$('#intro-content').animate({	marginBottom : "25%"	},1500);
	$.getJSON( "liste_pays/pays.json", function( data ) {
	  var items = [];
	  $.each( data, function(key,value) {
		$('#pays').append('<option value='+value+'>'+value+'</option>')
	  });
	});
});
