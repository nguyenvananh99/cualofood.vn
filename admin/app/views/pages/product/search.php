<?php require_once "./app/views/layouts/header.php"; ?>
<div class="content-wrapper">

    <!-- Search bar  -->

        <div class="card">
            <div class="card card-default card-search ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 ml-3 mt-3">
                            
                            <form action="" method="get">
                            <div class="form-group row">
                                <input type="text" name ="id" id="id" class="form-control text-box single-line" value="" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group row">
                                <select class="form-control" name="category" id="category">
                                <?php
                            
                                $data  =  $pctM->getProductCategory(5);
                                if($data==true)
                                {
                                    while($result=$data->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $result['product_category_name'] ?>"><?php echo $result['product_category_name'] ?></option>
                                        <?php
                                }
                            }
                            else{
                                echo '<h1>Không tìm thấy kết quả nào !</h1>';
                            }
                               
                                    ?>
                                </select>
                            </div>
                            <div class="form-group row">
                                <button type="submit" id="search-product" name="search-product"class="btn btn-info btn-search">
                                    <i class="fas fa-search"></i>
                                    Tìm kiếm
                                </button>
                            </div>
                         
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    <!-- End search bar  -->

    <!-- Table  -->
    <div class="card card-default">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th><input type="checkbox" name="" id=""></th>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>

                        <?php

                        $total_page =  $prM->total_pages();
                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        if ($current_page > $total_page) {
                            $current_page = $total_page;
                        } else if ($current_page < 1) {
                            $current_page = 1;
                        }
                        // Tìm Start
                        $start = ($current_page - 1) * 5;
                        $data  =  $prM->searchWithName($_GET['id'],$_GET['category'],$start);
                        if($data==true){
                            while($result=$data->fetch_assoc()){
          
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?php echo $result['product_id'];
                                    // echo $abc = $prM->countProduct();


                                    ?>

                                </td>
                                <td><?php echo $result['product_avatar'];
                                    ?></td>
                                <td><?php echo $result['product_name']; ?></td>
                                <td><?php echo $result['product_description']; ?></td>
                                <td><?php echo $result['product_price']; ?></td>
                                <td><?php echo $result['product_number']; ?></td>
                                <td><?php if ($result['product_published'] == 1) {
                                        echo '<i class="fas fa-check true-icon" nop-value="true"></i>';
                                    } else {
                                        echo '<i class="fas fa-times false-icon" nop-value="false"></i>';
                                    } ?></td>
                                <td>
                                    <a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i>Edit</a>
                                </td>
                            </tr>
                        <?php } 
                        
                    }
                    else{
                        echo '<h2>Không thể tìm thấy dữ liệu</h2>';
                    }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php require_once "./app/views/layouts/footer.php"; ?>