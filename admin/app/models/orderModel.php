<?php
require_once "./app/helpers/format.php";
require_once "./app/lib/session.php";
require_once "./app/core/Db.php";

    class orderModel{
        public function __construct()
        {
             $this->db =new Database();
             $this->fm =new Format();
             
             
         }
         public function getOrder(){
            $query = "SELECT * FROM orders";
            $result = $this->db->select($query);
            return $result;
         }
         
    }

?>