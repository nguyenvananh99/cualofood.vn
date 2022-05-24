
<?php

require_once "./app/core/Db.php";

class brands extends Database{
    private $db;
   public function __construct()
   {
        $this->db = new Database();
        
    }
public function get_brand(){
    $query = "SELECT * FROM brands";
    $result = $this->db->select($query);
    return $result;
   
}
public function addBrand(){
    echo 'he;;o';
    $query = "INSERT INTO `brands`(`brand_id`,`brand_name`,`brand_logo,`brand_website`,`brand_email`,`brand_phone`,`brand_address`)VALUES (NULL,'$brand_name','$brand_logo','$brand_website','$brand_email','$brand_phone','$brand_address')";
    $insert_row = $this->db->insert($query);

    return  $insert_row ;

}
   
}
?>