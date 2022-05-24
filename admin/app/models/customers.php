<?php
require_once "./app/core/Db.php";
    class customers extends Database{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getCustomer()
        {
            $query = "SELECT * FROM customer";
            $result = $this->db->select($query);
            return $result;
        }
        public function  addCustomer($username,$password,$fulllname,$birtday,$email,$phone,$address,$office)
        {  $query = "INSERT INTO `users` (`id`, `username`, `passs`, `fullname`, `birtday`, `email`, `phone`, `address`, `office`) VALUES (NULL, '$username', '$password', '$fulllname', '$birtday', '$email', '$phone', '$address', '$office')";
              $insert_row = $this->db->insert($query);
              return  $insert_row ;
        }
        public function deleteCustomer($id){
           $this->getCustomer();
           $query =  "DELETE FROM users WHERE ID =$id";
           $delete_row = $this->db->delete($query);
           return $delete_row;

        }
    }
?>