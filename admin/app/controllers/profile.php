<?php
    require_once "./app/core/Controller.php";
    class profile extends Controller{
        public function __construct()
        {
            $this->view('profile','user');
        }
    }

?>