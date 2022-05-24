<?php
require_once "./app/core/Controller.php";
    class postCategory extends Controller{
        public function index(){
            $this->view('postCategory','category',[]);
        }
        public function addPCategory(){
            $this->view('add-postCategory','category',[]);
        }
        
        public function deletePCategory(){
            $this->view('delete-postCategory','category',[]);
        }



    }

?>