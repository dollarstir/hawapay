<?php

class headerController{


    public function header($context = []){
        return Viewer::view('app/view/header.php', $context);

    }

}