<?php
require_once "./app/core/Controller.php";




    class promotion extends Controller{
     
        public function index(){
            $this->view('discount','promotion', []);
        }
        public function addDiscount(){
            $this->view('add-discount','promotion', []);
        }

     
    }
  

?>