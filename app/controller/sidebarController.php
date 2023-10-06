<?php

class sidebarController {

    // sidebar view 

    public function sidebar($context= ['page'=>0]) {
        $sidebar = Viewer::view('app/view/sidebar.php', $context);
        return $sidebar;
    }

    

}