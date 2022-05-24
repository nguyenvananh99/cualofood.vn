
<?php
 class category{
     public function __construct()
     {
     }
     public function productCategory(){
         echo 'productCategory';
        require_once "./app/views/pages/category.php";
     }
     public function postCategory(){
        echo 'postCategory';
        require_once "./app/views/pages/category.php";
     }


     
     
 }


?>