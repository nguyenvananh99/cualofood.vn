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
                       <h3>Trang thanh toán</h3>
                        <ul>
                            <li><ahref="index.html">Trang chủ</a></li>
                            <li>Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--Checkout page section-->
    <div class="Checkout_section mt-70">
       <div class="container">
            <div class="row">
               <div class="col-12">
                    <div class="user-actions">
                        <h3> 
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Bạn đã có tài khoản ?
                            <a class="Returning" href="#checkout_login" data-bs-toggle="collapse" aria-expanded="true">Bấm vào đây để đăng nhập</a>     

                        </h3>
                         <div id="checkout_login" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <p>Đăng nhập để tiến hành thanh toán</p>  
                                <form action="#">  
                                    <div class="form_group">
                                        <label>Tên hoặc <span>email</span></label>
                                        <input type="text">     
                                    </div>
                                    <div class="form_group">
                                        <label>Mật khẩu  <span>*</span></label>
                                        <input type="text">     
                                    </div> 
                                    <div class="form_group group_3 ">
                                        <button type="submit">Đăng nhập</button>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span> Nhớ tôi </span>
                                        </label>     
                                    </div>
                                    <a href="#">Lấy lại mật khẩu?</a>
                                </form>          
                            </div>
                        </div>    
                    </div>
                    <div class="user-actions">
                        <h3> 
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Đăng nhập với tư cách khách ?
                            <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse"  aria-expanded="true">Click here to enter your code</a>     

                        </h3>
                         <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                            <div class="checkout_info coupon_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Tất cả mã giảm giá</button>
                                </form>
                            </div>
                        </div>    
                    </div>    
               </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Thông tin hoá đơn</h3>
                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <label>Họ <span>*</span></label>
                                    <input type="text">    
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Tên  <span>*</span></label>
                                    <input type="text"> 
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Tên công ty</label>
                                    <input type="text">     
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="country">Quốc gia <span>*</span></label>
                                    <select class="select_option" name="cuntry" id="country"> 
                                        <option value="2">bangladesh</option>      
                                        <option value="3">Algeria</option> 
                                        <option value="4">Afghanistan</option>    
                                        <option value="5">Ghana</option>    
                                        <option value="6">Albania</option>    
                                        <option value="7">Bahrain</option>    
                                        <option value="8">Colombia</option>    
                                        <option value="9">Dominican Republic</option>   

                                    </select>
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Địa chỉ  <span>*</span></label>
                                    <input placeholder="House number and street name" type="text">     
                                </div>
                                <div class="col-12 mb-20">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Thành phố <span>*</span></label>
                                    <input  type="text">    
                                </div> 
                                 <div class="col-12 mb-20">
                                    <label>Quốc gia <span>*</span></label>
                                    <input type="text">    
                                </div> 
                                <div class="col-lg-6 mb-20">
                                    <label>Điện thoại<span>*</span></label>
                                    <input type="text"> 
                                </div> 
                                 <div class="col-lg-6 mb-20">
                                    <label> Địa chỉ email   <span>*</span></label>
                                      <input type="text"> 
                                </div> 
                                <div class="col-12 mb-20">
                                    <input id="account" type="checkbox" data-target="createp_account" />
                                    <a data-bs-toggle="collapse" href="#collapseOne"  aria-controls="collapseOne">Tạo tài khoản ?</a>
                                    <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <label> Mật khẩu   <span>*</span></label>
                                            <input placeholder="password" type="password">  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <input id="address" type="checkbox" data-target="createp_account" />
                                     <a class="righ_0" href="#collapsetwo" data-bs-toggle="collapse" aria-controls="collapsetwo">Ship to a different address?</a>   
                                    <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                       <div class="row">
                                            <div class="col-lg-6 mb-20">
                                                <label>Họ <span>*</span></label>
                                                <input type="text">    
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Tên  <span>*</span></label>
                                                <input type="text"> 
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label>Tên công ty</label>
                                                <input type="text">     
                                            </div>
                                            <div class="col-12 mb-20">
                                                <div class="select_form_select">
                                                    <label for="countru_name">Quốc gia <span>*</span></label>
                                                    <select class="select_option" name="cuntry" id="countru_name"> 
                                                        <option value="2">bangladesh</option>      
                                                        <option value="3">Algeria</option> 
                                                        <option value="4">Afghanistan</option>    
                                                        <option value="5">Ghana</option>    
                                                        <option value="6">Albania</option>    
                                                        <option value="7">Bahrain</option>    
                                                        <option value="8">Colombia</option>    
                                                        <option value="9">Dominican Republic</option>   

                                                    </select>
                                                </div> 
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Địa chỉ  <span>*</span></label>
                                                <input placeholder="House number and street name" type="text">     
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label>Thành phố<span>*</span></label>
                                                <input  type="text">    
                                            </div> 
                                             <div class="col-12 mb-20">
                                                <label>Quốc gia <span>*</span></label>
                                                <input type="text">    
                                            </div> 
                                            <div class="col-lg-6 mb-20">
                                                <label>Điện thoại<span>*</span></label>
                                                <input type="text"> 

                                            </div> 
                                             <div class="col-lg-6">
                                                <label> Địa chỉ email   <span>*</span></label>
                                                  <input type="text"> 

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="order-notes">
                                         <label for="order_note">Ghi chú</label>
                                        <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>    
                                </div>     	    	    	    	    	    	    
                            </div>
                        </form>    
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">    
                            <h3>Đơn hàng của bạn</h3> 
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Toàn bộ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Handbag  fringilla <strong> × 2</strong></td>
                                            <td> 19.000đ </td>
                                        </tr>
                                        <tr>
                                            <td>  Handbag  justo	 <strong> × 2</strong></td>
                                            <td> 19.000đ /td>
                                        </tr>
                                        <tr>
                                            <td>  Handbag elit	<strong> × 2</strong></td>
                                            <td> 19.000đ /td>
                                        </tr>
                                        <tr>
                                            <td> Handbag Rutrum	 <strong> × 1</strong></td>
                                            <td> 19.000đ </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>19.000đ </td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>19.000đ strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>19.000đ </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>     
                            </div>
                            <div class="payment_method">
                               <div class="panel-default">
                                    <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                    <a href="#method" data-bs-toggle="collapse" aria-controls="method">Create an account?</a>   
                                    <div id="method" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div> 
                               <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                    <a href="#collapsedefult" data-bs-toggle="collapse" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></a>   
                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button">
                                    <button  type="submit">Proceed to PayPal</button> 
                                </div>    
                            </div> 
                        </form>         
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->
    <?php
    include "footer.php";
?>
<?php
  require_once "./mvc/views/layouts/footer.php";
?>