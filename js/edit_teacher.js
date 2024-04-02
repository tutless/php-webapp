$(document).ready(function(){
    $.fn.editable.defaults.mode = 'popup';    
    //alert('test');
    $('#tchfname').editable({
        
        success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }else{
            location.reload(true);
           }
        }
    });    

    $('#tchlname').editable({
        
        success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }else{
            location.reload(true);
           }
        }
    });    
    $('#tchusername').editable({
        
        success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }else{
            location.reload(true);
           }
        }
    });    
    $('#tchpassword').editable({
        
        success: function(response,newValue){
           //console.log (response);
           if(response!=''){
            alert(response);
           }else{
            location.reload(true);
           }
        }
    });    

    
    
    
});// end of document