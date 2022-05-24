
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
                       <h3>Trang liên hệ</h3>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--contact map start-->
    <div class="contact_map mt-70">
       <div class="map-area">
          <div id="googleMap"></div>
       </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message content">
                        <h3>Liên hệ chúng tôi</h3>    
                         
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : 103 Nguyễn Sinh Cung, Nghi Hương, Cửa Lò, Nghệ An</li>
                            <li><i class="fa fa-phone"></i> <a href="#">Admin@cualofood.vn</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0(1234)567890"> (08) 86 827 4713</a>  </li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message form">
                        <h3>Điển thông tin</h3>   
                        <form id="contact-form" method="POST"  action="assets/mail.php">
                            <p>  
                               <label> Tên của bạn</label>
                                <input name="name" placeholder="Name *" type="text"> 
                            </p>
                            <p>       
                               <label>  Địa chỉ email</label>
                                <input name="email" placeholder="Email *" type="email">
                            </p>
                            <p>          
                               <label>  Chủ đề</label>
                                <input name="subject" placeholder="Subject *" type="text">
                            </p>    
                            <div class="contact_textarea">
                                <label>  Nội dung</label>
                                <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
                            </div>   
                            <button type="submit"> Gửi</button>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->
    <?php
  require_once "./mvc/views/layouts/footer.php";
?>