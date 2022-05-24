<?php
    class Controller{
        public function __construct()
        {
            
        }
        public function model($model){
            require_once './app/models/'.$model.'.php';
            return new $model;
        }
    
        //method gọi view
        public function view($view,$doc, $data = []){
            require_once './app/views/pages/'.$doc.'/'.$view.'.php';
        }
    }

?>