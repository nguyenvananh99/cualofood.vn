
<?php
 require_once "./app/views/layouts/header.php";
 
?><div class="card-body col-sm-7 offset-3">
    <h2 class="text-info">Danh sách danh mục sản phẩm</h2>
    <button class="btn btn-danger"><a class="text-light " href="./addPCategory">Thêm danh mục</a></button>



    <div class="table-responsive">

     <form action="" method="POST">
      <table class="table table-bordered">
 
        <thead>
          <tr>
            <th> ID </th>
            <th> Tên Danh Mục </th>
           
          
            <th>Thao Tác</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $datas = $postCategory->getPostCategory();
            while($result= $datas->fetch_assoc()){
?>
                  <tr>
         
                  <td><?php echo $result['post_category_id'];  ?></td>
                  <td><?php echo $result['post_category_name'];  ?></td>
            

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
  <?php
 require_once "./app/views/layouts/footer.php";
 
?>