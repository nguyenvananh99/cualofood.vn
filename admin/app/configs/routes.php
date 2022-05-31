<?php
// Quản lý đường dẫn ảo
$routes['defautl_controller'] ="login";
$routes['ban-thu']='demo';
// Đường dẫn liên quán đến sản phẩm
$routes['san-pham']='product/index';
$routes['san-pham/them-moi']='product/addProduct';
$routes['san-pham/xoa']='product/deleteProduct';
$routes['san-pham/xem']='product/viewProduct';
$routes['san-pham/chinh-sua']='product/editProduct';
    // Từ khoá 
    $routes['san-pham/tu-khoa']='product/keyword';
    $routes['san-pham/tu-khoa/them-moi']='product/addKeyword';
    $routes['san-pham/tu-khoa/xoa']='product/deleteKeyword';
    $routes['san-pham/tu-khoa/chinh-sua']='product/editKeyword';
    $routes['san-pham/tu-khoa/xem']='product/viewKeyword';
    // Chuyên mục 
    $routes['san-pham/chuyen-muc']='product/Category';
    $routes['san-pham/chuyen-muc/them-moi']='product/addCategory';
    $routes['san-pham/chuyen-muc/xoa']='product/deleteCategory';
    $routes['san-pham/thuong-hieu/chinh-sua']='product/editBrand';
    $routes['san-pham/thuong-hieu/xem']='product/viewBrand';
    // Thương hiệu 
    $routes['san-pham/thuong-hieu']='product/brand';
    $routes['san-pham/thuong-hieu/them-moi']='product/addBrand';
    $routes['san-pham/thuong-hieu/xoa']='product/deleteBrand';
    $routes['san-pham/thuong-hieu/chinh-sua']='product/editBrand';
    $routes['san-pham/thuong-hieu/xem']='product/viewBrand';
    // Đánh giá 
    $routes['san-pham/danh-gia']='product/review';
    $routes['san-pham/danh-gia/xem']='product/viewReview';
    // Thuộc tính 
    $routes['san-pham/thuoc-tinh']='product/property';
    $routes['san-pham/thuoc-tinh/xem']='product/viewProperty';



    

// Đường dẫn liên quán đến sản phẩm tin tức 
$routes['tin-tuc/(.+)']='post/1/2';