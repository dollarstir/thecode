
$(function(){

  

  $(".ups").hide();
  $(".editpay").hide();
  $('.pay').hide();
  $("#tpass").click(function(){
    if($("#tpass").is(':checked')){
      $(".ups").show();

    }else{
      $(".ups").hide();
    }

  });

  $(".pkc").click(function(){
    $('.pay').show();
    $('.pkc').hide();

  });

  // edit payment form
  $(".epkc").click(function(){
    $('.editpay').show();
    $('.epkc').hide();

  });


  

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


        else if(response == "loginsuccess1"){

          $(".mess").html('<div class="alert alert-success"><strong>Login successful</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location.reload();
            },3000);

        }

        else if(response == "Orderinitiated"){

          $(".mess").html('<div class="alert alert-success"><strong>Order initiated</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location='payment';
            },3000);

        }

        else if(response == "success"){

          $(".mess").html('<div class="alert alert-success"><strong>Operation successful</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location.reload();
            },3000);

        }


        else if(response == 'addedtocart'){

          swal({
              title: "Success!",
              text: "Product  Added to cart",
              timer: 3000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              swal.close();
              window.location="cart";
              
            });

      }

      else if(response == 'statussuccess'){

        swal({
            title: "Success!",
            text: "Status Updated",
            timer: 2000,
            type: 'success',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            swal.close();
            window.location.reload();
            
          });

    }



    else if(response == 'statusfailed'){

      swal({
          title: "Failed!",
          text: "Failed to update",
          timer: 2000,
          type: 'success',
          padding: "2em",
          onOpen: function () {
            swal.showLoading();
          },
        }).then(function (result) {
          swal.close();
          // window.location.reload();
          
        });

  }

      else if(response == 'alreadyincart'){

        swal({
            title: "Notice!",
            text: "Product already in cart",
            timer: 3000,
            type: 'error',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            swal.close();
            
            
          });

    }

        else if(response == "resetlink"){

          $(".mess").html('<div class="alert alert-success"><strong>Reset password link sent to email</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location.reload();
            },3000);

        }

        else if(response == "token_success"){

          $(".mess").html('<div class="alert alert-success"><strong>Password reset successful</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location="login";
            },3000);

        }


        else if(response == "paymentsuccess"){

          $(".mess").html('<div class="alert alert-success"><strong>Order Successful</strong> <div class="spinner-border text-success"></div></div>');
            setTimeout(function(){
              $(".mess").html('');
              
                window.location="success";
            },2000);

        }

        else if(response == "removedfromcart"){

          $(".mess").html('<div class="alert alert-success"><strong>Item removed from cart </strong> <div class="spinner-border text-success"></div></div>');
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

$(document).on('submit','.login1',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=login1',
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


$(document).on('submit','.newpassword',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=newpassword',
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

// add to cart

$(document).on('click','.addtocart',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=addtocart',
      type: 'post',
      data: {"id": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// remove from cart
$(document).on('click','.removefromcart',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=removefromcart',
      type: 'post',
      data: {"id": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// checkout
$(document).on('submit','.checkout',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=checkout',
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



// paymentorder
$(document).on('submit','.pay',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=pay',
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


$(document).on('submit','.editpay',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=editpay',
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



// loading order & payment status
// loading order & payment status
setInterval(function(){

  $('.pcheker').load('processor/processor.php?action=checkpaystatus');
$('.ordcheker').load('processor/processor.php?action=checkorderstatus');





    
},5000);



// approve status

$(document).on('click','.approve',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=processing',
      type: 'post',
      data: {"token": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// approve status

$(document).on('click','.btncomplete',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=complete',
      type: 'post',
      data: {"token": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// reject status

$(document).on('click','.reject',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=reject',
      type: 'post',
      data: {"token": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// payment approve
$(document).on('click','.payapprove',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=payapprove',
      type: 'post',
      data: {"token": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


$(document).on('click','.payreject',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=payreject',
      type: 'post',
      data: {"token": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});





    
})