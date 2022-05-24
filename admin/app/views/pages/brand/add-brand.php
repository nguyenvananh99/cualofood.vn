
<?php
ob_start();
 require_once "./app/views/layouts/header.php";

 if(isset($_POST['add-brand'])) {
    $brand_name=$_POST['brand-name'];
    $brand_logo=$_POST['brand-logo'];
    $brand_website=$_POST['brand-website'];
    $brand_email=$_POST['brand-email'];
    $brand_phone=$_POST['brand-phone'];
    $brand_address=$_POST['brand-address'];
    if($brand_name==""|| $brand_logo==""||$brand_website==""||$brand_email==""|| $brand_phone==""||$brand_address==""){
        echo "<script>alert('Error ! Xin vui lòng nhập đầy đủ thông tin.'); </script> ";
    }
    else{
        $data = $brM->addBrand();
        echo "<script>alert('Done ! Thêm thành viên thành công.'); </script> ";
        header('location: ./index');
    }

 }
?>
<div class="add-brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 offset-3">
            <h2 class="text-info">Thêm thương hiệu </h2>
    

                
               <form method="post">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <tbody>
                       <tr>
    
                           <td class="form-group">Tên thương hiệu</td>
                           <td> <input type="text" name="brand-name"></td>
                       </tr>
                       <tr>
                           <td>Số điện thoại</td>
                           <td> <input type="text" name="brand-phone"></td>
                       </tr>
                       <tr>
                           <td>Địa chỉ</td>
                           <td> <input type="text" name="brand-address"></td>
                       </tr>
                       <tr>
                           <td>Email</td>
                           <td> <input type="text" name="brand-email"></td>
                       </tr>
                       <tr>
                           <td>Website</td>
                           <td> <input type="text" name="brand-website"></td>
                       </tr>
                       <tr>
                           <td>Logo</td>
                           <td> <input type="file" name="brand-logo"></td>
                       </tr>
                       <tr>
                           <td><button class="btn btn-info" type="submit" name="add-brand">Thêm</button></td>
                           <td><button class="btn btn-danger" type="reset" name="reset-brand">Reset</button></td>
                       </tr>
                       
                       
                   </tbody>
                </table>
               </form>
            </div>
        </div>
    </div>
</div>


<?php
 require_once "./app/views/layouts/footer.php";
 ob_flush();
?>