<?php
require_once "./app/core/Controller.php";
require_once "./app/lib/session.php";
    class logout extends Controller{
        public function __construct()
        {
            if($_GET['logout']='true'){
                Session::destroy();
            }
            $this->view('logout','function');
        }
    }

?>