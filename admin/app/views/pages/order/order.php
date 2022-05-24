<?php
 require_once "./app/views/layouts/header.php";
?>

<div class="card shadow mb-4 col-sm-8 offset-3" >
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh Sách Đơn Hàng
            
    </h6>
    
  </div>

  <div class="card-body">
  <form action="" method="post">
  

    <div class="table-responsive">

      
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Ngày Đặt </th>
            <th width="15%">Khách Hàng </th>
            <th>Tổng Tiền</th>
            <th>Địa Chỉ</th>
            <th width="15%">Trạng Thái </th>
            <th>Thao Tác</th>
          </tr>
        </thead>
        <tbody>
              <?php
                
                  $data = $orM->getOrder();
                  while($result=$data->fetch_assoc()){

            ?>
                      <tr>
             
            <td value="idbill" name="idbill" data-name="113"><a href="billdetails.php?idbill=113"> <?php echo $result['order_id'] ?></a></td>
            <td><?php echo $result['order_time'] ?></td>
            <td><?php echo $result['order_customer'] ?></td>
            <td><?php echo $result['order_total_bill'] ?>VND</td>
            <td><?php echo $result['order_address'] ?></td>
            
                
            <td class="text-danger"><?php echo $result['order_trangthai'] ?></td>       
                    
               
          
            <td>
                
      
               
                  <input id="edit" type="button" name="submit" class="btn btn-primary" value="Cập nhật trạng thái" data-toggle="modal" data-target="#addadminprofile">
                 
               
            </td>
          </tr>
          <?php
                  }
          ?>
                  
                 </tbody>
      </table>
  
               
        
    </div>
  </form>
  </div>
</div>
                <?php
 require_once "./app/views/layouts/footer.php";
?>