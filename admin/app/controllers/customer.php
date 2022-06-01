<?php
require_once "./app/core/Controller.php";
    class customer extends Controller{
     
        public function index(){
            $this->view('customer','customer', []);
        }
        public function role(){
            $this->view('role','customer', []);
        }
        public function addCustomer(){
       
            $this->view('add-customer','customer', []);
        }
        public function deleteCustomer(){
            $this->view('delete-customer','customer', []);
        }
        public function editCustomer(){
            $this->view('edit-customer','customer', []);
        }
        public function profileCustomer(){
            $this->view('profile','customer', []);
        }
        public function onlineCustomer(){
            $this->view('online-customer','customer', []);
        }
    }
  

?>