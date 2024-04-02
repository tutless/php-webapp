$(function () {
      	
        $("#example1").DataTable({
			dom: 'Blfrtip',
			buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
			],	
			"searching": true,
			"ordering": false,
			"paging" : false
		});
	   	
	$("#btn-lm-selyear").click(function(){
		$('#lm-selyear').modal('show');
	});
	$("#btn-tg-selyear").click(function(){
		$('#tg-selyear').modal('show');
	});
	$("#btn-tm-selyear").click(function(){
		$('#tm-selyear').modal('show');
	});
	$("#btn-pd-selyear").click(function(){
		$('#pd-selyear').modal('show');
	});
	
	$("#btn-pa-selyear").click(function(){
		$('#printA-selyear').modal('show');
	});
	
	$("#btn-pc-selyear").click(function(){
		$('#printC-selyear').modal('show');
	});

	   	
	 	$('#btnaddsubject').click(function(){
	 		//alert($(this).data("myrow"));
	 		//$('#delsuppid').val($(this).data("myrow")); 
	 		//$('#modsupname').html($(this).data("mysupp"));
	 		$('#addsubject').modal('show');
	 	});
	   	
	   	
	   	
});//------------end of script ---------------
