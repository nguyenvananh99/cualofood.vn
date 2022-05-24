<?php
  require_once "./app/views/layouts/header.php";
?>
<div class="container-fluid offset-3 col-sm-8">
<!-- Button trigger modal -->
<h6 class="m-0 font-weight-bold text-primary">Danh Sách Admin
<button type="button" class="btn btn-primary">
 <a href="./addUser" style="color: white;">Thêm admin</a>
 </button>
    </h6>



<div class="card shadow mb-4">

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Mã nhân viên </th>
            <th> Tên người dùng </th>
            <th>Email </th>
            <th>Mật khẩu</th>
            <th>Chức vụ</th>
            <th>Trang cá nhân </th>
            <th>Thao tác </th>
          </tr>
        </thead>
        <?php
            $data = $UserM->getUser();
            while($result= $data->fetch_assoc()){


?>  
        <tbody>
                     <tr>
            <td>  <?php echo $result['id']; ?>  </td>
            <td>  <?php echo $result['username']; ?> </td>
            <td>  <?php echo $result['email']; ?> </td>
            <td>  <?php echo $result['passs']; ?> </td>
            <td>  <?php echo $result['office']; ?> </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_user" value="admin">
                    <button type="submit" name="edit_btn" class="btn btn-success"> Xem thông tin</button>
                     <!-- <a href="editadmin.php?username=admin" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">EDIT</a> -->
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="admin">
                 <a href="deleteUser?id=<?php echo $result['id'];?>">Xoá nhân viên</a>
                 <?php 
                    

?>  
                </form>
            </td>
          </tr>
          <?php
            }
          ?>
           
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<?php
  require_once "./app/views/layouts/footer.php";
?>
