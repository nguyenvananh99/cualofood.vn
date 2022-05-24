
<?php
  require_once "./mvc/views/layouts/header.php";
?>
<?php
  require_once "./mvc/views/layouts/slide.php";
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>Giỏ hàng</h3>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">  
            <form action="#"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page">
                                <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Xoá</th>
                                    <th class="product_thumb">Hình ảnh</th>
                                    <th class="product_name">Sản phẩm</th>
                                    <th class="product-price">Xoá</th>
                                    <th class="product_quantity">Tổng</th>
                                    <th class="product_total">Tổng thanh toán</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Dưa hấu</a></td>
                                    <td class="product-price">21.000đ</td>
                                    <td class="product_quantity"><label>Tổng</label> <input min="1" max="100" value="1" type="number"></td>
                                    <td class="product_total">30.000đ</td>


                                </tr>

                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Dưa leo</a></td>
                                    <td class="product-price">12.000đ</td>
                                    <td class="product_quantity"><label>Tổng</label> <input min="1" max="100" value="1" type="number"></td>
                                    <td class="product_total">20.000đ</td>


                                </tr>
                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Dưa chuột</a></td>
                                    <td class="product-price">13.000đ</td>
                                    <td class="product_quantity"><label>Tổng</label> <input min="1" max="100" value="1" type="number"></td>
                                    <td class="product_total">26.000đ</td>


                                </tr>

                            </tbody>
                        </table>   
                            </div>  
                            <div class="cart_submit">
                                <button type="submit">Cập nhật giỏ hàng</button>
                            </div>      
                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Mã giảm giá</h3>
                                <div class="coupon_inner">   
                                    <p>Nhập mã giảm giá của bạn</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Sử dụng</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Tổng thanh toán</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Tiền</p>
                                       <p class="cart_amount">30.000đ</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Ship</p>
                                       <p class="cart_amount"><span>Phí ship:</span> 25.000đ</p>
                                   </div>
                                   <a href="#">Tính toán phi ship</a>

                                   <div class="cart_subtotal">
                                       <p>Tổng cộng</p>
                                       <p class="cart_amount">300.000đ</p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="checkout">Xác nhận thanh toán</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form> 
        </div>     
    </div>
     <!--shopping cart area end -->
         
     <?php
  require_once "./mvc/views/layouts/footer.php";
?>