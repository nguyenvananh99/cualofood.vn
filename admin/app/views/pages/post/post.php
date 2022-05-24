<?php
  require_once "./app/views/layouts/header.php";
?>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm bài viết</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-sm-8 offset-3">
        

<div class="form-group">

    <label> Tiêu đề </label>
    <input type="text" name="productName" class="form-control" placeholder="Enter Product">
</div>
 <div class="form-group">

</div>
 <div class="form-group">
  <label>Danh mục</label>
    <select id="category" name="category" class="form-control">
        <option>Chọn Danh Mục</option>

                                         <option value="26" data-name="Giày">Giày</option>
                                                 <option value="21" data-name="Áo">Áo</option>
                                                 <option value="12" data-name="Quần">Quần</option>
                
    </select>
</div>
 
<div class="form-group">

    <label> Mô Tả </label>
    <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace('editor1');
                </script>

</div>
<div class="form-group">

    <label> Ảnh </label>
    <input type="file" name="image" class="form-control">
</div>

<div class="form-group">

    <label> Từ khoá </label>
    <input type="text" name="productName" class="form-control" placeholder="Enter Product">
</div>

<div class="form-group">

    <label> Tác giả </label>
    <input type="text" name="productName" class="form-control" placeholder="Enter Product">
</div>
<!--             <div class="form-group">

    <label> Image Thumbnail </label>
    <input type="file" name="thumb1" class="form-control" >
    <input type="file" name="thumb2" class="form-control" >
    <input type="file" name="thumb3" class="form-control" >
    <input type="file" name="thumb4" class="form-control" >
</div> -->


</div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="card shadow mb-4 col-sm-8 offset-3">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh Sách bài viết

            <button type="button" class="btn btn-primary offset-3" data-toggle="modal" data-target="#exampleModal">
  Thêm sản phẩm
</button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

     <form action="" method="POST">
      <div class="scroll">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Ảnh </th>
            <th> Tiêu đề </th>
            <th> Danh Mục </th>
            <th> Tác giả</th>
            <th> Ngày đăng </th>
           
            <th> Chi Tiết </th>
            <th> Thao tác </th>
          </tr>
        </thead>
        <?php
           $data =  $pM->getPost();
           while($result= $data->fetch_assoc()){

          

?>
        <tbody>
                    <tr>
            <td> <?php echo $result['post_id']; ?> </td>
               <td><?php echo $result['post_title']; ?></td>
            <td>  <img src="./app/public/img/<?php echo $result['post_img'];?>"> </td>
         
            <td><?php echo $result['post_category']; ?></td>
              <td><?php echo $result['post_author']; ?></td>
              <td><?php echo $result['post_time']; ?></td>

        
             
           

            <td>
                
                   
                    <a href="productdetails.php?name=WASHED VANS SPORT" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Chi Tiết </a>
                    
                
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="WASHED VANS SPORT">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Xóa</button>
                </form>
            </td>
          </tr>
                  <?php
                       }
                  ?>
          
        </tbody>
      </table>
      </div>
       

    </form></div>
  </div>
</div>
 <?php

require_once "./app/views/layouts/footer.php";
?>
