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
        public function countProduct(){
            $query = "SELECT count(product_id) from products";
            $total_records = $this->db->select($query);
            return   $total_records ["num_rows"];

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
?>