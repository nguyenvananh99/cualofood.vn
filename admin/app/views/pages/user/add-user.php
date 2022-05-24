
<?php
ob_start();
 require_once "./app/views/layouts/header.php";

?>
  
<div class="modal-content col-sm-8 offset-3">
  
      <form action="" method="POST">
      <?php
      if($_SERVER['REQUEST_METHOD'] =="POST"){
          echo 'Nhận post';
        if(isset($_POST['addUser'])){
            echo 'nhận btn';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $birtday = $_POST['birtday'];
            $office = $_POST['office'];
            $phone = $_POST['phone'];
            $confirmpass =$_POST['confirmpassword'] ;
            if($username==""||$password==""||$email==""||$fullname==""||$address==""||$birtday==""||$office==""||$phone==""||$confirmpass==""){
                echo "<script>alert('Error ! Xin vui lòng nhập đầy đủ thông tin.'); </script> ";
            }
            else{
                $data = $UserM->addUser($username,$password,$fullname,$birtday,$email,$phone,$address,$office);
                echo "<script>alert('Done ! Thêm thành viên thành công.'); </script> ";
                header('location: ./index');
            }

      }
    }
    
?>  
        <div class="modal-body">
            <input type="hidden" name="delete_id" value="">
            <div class="form-group">
                <label> Tên Người Dùng </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
             <div class="form-group">
                <label>Họ và tên</label>
                <input type="name" name="fullname" class="form-control" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Mật Khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Xác Nhận Mật Khẩu</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
              <label>Chức Vụ</label>
                <select name="office" class="form-control">
                  <option value="Admin">Admin</option>
                  <option value="Nhân viên">Nhân viên</option>
                </select>
            </div>
            <div class="form-group">
              <label>Ngày sinh</label>
              <input type="date" name="birtday" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" placeholder="Nhập số điện thoại">
            </div>
        
        </div>
        <div class="modal-footer">

            <button type="submit" name="addUser" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
    <?php
 require_once "./app/views/layouts/footer.php";
 ob_flush();
?>
