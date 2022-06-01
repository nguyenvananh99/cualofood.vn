
<?php
require_once "./app/core/controller.php";
 
Class order extends Controller{
    public function __construct()
    {
      
    }
    public function index(){
        $this->view('order','order',[]);
       

    }
    public function addOder(){
        $this->view('add-order','order',[]);
       

    }
    public function shipment(){
        $this->view('shipment','order',[]);
       

    }
    public function return(){
        $this->view('return','order',[]);
       

    }



}
  
    
    









?>
