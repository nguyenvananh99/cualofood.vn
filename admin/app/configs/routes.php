<?php
// Quản lý đường dẫn ảo
$routes['defautl_controller'] ="login";
$routes['trang-quan-ly']='dashboard';

// Đường dẫn khách hàng 
$routes['khach-hang']='customer/index';
$routes['khach-hang/them-moi']='customer/addCustomer';
$routes['khach-hang/xoa']='customer/deleteCustomer';
$routes['khach-hang/chinh-sua']='customer/editCustomer';
$routes['khach-hang/xem']='customer/viewCustomer';
$routes['khach-hang/khach-truc-tuyen']='customer/onlineCustomer';
$routes['khach-hang/cap-bac']='customer/role';

// Đường dẫn đơn hàng
$routes['don-hang']='order/index';
$routes['don-hang/giao-hang']='order/shipment';
$routes['don-hang/tra-hang']='order/return';
$routes['don-hang/the-qua-tang']='order/gift';

// Đường dẫn liên quán đến sản phẩm
$routes['san-pham']='product/index';
$routes['san-pham/them-moi']='product/addProduct';
$routes['san-pham/xoa']='product/deleteProduct';
$routes['san-pham/xem']='product/viewProduct';
$routes['san-pham/chinh-sua']='product/editProduct';
$routes['san-pham/tim-kiem']='product/searchProduct';
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
    $routes['san-pham/thuong-hieu/chinh-sua']='product/editCategory';
    $routes['san-pham/thuong-hieu/xem']='product/viewCategory';
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
$routes['tin-tuc']='post/index';
$routes['tin-tuc/them-moi']='post/addPost';
$routes['tin-tuc/xoa']='post/deletePost';
$routes['tin-tuc/xem']='post/viewPost';
$routes['tin-tuc/chinh-sua']='post/editPost';
       // Chuyên mục 
       $routes['tin-tuc/chuyen-muc']='post/Category';
       $routes['tin-tuc/chuyen-muc/them-moi']='post/addCategory';
       $routes['tin-tuc/chuyen-muc/xoa']='post/deleteCategory';
       $routes['tin-tuc/chuyen-muc/chinh-sua']='post/editCategory';
       $routes['tin-tuc/chuyen-muc/xem']='post/viewCategory';