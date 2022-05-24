<?php
 require_once "./app/views/layouts/header.php";
?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        
      </div>
     
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group">

                <label> Tên Danh Mục </label>
                <input type="text" name="catName" class="form-control" placeholder="Enter Category name">
            </div>
            <div class="form-group">
              <label>Size</label>
                <input type="text" name="catSize" class="form-control" placeholder="Enter Size">
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