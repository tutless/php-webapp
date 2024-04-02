$(document).ready(function(){
    $.fn.editable.defaults.mode = 'popup';    
    //alert('test');
    $('#venstorename').editable({
        
        success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }else{
            location.reload(true);
           }
        }
    });    
//    $('#venaddress').editable();    
//    $('#vencity').editable();    
//    $('#venstate').editable();    
//    $('#venzip').editable();    
    $('#venemail').editable({
    
       success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }
       }  
    });

    $('#vencontact').editable({
    
       success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }
       }  
    });


    $('#venpassword').editable({
        
       success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }
       }  
    });    


    $('#address').editable({
        url: '/post',
        /*
        value: {
            street : "Nowhere Street",
            city: "Houston", 
            state: "Texas",
            zip: "703214"
        }, */
        validate: function(value) {
            if(value.city == '') return 'city is required!'; 
        },
        success: function(response,newValue){
           if(response!=''){
            alert(response);
           }
        }        
        
    });    
    
    
    
});// end of document