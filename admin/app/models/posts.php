<?php
require_once "./app/core/Db.php";
    class posts extends Database{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getPost()
        {
            $query = "SELECT * FROM users";
            $result = $this->db->select($query);
            return $result;
        }
        public function  addPost($username,$password,$fulllname,$birtday,$email,$phone,$address,$office)
        {  $query = "INSERT INTO `users` (`id`, `username`, `passs`, `fullname`, `birtday`, `email`, `phone`, `address`, `office`) VALUES (NULL, '$username', '$password', '$fulllname', '$birtday', '$email', '$phone', '$address', '$office')";
              $insert_row = $this->db->insert($query);
              return  $insert_row ;
        }
        public function deletePost($id){
           $this->getPost();
           $query =  "DELETE FROM users WHERE ID =$id";
           $delete_row = $this->db->delete($query);
           return $delete_row;

        }
    }
?>