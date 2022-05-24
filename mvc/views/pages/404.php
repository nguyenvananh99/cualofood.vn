
<?php
  require_once "./mvc/views/layouts/header.php";
?>


  <!--header area end-->
    
    <!--error section area start-->
    <div class="error_section">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>404</h1>
                        <h2>Xin lỗi! TRANG BẠN TÌM KIẾM KHÔNG TỒN TẠI.</h2>
                        
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                        <a href="index.html">Quay trở lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--error section area end--> 
    <?php
  require_once "./mvc/views/layouts/footer.php";
?>