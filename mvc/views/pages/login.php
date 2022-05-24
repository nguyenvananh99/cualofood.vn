
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
                       <h3>Trang đăng nhập</h3>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đăng nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đăng nhập</h2>
                        <form action="#">
                            <p>   
                                <label>Tài khoản hoặc email <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>   
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password">
                             </p>   
                            <div class="login_submit">
                               <a href="#">Quên mật khẩu?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Nhớ tôi
                                </label>
                                <button type="submit">Đăng nhập</button>
                                
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đăng ký</h2>
                        <form action="#">
                            <p>   
                                <label>Địa chỉ email  <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>   
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password">
                             </p>
                            <div class="login_submit">
                                <button type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->
    <?php
  require_once "./mvc/views/layouts/footer.php";
?>