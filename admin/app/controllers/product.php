<?php

require_once "./app/core/Controller.php";
    class product extends Controller{
        public function __construct()
        {
          
        }
        public function index(){
            $this->view('product','product',[]);
           

        }
        public function addProduct(){
            $this->view('add-product','product',[]);
           

        }
        public function review(){
            $this->view('review','product',[]);
           

        }
        public function keyword(){
            $this->view('keyword','product',[]);
           

        }
        public function property(){
            $this->view('properties','product',[]);
           

        }
        public function editProduct(){
            $this->view('edit-product','product',[]);
           

        }

        

       
    }
  
    
?>