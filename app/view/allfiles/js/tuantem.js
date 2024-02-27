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
        radius: 10,
        width: 300,
        // top: 100,
        // bottom: 100,
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

    function openEazyModal(title, headerColor = "#5a8dee", width = 600, openFullscreen = false,focusInput = false) {
        $("#eazyModal").iziModal('destroy');

    // Determine device width and adjust modal settings accordingly
    var windowWidth = $(window).width();
    var modalWidth = 600; // Default width for larger screens
    var isFullscreen = openFullscreen; // Default to the passed in value for fullscreen

    // Adjust for smaller screens
    if(windowWidth < 768) { // Example breakpoint for mobile devices
        modalWidth = windowWidth * 0.9; // Take up 90% of screen width
        isFullscreen = true; // Consider always using fullscreen on very small screens
    }

    $("#eazyModal").iziModal({
        title: title,
        headerColor: headerColor,
        width: modalWidth,
        top: 100,
        bottom: 100,
        radius: 15,
        padding: 20,
        transform: 'translateY(-50%)',
        closeOnEscape: false,
        openFullscreen: isFullscreen, // Use the dynamically set value
        focusInput: focusInput,
        overlay: true,
        overlayClose: false,
        onOpening: function(modal){
            modal.startLoading();
        },
        onOpened: function(modal){
            modal.stopLoading();
        },
    });
    
        $("#eazyModal").iziModal('open'); // Open the modal
    }




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
    
    //  deposit btn

    $(document).on('click', '.btndepo', function(e){
        e.preventDefault();
        openEazyModal("Deposit Funds", "#5a8dee", 300, false, true);
        $('.universalcontent').load('depositform');
        

        
    });


    // chnage password
    $(document).on('submit', '.changepassword', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=changepassword';
        myajax(url,data);     
    });

    // step wizard 
    function showStep2() {
        $('#step2-tab').tab('show');
      }
    
      // Function to return to step 1 (if needed)
      function showStep1() {
        $('#step1-tab').tab('show');
      }





    

    


    

  
})


// Now, progressColor holds the color that should be used for the progress circle
