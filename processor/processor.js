
$(function(){

  // alert('Hello World');



   
    

    function resp(response){

        if(response == "registration_success"){
            $(".mess").html('<div class="alert alert-success"><strong>Operation successful</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
            setTimeout(function(){
                window.location = "home";
            },3000);
            
        }
        

        
        else{

          $(".mess").html('<div class="alert alert-warning"><strong>'+ response + '</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
          

        }


    }

    function before()
{
    
    $(".mess").html('<div class="alert alert-info" role="alert">Please wait <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
  
}






$(document).on('submit','.register',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=register',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: before,
            success: resp
    
        };
      $.ajax(user);
});








    
})