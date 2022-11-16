
$(function(){

  

    function resp(response){

        if(response == "registration_success"){
            $(".mess").html('<div class="alert alert-success"><strong>Registration successful</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
            setTimeout(function(){
              $(".mess").html('');
                window.location = "login";
            },3000);
            
        }

        else if(response == "loginsuccess"){

          $(".mess").html('<div class="alert alert-success"><strong>Login successful</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location = "home";
            },3000);

        }

        else if(response == "success"){

          $(".mess").html('<div class="alert alert-success"><strong>Operation successful</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location.reload();
            },3000);

        }

        else if(response == "resetlink"){

          $(".mess").html('<div class="alert alert-success"><strong>Reset password link sent to email</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location.reload();
            },3000);

        }
        else{

          $(".mess").html('<div class="alert alert-danger"><strong>'+ response + '</strong> <div class="spinner-border text-danger"></div></div>');
          
          setTimeout(function(){

            $(".mess").html('');
              
            
        },3000);

        }


    }

    function before()
{
    
    $(".mess").html('<div class="alert alert-info" role="alert">Please wait <div class="spinner-border text-muted"></div></div>');
  
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


$(document).on('submit','.login',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=login',
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



$(document).on('submit','.updaterec',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=updaterec',
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




$(document).on('submit','.resetpassword',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=resetpassword',
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