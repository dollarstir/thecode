
$(function(){
   $('#socl').click(function(){
    swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: 'success',
        padding: "2em",
        // target: document.querySelector("html")
      });
   })

    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){

        if(response == "success"){
            $(".mess").html('<div class="alert alert-success"><strong>Operation successful</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
            setTimeout(function(){
                windows.location.reload();
            },3000);
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'loginsuccess'){

          $(".mess").html('<div class="alert alert-success"><strong>Login successful</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
          setTimeout(function(){
              windows.location='home';
          },3000);

        }
        else if(response == 'Updated Successfully'){

          $(".mess").html('<div class="alert alert-success"><strong>Update successful</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
          setTimeout(function(){
              windows.location.reload();
          },3000);

        }


        else if(response == 'loginfailed'){

          $(".mess").html('<div class="alert alert-danger"><strong>Record not found</strong></div>');
          

        }
        else{

          $(".mess").html('<div class="alert alert-info"><strong>'+ response + '</strong> <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
          

        }


    }

    function before()
{
    
    $(".mess").html('<div class="alert alert-info" role="alert">Please wait <img src="template/img/spin.gif" style="width:50px;height:50px;" /></div>');
  
}



$('.register').submit(function(e){

    e.preventDefault();
    // before();
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