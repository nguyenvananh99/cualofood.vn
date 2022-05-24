<?php
require_once "./app/core/Controller.php";




    class user extends Controller{
     
        public function index(){
            $this->view('user','user', []);
        }

      
        public function addUser(){
       
            $this->view('add-user','user', []);
        }
        public function deleteUser(){
            $this->view('delete-user','user', []);
        }
        public function profileUser(){
            $this->view('profile','user', []);
        }
    }
  

?>