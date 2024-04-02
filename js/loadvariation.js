$(document).ready(function(){

	$(".dispvar").click(function(e){
		e.preventDefault();
		var myhref = $(this).attr('href');
			//alert(myhref);
		var jqxhr = $.ajax( myhref )
		.done(function(data) {
			//alert( "success" );			
			$("#variationbody tr").remove();
			$('#variationbody').append(data);
			})
		.fail(function() {
			alert( "error" );
		});


	});
	


    $('#variationbody').on("click", ".addingbtn", function(e){
		
    });

});