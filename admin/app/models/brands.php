<?php
require_once "./app/core/Db.php";
    class brands extends Database{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
		public function total_rows(){
			$query = "SELECT * FROM brands";
            $total_row = mysqli_num_rows($this->db->select($query));
			return   $total_row;
		}
		public function total_pages(){
			$total_row = $this->total_rows();
			$total_page = ceil($total_row/5);
			return $total_page;
		}
        public function getBrand($start)
        {

			$query1 ="SELECT * FROM brands LIMIT $start,5";
			$result = $this->db->select($query1);
			$page = isset($_GET['page']) ?$_GET['page'] : '';
			return $result;
        }
		public function getAllBrand()
        {

			$query1 ="SELECT * FROM brands";
			$result = $this->db->select($query1);
			return $result;
        }
	
		
        public function  addBrand($brand_name, $brand_logo,$brand_website,$brand_phone,$brand_email,$brand_address)
        {  $query = "INSERT INTO `brands` (`brand_id`,`brand_name`, `brand_logo`, `brand_website`,`brand_phone`,`brand_email`,`brand_address`) VALUES (NULL,'$brand_name', '$brand_logo','$brand_website','$brand_phone','$brand_email','$brand_address')";
              $insert_row = $this->db->insert($query);
              return  $insert_row ;
        }
        // public function deleteProduct($id){
        //    $this->getBrand();
        //    $query =  "DELETE FROM users WHERE ID =$id";
        //    $delete_row = $this->db->delete($query);
        //    return $delete_row;

        // }
        public function countProduct()
		{
			$query =  "SELECT * FROM products";
			$get_row = $this->db->select($query);
			$num_row = mysqli_num_rows($get_row);
			echo $num_row;
        }
        public function update_product($data,$files, $productName){
			
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$description = mysqli_real_escape_string($this->db->link, $data['description']);

			$permited=array('jpg','jpeg','png','gif');
	    	$file_name=$_FILES['image']['name'];
	    	$file_size=$_FILES['image']['size'];
	    	$file_temp=$_FILES['image']['tmp_name'];

	    	$div=explode('.', $file_name);
	    	$file_ext=strtolower(end($div));
	    	$unique_image=substr(md5(time()), 0, 10).'.'.$file_ext;
	    	$uploaded_image="uploads/".$unique_image;

			
				if(!empty($file_name)){
					if($file_size > 1048567){
						$alert = "<span>Kích thước ảnh quá lớn</span>";
						return $alert;
					}
					elseif (in_array($file_ext,$permited) === false) 
					{
						$alert = "<span>Bạn chỉ có thể cập nhật:-".implode(', ',$permited)."</span>";
						return $alert;
					}
					$query = "UPDATE tbl_product 
							  SET productName = '$productName' , 
							      price = '$price', 
							      description = '$description' , 
							      image = '$unique_image' 						       
							    WHERE productName = '$productName'";

				}else{
					$query = "UPDATE tbl_product 
							  SET productName = '$productName' ,
							  	 
							  	  price = '$price', 
							  	  description = '$description'  
							  	   
							  WHERE productName = '$productName'";
				}
			

				
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='text-success >Update thành công</span";
					return $alert;

				}
				else{
					$alert = "<span class='text-success >Update không thành công</span";
					return $alert;	
				}
            }
			
			
        
    }
?>