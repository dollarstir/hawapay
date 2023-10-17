<?php
class userController{

    // show logout dialog
    public function logoutdialog(){
       $message = '
       <div style="display:flex;justify-content:center;align-items:center">
       <p><h3>Are you sure you want to  logout </h3></p>
       </div><br>

        <div class="row">
        
        <div class="col-md-6">
            <button type="button" class="btn btn-danger btn-block " data-izimodal-close="deletemodal" >No</button>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-success btn-block  btnlogout" onclick="">Yes</button>
        </div>
        ';
        return ['type'=>'loaddata','message'=>$message,'loadclass'=>'deletemodalcontent'];
    }
}