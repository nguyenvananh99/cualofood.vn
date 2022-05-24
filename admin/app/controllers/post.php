<?php
require_once "./app/core/Controller.php";
    class post extends Controller{
        public function __construct()
        {
           
        }
        public function index(){
            $this->view('post','post',[]);
        }
        public function addPost(){
            $this->view('add-post','post',[]);
        }
    }


?>