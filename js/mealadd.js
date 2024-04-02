$(document).ready(function(){
var currmealadmin = 'http://rbcaffiliate.com/mealplan/store-panel/mealmain.php';

	$('#varsavebtn').click(function(){
		var myvartag = $('#modalvar').val();
		var myprice = $('#modalprice').val();;	

		
		$('#vartagbody').append('<tr class="varentries" data-tag="'+myvartag+'" data-price="'+myprice+'"><td>'+myvartag+'</td><td>'+myprice+'</td></tr>');
		$('#modalvar').val('');
		$('#modalprice').val('');

/*		$('#vartabs').append('<li><a data-toggle="tab" href="#'+ myvartag+'">'+myvartag+'</a></li>');
		$('#vartabcontent').append('<div id="'+ myvartag+ '" class="tab-pane"><div class="form-group"><label class="col-sm-2 control-label">Price : $</label><div class="col-sm-10"><input type="text" class="price" value="'+ myprice+ '" /></div></div><table class="table"><thead><th>Calorie</th><th>Unit</th><tr><tbody id="vartagbody"><tbody></table></div>');*/

		
	});
    /*	
    $('#vartabs').on("click", "a", function(e){
      e.preventDefault();
      //alert('Test');
      $(this).tab('show');
    });
*/ 

	$('#tagsavebtn').click(function(){		var mytag = $('#modaltag').val();		$('#tagbody').append('<tr class="tagentries" data-tag="'+mytag+'"   ><td>'+mytag+'</td></tr>');		$('#modaltag').val('');
	});

	$('#saveallbtn').click(function(e){
		e.preventDefault();
		var mymealtitle = $('#mealtitle').val();
		var mymealdesc = $('#mealdesc').val();

		var mymealtime = $('#mealtime').val();
		var mymealstartdate = $('#mealstartperiod').val();
		var mymealenddate = $('#mealendperiod').val();
		var variation = [];
		var tags=[];		
		$( ".varentries" ).each( function( index, element ){
			//console.log( $( this ).data('tag') );
			variation.push({"desc": $( this ).data('tag'), "price" : $( this ).data('price') });
		});	
		
		$( ".tagentries" ).each( function( index, element ){
			//console.log( $( this ).data('tag') );
			tags.push({"tag": $( this ).data('tag') });
		});	

		var mypost = {
			mealtitle : mymealtitle,
			mealdesc  : mymealdesc,

			mealtime : mymealtime,
			mealstartdate : mymealstartdate,
			mealenddate : mymealenddate,
			variadata : variation,
			tagdata : tags,
		}
		//console.log(mypost);
		//var url = 'http://rbcaffiliate.com/mealplan/mealadmin/mytestpost.php';		
		
		$.ajax({
          type:           'post',
          cache:          false,
          url:            'http://rbcaffiliate.com/mealplan/store-panel/php/addmeals.php',
          data:            {'data':JSON.stringify(mypost)},
		}).done(function(data){
		  //console.log('data retrived');
          console.log(data);
          if(data=='success'){
          	$(location).attr('href',currmealadmin);          }
 		});

	}); // --------------- end of saveallbtn ----------------------------
	
	
}); //--------------- end of document 