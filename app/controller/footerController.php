<?php
class footerController{

    public function footer($context = []){
        return Viewer::view('app/view/footer.php', $context);

    }
}