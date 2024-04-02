$(document).ready(function(){
	
	
	$(".vwbtn").click(function(e){
		var myhref = $(this).attr('href');
		//alert(myhref);
		e.preventDefault();

		var jqxhr = $.ajax( myhref )
		.done(function(data) {
			//alert( "success" );			
			$("#ingmodalbody tr").remove();
			$('#ingmodalbody').append(data);
			})
		.fail(function() {
			alert( "error" );
		});
		
		
		
		
		$('#ingmodal').modal("show");
		
		
		
		
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}); // end of document 