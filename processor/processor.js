
$(function(){

  // alert('Hello World');

   
    

    function resp(response){

        if(response == "success"){
            $(".mess").html('<div class="alert alert-success"><strong>Operation successful</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
            
        }
        

        
        else{

          $(".mess").html('<div class="alert alert-info"><strong>'+ response + '</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
          

        }


    }

    function before()
{
    
    $(".mess").html('<div class="alert alert-info" role="alert">Please wait <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
  
}



// $('.reg').submit(function(e){

//     e.preventDefault();
//     // before();
//     var user = {
//         url: 'processor/processor.php?action=register',
//         type: 'post',
//         data: new FormData(this),
//         cache: false,
//         contentType: false,
//         processData: false,
//         // beforeSend: before,
//         // success: resp

//     };
//     // $.ajax(user);
// });


$(document).on('submit','.register',function(e){

  e.preventDefault();

  // code
});









    
})