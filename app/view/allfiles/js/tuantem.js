$(function() {

    // toastr.options.showEasing = 'easeOutBounce';
    // toastr.options.progressBar = true;
    // toastr.success('Have fun storming the castle!', 'Miracle Max Says')


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


    // register form
    $(document).on('submit', '.registerfrm', function(e){
        e.preventDefault();
        var data = new FormData(this);
        var url ='worker?action=registeruser';
        myajax(url,data);   

    });

  
})