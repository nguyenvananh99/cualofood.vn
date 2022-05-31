<?php
// Product controller 
// Thực hiện xử lý và liên kết với model và view của product 
require_once "./app/core/Controller.php";
    class product extends Controller{
        public function __construct()
        {
          
        }
        // Trang chủ sản phẩm 
        public function index()
        {
            $this->view('product','product',[]);
        }
        public function viewProduct()
        {
            $this->view('add-product','product',[]);
        }
        // Thêm sản phẩm 
        public function addProduct()
        {
            $this->view('add-product','product',[]);
        }
        // Đánh giá sản phẩm 
        public function review()
        {
            $this->view('review','product',[]);
        }
        // Từ khoá sản phẩm 
        public function addKeyword()
        {
            $this->view('add-keyword','product',[]);
        }
        // Thêm từ khoá sản phẩm 
        public function keyword()
        {
            $this->view('keyword','product',[]);
        }
        // Thuộc tính sản phẩm
        public function property()
        {
            $this->view('properties','product',[]);
        }
        // Sửa sản phẩm 
        public function editProduct()
        {
            $this->view('edit-product','product',[]);
        }
        // Chuyên mục sản phẩm 
        public function Category()
        {
            $this->view('productCategory','category',[]);
        }
        // Thêm chuyên mục sản phẩm
        public function addCategory()
        {
            $this->view('add-productCategory','category',[]);
        }
        // Brand sản phẩm 
        public function brand(){
            $this->view('brand','brand',[]);
         }
         public function addBrand(){
          $this->view('add-brand','brand',[]);
        }
        public function deleteBrand(){
    
        }
        public function updateBrand(){
    
        }
    
   

}
?>