$(function() {

    // toastr.options.showEasing = 'easeOutBounce';
    // toastr.options.progressBar = true;
    // toastr.success('Have fun storming the castle!', 'Miracle Max Says')



    // edit  modal trigger 
    $("#editmodal").iziModal({
        headerColor: "#5a8dee",
        radius: 30,
        width: 600,
        top: 100,
        bottom: 100,
    });

    // delete modal trigger
    $("#deletemodal").iziModal({
        headerColor: "#ff5b5c",
        radius: 30,
        width: 600,
        top: 100,
        bottom: 100,
    });


    // add modal 
    $("#addmodal").iziModal({
        headerColor: "#5a8dee",
        radius: 30,
        width: 600,
        top: 100,
        bottom: 100,
    });

      // verify modal modal 
    $("#verifyid").iziModal({
        headerColor: "#5a8dee",
        radius: 30,
        width: 600,
        top: 100,
        bottom: 100,
    });




    // close modal 
    function closeModal(modalid) {
        $('#'+modalid).iziModal('close');

    }

    function isloading(){
        $('.statusloading').show();
    }


    function resp(response){
        console.log(response);

        var data = JSON.parse(response);

        if(data.type == 'success'){
            toastr.success(data.message, 'Success');
            $('.statusloading').hide();
            if(data.action == 'reload'){
                setTimeout(function(){
                    window.location.reload();
                }, 1000);
            }
            else if(data.action == ''){
                //do nothing
            }
            else{
                setTimeout(function(){
                    window.location.href = data.action;
                }, 1000);
            }
        }

        else if(data.type == 'loaddata'){
            $('.statusloading').hide();
            $('.'+data.loadclass).html(data.message);


        }
        else{
            toastr.error(data.message, 'Error');
            $('.statusloading').hide();
        }
        
    }



        // handling ajax
    function myajax(url,data,eventtype='form',type='POST'){

        var  options = {
            url : url,
            type :type,
            data :data,
            beforeSend : isloading,
            success : resp,
            error : function(){
                toastr.error('Something went wrong', 'Error');
            },
        };
        if(eventtype == 'form'){
            options.cache = false;
            options.contentType = false;
            options.processData = false;
        }
        //  call the ajax function
        $.ajax(options);
    }

    // 


    // register form
    $(document).on('submit', '.registerfrm', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=registeruser';
        myajax(url,data);   

    });


    // login form

    $(document).on('submit', '.loginfrm', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=loginuser';
        myajax(url,data);   

    });


    // addprimary Number 

    $(document).on('submit', '.addprimary', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=addprimaryphone';
        myajax(url,data);   

    });

    // verify otp for primary number

  
    $(document).on('submit', '.frmotp', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=verifyotp';
        myajax(url,data);   

    });


    // show logout prompt
    $(document).on('click', '.logoutopt', function(e){
        e.preventDefault();
        var url ='worker?action=logoutdialog';
        var data = {};
        myajax(url,data,'','GET');   

    });

    // logout btn 
    $(document).on('click', '.btnlogout', function(e){
        e.preventDefault();
        var url ='worker?action=logout';
        var data = {};
        myajax(url,data,'','GET');  


    });

    // edit general info
    $(document).on('submit', '.editgeneral', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=editgeneral';
        myajax(url,data);   

    });


    // show verification id form 

      // show logout prompt
      $(document).on('click', '.verifyidopt', function(e){
        e.preventDefault();
        var url ='worker?action=verifyiddialog';
        var data = {};
        myajax(url,data,'','GET');   

    });



    function loadData(className, functionName, tableID) {
        $.ajax({
          url:
            "worker?action=loaddata&class=" +
            className +
            "&function=" +
            functionName +
            "",
          type: "GET",
          // dataType: 'html',
          beforeSend: function () {
            $(".lmask").attr("style", "display:block !important;");
          },
          success: function (data) {
            console.log(data);
            $(".lmask").attr("style", "display:none !important;");
            $("#" + tableID).html(data);
          },
        });
      }



    

    


    

  
})