<?php
require_once "./app/core/Db.php";
    class products extends Database{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getProduct()
        {
            $query = "SELECT * FROM products";
            $result = $this->db->select($query);
            return $result;
        }
        public function  addProduct($username,$password,$fulllname,$birtday,$email,$phone,$address,$office)
        {  $query = "INSERT INTO `users` (`id`, `username`, `passs`, `fullname`, `birtday`, `email`, `phone`, `address`, `office`) VALUES (NULL, '$username', '$password', '$fulllname', '$birtday', '$email', '$phone', '$address', '$office')";
              $insert_row = $this->db->insert($query);
              return  $insert_row ;
        }
        public function deleteProduct($id){
           $this->getProduct();
           $query =  "DELETE FROM users WHERE ID =$id";
           $delete_row = $this->db->delete($query);
           return $delete_row;

        }
    }
?>