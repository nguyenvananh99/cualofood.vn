<?php
 require_once "./app/views/layouts/header.php";
?>

     
      <form action="" method="POST">

        <div class="modal-body col-sm-8 offset-3">
            <h2 class="text-info">Thêm danh mục bài viết </h2>

            <div class="form-group">

                <label> Tên Danh Mục </label>
                <input type="text" name="namepcategory" class="form-control" placeholder="Nhập vào tên của danh mục">
            </div>
            <div class="form-group">
              <label>Mô tả</label>
                <input type="text" name="description" class="form-control" placeholder="Nhập vào thông tin mô tả">
            </div>
            
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
        </div>
      </form>

    </div>
  </div>
  <?php
 require_once "./app/views/layouts/footer.php";
?>