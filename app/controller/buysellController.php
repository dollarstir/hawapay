<?php 
class buysellController{


    // buy sell widget 

    public function buysellwidget($context = []){

        return Viewer::view('app/view/buysell_widget.php', $context);

    }

}