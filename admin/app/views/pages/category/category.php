<?php
 require_once "./app/views/layouts/header.php";
?>

<!-- Modal -->
<div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm danh mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">

    <label> Tên danh mục </label>

    <input type="text" name="brandNameAdd" class="form-control" placeholder="Enter Brand">
    
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
<div class="card shadow col-sm-8 offset-3">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh Mục Sản Phẩm 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-category">
  Thêm danh mục
</button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

     <form action="" method="POST">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Tên Danh Mục </th>
           
          
            <th>Thao Tác</th>
          </tr>
        </thead>
        <?php
              $data = $ctM->get_category();
              while($result=$data->fetch_assoc()){


            

    ?>
        <tbody>
                  <tr>
            <td> <?php echo $result['category_id']; ?></td>
            <td> <?php echo $result['category_name']; ?></td>
            

            <td>
                
                  <input type="hidden" name="delete_id" value="Giày">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Xóa</button>
                
            </td>
          </tr>
                  <?php
                        }
                  ?>
          
        </tbody>
      </table>
       

    </form></div>
  </div>
</div>
<?php
 require_once "./app/views/layouts/footer.php";
?>