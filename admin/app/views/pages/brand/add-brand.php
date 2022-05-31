
 <?php
 ob_start();
 require_once "./app/views/layouts/header.php"; ?>
 <form action="" method="post">
     <div class="wrapper col-sm-8 offset-3">
         <!-- header  -->
         <div class="content-header clearfix">
             <h1 class="float-left">
                 <font style="vertical-align: inherit;">
                     <font style="vertical-align: inherit;">
                         Thêm một danh mục mới
                 </font>
                 <small class="btn btn-secondary">
                     <i class="fas fa-arrow-circle-left text-light"></i>
                     <a href="<?php echo BASE_URL ?>product/Category">
                         <font class=" text-light" style="vertical-align: inherit;">
                             <font style="vertical-align: inherit;">
                                 Quay lại danh sách
                             </font>
                         </font>
                     </a>
                 </small>
             </h1>
             <div class="float-right">
                 <button type="submit" name="add-brand" class="btn btn-info">
                     <i class="far fa-save"></i>
                     <font style="vertical-align: inherit;">
                         <font style="vertical-align: inherit;">
                             Lưu
                         </font>
                     </font>
                 </button>
                 <button type="submit" name="save_continue_product" class="btn btn-info">
                     <i class="far fa-save"></i>
                     <font style="vertical-align: inherit;">
                         <font style="vertical-align: inherit;">
                             Lưu và Tiếp tục Chỉnh sửa
                         </font>
                     </font>
                 </button>
             </div>
         </div>
         <!-- end header  -->
         <?php
 
         if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add-brand'])) {
            $brand_name=$_POST['brand-name'];
            $brand_logo=$_POST['brand-logo'];
            $brand_website=$_POST['brand-website'];
            $brand_email=$_POST['brand-email'];
            $brand_phone=$_POST['brand-phone'];
            $brand_address=$_POST['brand-address'];
            
            if($brand_name==""|| $brand_logo==""||$brand_website==""||$brand_email==""|| $brand_phone==""||$brand_address==""){
                // echo "<script>alert('Error ! Xin vui lòng nhập đầy đủ thông tin.'); </script> ";
            }
            else{
                echo 'h';
                $brM->addBrand($brand_name, $brand_logo,$brand_website,$brand_phone,$brand_email,$brand_address);
                echo "<script>alert('Done ! Thêm thành viên thành công.'); </script> ";
                header('location: index');
            }
         }
 
 
         ?>
 
         <!-- Content  -->
 
         <div class="content card card-secondary card-outline">
             <div class="card-header with-border clearfix">
                 <div class="card-title">
                     <i class="fas fa-info"></i>
                     Nhập thông tin sản phẩm
                 </div>
                 <div class="card-tools float-right">
                     <button class="btn btn-tool" data-card-widget="collapse" type="button">
                         <i class="fa toggle-icon fa-minus"></i>
                     </button>
                 </div>
             </div>
             <div class="card-body">
                 <div class="form-group row">
                     <div class="col-md-3">
                         <div class="label-wrapper">
                             <label class="col-form-label" for="brand-name">Tên sản phẩm</label>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="input-group input-group-required">
                             <input class="form-control text-box single-line" data-val-required="Please provide a name." id="brand-name" name="brand-name" type="text" value="">
                             <div class="input-group-btn"><span class="required">*</span></div>
                         </div>
                         <span class="field-validation-valid" data-valmsg-for="brand-name" data-valmsg-replace="true"></span>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-3">
                         <div class="label-wrapper">
                             <label class="col-form-label" for="brand-name">Logo</label>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="input-group input-group-required">
                             <input class="form-control text-box single-line" data-val-required="Please provide a name." id="brand-logo" name="brand-logo" type="upload" value="">
                             <div class="input-group-btn"><span class="required">*</span></div>
                         </div>
                         <span class="field-validation-valid" data-valmsg-for="brand-name" data-valmsg-replace="true"></span>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-3">
                         <div class="label-wrapper">
                             <label class="col-form-label" for="brand-email">Email</label>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="input-group input-group-required">
                             <input class="form-control text-box single-line" data-val-required="Please provide a name." id="brand-email" name="brand-email" type="tex" value="">
                             <div class="input-group-btn"><span class="required">*</span></div>
                         </div>
                         <span class="field-validation-valid" data-valmsg-for="brand-email" data-valmsg-replace="true"></span>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-3">
                         <div class="label-wrapper">
                             <label class="col-form-label" for="brand-phone">Phone</label>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="input-group input-group-required">
                             <input class="form-control text-box single-line" data-val-required="Please provide a name." id="brand-phone" name="brand-phone" type="upload" value="">
                             <div class="input-group-btn"><span class="required">*</span></div>
                         </div>
                         <span class="field-validation-valid" data-valmsg-for="brand-phone" data-valmsg-replace="true"></span>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-3">
                         <div class="label-wrapper">
                             <label class="col-form-label" for="brand-website">Website</label>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="input-group input-group-required">
                             <input class="form-control text-box single-line" data-val-required="Please provide a name." id="brand-website" name="brand-website" type="text" value="">
                             <div class="input-group-btn"><span class="required">*</span></div>
                         </div>
                         <span class="field-validation-valid" data-valmsg-for="brand-website" data-valmsg-replace="true"></span>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-md-3">
                         <div class="label-wrapper">
                             <label class="col-form-label" for="brand-address">Address</label>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="input-group input-group-required">
                             <input class="form-control text-box single-line" data-val-required="Please provide a name." id="brand-address" name="brand-address" type="text" value="">
                             <div class="input-group-btn"><span class="required">*</span></div>
                         </div>
                         <span class="field-validation-valid" data-valmsg-for="brand-address" data-valmsg-replace="true"></span>
                     </div>
                 </div>
                
                
             </div>
         </div>
         <!-- End card 1  -->
         <!-- End product infomation  -->
 
         <!-- Card 2  -->
       
     </div>
 
 </form>
 
 <!-- Product infomation  -->
 
 <!-- End card 2  -->
 
 <!-- End content  -->
 </div>
 
 <?php require_once "./app/views/layouts/footer.php";
 ob_flush();
 ?>