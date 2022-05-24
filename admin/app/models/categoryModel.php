
<?php

require_once "./app/core/Db.php";
require_once "./app/lib/session.php";
require_once "./app/helpers/format.php";

class categoryModel{
    private $db;
    private $fm;
   public function __construct()
   {
        $this->db =new Database();
        $this->fm =new Format();
        
    }
    
    
public function count_category(){
    $query = "SELECT * FROM categorys ORDER BY category_id DESC";
    $result = $this->db->select($query);
    echo $result->num_rows;

}
public function get_category_product(){
    $query = "SELECT * FROM product_category";
    $result = $this->db->select($query);
    return $result;
   
}
public function get_category_post(){
    $query = "SELECT * FROM post_category";
    $result = $this->db->select($query);
    return $result;
   
}
   
}
?>