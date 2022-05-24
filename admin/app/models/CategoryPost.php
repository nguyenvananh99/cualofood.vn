<?php
require_once "./app/core/Db.php";
    class CategoryPost extends Database{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getPostCategory()
        {
            $query = "SELECT * FROM post_category";
            $result = $this->db->select($query);
            return $result;
        }
        // public function  addUser($username,$password,$fulllname,$birtday,$email,$phone,$address,$office)
        // {  $query = "INSERT INTO `users` (`id`, `username`, `passs`, `fullname`, `birtday`, `email`, `phone`, `address`, `office`) VALUES (NULL, '$username', '$password', '$fulllname', '$birtday', '$email', '$phone', '$address', '$office')";
        //       $insert_row = $this->db->insert($query);
        //       return  $insert_row ;
        // }
        // public function deleteUser($id){
        //    $this->getUser();
        //    $query =  "DELETE FROM users WHERE ID =$id";
        //    $delete_row = $this->db->delete($query);
        //    return $delete_row;

        // }
    }
?>