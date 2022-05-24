<?php
require_once "./app/core/Controller.php";

    class login extends Controller{
     
        public function __construct()
        {
            $this->view('login','function',[]);
        }
        // public function index(){
            
        // }
      
    }

?>