<?php

require_once "./app/core/Controller.php";
class productCategory extends Controller{
    public function __construct()
    {
      
    }
    public function index(){
        $this->view('productCategory','category',[]);
       

    }
    public function addCategory(){
        $this->view('add-productCategory','category',[]);
       

    }
   

}
?>