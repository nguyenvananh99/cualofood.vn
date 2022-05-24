
<?php

require_once "./app/core/Db.php";
require_once "./app/lib/session.php";
session::checkLogin();
require_once "./app/helpers/format.php";

class adminLogin{
    private $db;
    private $fm;
   public function __construct()
   {
        $this->db =new Database();
        $this->fm =new Format();
    }
    public function loginAdmin($admin_username,$admin_password){
        $admin_username = $this->fm->validation( $admin_username);
        $admin_password= $this->fm->validation( $admin_password);
        $admin_username = mysqli_real_escape_string($this->db->link,$admin_username);
        $admin_password= mysqli_real_escape_string($this->db->link,$admin_password);
       
        if(empty($admin_username)||empty($admin_password)){
            $alert ="Không được để trống tài khoản và mật khẩu";
            return $alert;
        }
        else{
            $query = "SELECT * FROM users where username = '$admin_username' AND passs = '$admin_password' LIMIT 1"; 
            $result = $this->db->select($query);
            if($result==FALSE){
                $alert ="Mật khẩu hoặc tài khoản không chính xác";
                return $alert;
                
            }
            else{
               
                $value = $result->fetch_assoc();
                Session::set('adminlogin',true);
                Session::set('adminId',$value['id']);
                Session::set('adminName',$value['fullname']);
                header('location: dashboard');
           
            }
        }
    }
   
}
?>