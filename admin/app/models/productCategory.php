<?php
require_once "./app/core/Db.php";
class productCategory extends Database
{
    public function __construct()
    {
        $this->db = new Database();
    }
    public function total_rows()
    {
        $query = "SELECT * FROM product_category";
        $total_row = mysqli_num_rows($this->db->select($query));
        return  $total_row;
    }
    public function total_pages()
    {
        $total_row = $this->total_rows();
        $total_page = ceil($total_row / 5);
        return $total_page;
    }
    public function getProductCategory($start)
    {
        $query1 = "SELECT * FROM product_category  ";
        $result = $this->db->select($query1);
        $page = isset($_GET['page']) ? $_GET['page'] : '';
        return $result;
    }
    public function getAllProductCategory()
    {
        $query1 = "SELECT * FROM product_category  ";
        $result = $this->db->select($query1);
        return $result;
    }
  


    public function  addProductCategory($product_category_name, $product_category_description, $product_category_img)
    {
        $query = "INSERT INTO `product_category` (`product_category_id`,`product_category_name`, `product_category_description`, `product_category_img`) VALUES (NULL,'$product_category_name', '$product_category_description', '$product_category_img')";
        $insert_row = $this->db->insert($query);
        return  $insert_row;
    }
}
