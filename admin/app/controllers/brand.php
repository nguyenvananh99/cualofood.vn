<?php
require_once "./app/core/Controller.php";
 class brand extends Controller{
     public function __construct()
     {
      
     }
     public function index(){
        $this->view('brand','brand',[]);
     }
     public function addBrand(){
      $this->view('add-brand','brand',[]);
    }
    public function deleteBrand(){

    }
    public function updateBrand(){

    }

 }


?>