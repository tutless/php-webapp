$(document).ready(function(){

 
	$('#dosearch').click(function(e){
			e.preventDefault();
			var mySearch = $('#ingvar').val();
			ingtable.ajax.url('php/inglist.php?sch_term=' + mySearch).load();
	});

	$('#inginsertbtn').click(function(){
			
			$('#ingform').submit();
			
	});

	$(document).on('change', 'input:radio[name="ingnbn_no"]', function (event) {
		//alert($(this).val());
		var amt=$(this).val().split('|')[2]
		$('#ingamt').val(amt);
	});
	
	
});