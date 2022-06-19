<?php
require_once "./app/core/Db.php";
    class products extends Database{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
		public function total_rows(){
			$query = "SELECT * FROM products";
            $total_row = $this->db->select($query);
			if($total_row!=false && $total_row->num_rows>0){
				return $total_row->num_rows;
			}
			else{
				return $total_row = 0;
			}
			
		}
		public function total_pages(){
			$total_row = $this->total_rows();
			$total_page = ceil($total_row/5);
			return $total_page;
		}
        public function getProduct($start)
        {

			$query1 ="SELECT * FROM products LIMIT $start,5";
			$result = $this->db->select($query1);
			$page = isset($_GET['page']) ?$_GET['page'] : '';
			return $result;

        }
	
		
        public function  addProduct($productName, $productDescription,$productPrice,$productAvatar)
        {  $query = "INSERT INTO `products` (`product_id`,`product_name`, `product_description`, `product_price`,`product_avatar') VALUES ('NULL','$productName', '$productDescription', '$productPrice','$productAvatar')";
              $insert_row = $this->db->insert($query);
              return  $insert_row ;
        }
        public function editProduct($id){
			$query = "SELECT * FROM products WHERE product_id = $id";
           $edit_product = $this->db->delete($query);
           return $edit_product;

        }
        public function countProduct()
		{
			$query =  "SELECT * FROM products";
			$get_row = $this->db->select($query);
			$num_row = mysqli_num_rows($get_row);
			echo $num_row;
        }
		public function searchWithName($keyword,$category,$start)
		{
			$query1 = "SELECT * FROM products WHERE product_id = '$keyword' and product_category= '$category' LIMIT $start,1";
			$result = $this->db->select($query1);
			return $result;
		}
        
            
			
			
        
    }
?>