$(function () { 
	$('#otherinfodiv').hide();
	$("#warrantyinfo").change(function(){
		warranty = $(this).val();
		if(warranty == "other")	{
			$('#otherinfodiv').show();	
		}else{
			$('#otherinfo').val('');
			$('#otherinfodiv').hide();
		}
		//alert($(this).val());
	});
	$('#btnaddunitinfo').click(function(){
		$('#md-unitinfo').modal('show');
	});

	$('#addunitinfo').click(function(){
		alert('test');
	});



});//------------end of script ---------------