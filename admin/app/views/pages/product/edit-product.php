<?php
ob_start();
require_once "./app/views/layouts/header.php"; ?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="wrapper col-sm-8 offset-3">
        <!-- header  -->
        <div class="content-header clearfix">
            <h1 class="float-left">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Thêm một sản phẩm mới
                    </font>
                </font>
                <small class="btn btn-secondary">
                    <i class="fas fa-arrow-circle-left text-light"></i>
                    <a href="<?php echo BASE_URL?>san-pham">
                        <font class=" text-light" style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Quay lại danh sách
                            </font>
                        </font>
                    </a>
                </small>
            </h1>
            <div class="float-right">
                <button type="submit" name="save_product" class="btn btn-info">
                    <i class="far fa-save"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Lưu
                        </font>
                    </font>
                </button>
                <button type="submit" name="save_continue_product" class="btn btn-info">
                    <i class="far fa-save"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Lưu và Tiếp tục Chỉnh sửa
                        </font>
                    </font>
                </button>
            </div>
        </div>
        <!-- end header  -->
     
      <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['save_product'])) {
            
        

            $productName = $_POST['product_name'] . '<br>';
            $productDescription = $_POST['product_description'] . '<br>';
            $productPrice = $_POST['product_price'] . '<br>';
            $productPublished = $_POST['product_published'] . '<br>';
            $productBrand = $_POST['product_brand'] . '<br>';
            $productCategory = $_POST['product_category'] . '<br>';
            $productAvatar = $_POST['product_avatar'] ;
            
            if ($productName == "" || $productDescription == "" || $productAvatar == ""  || $productPrice == "") {
                echo "<script>alert('Error ! Xin vui lòng nhập đầy đủ thông tin.'); </script> ";
            } else {
                $data = $prM->addProduct($productName, $productDescription, $productPrice,$productAvatar);
                echo "<script>alert('Done ! Thêm sản phẩm thành công.'); </script> ";
                header('location: ./index');
            }
        }


        ?>

        <!-- Content  -->

        <div class="content card card-secondary card-outline">
            <div class="card-header with-border clearfix">
                <div class="card-title">
                    <i class="fas fa-info"></i>
                    Nhập thông tin sản phẩm
                </div>
                <div class="card-tools float-right">
                    <button class="btn btn-tool" data-card-widget="collapse" type="button">
                        <i class="fa toggle-icon fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                        <?php
                            $data = $prM->editProduct($_GET['id']);
                            while($result = $data->fetch_assoc()){
                            


        
      ?>   
                            <label class="col-form-label" for="product_name">Tên sản phẩm</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group input-group-required">
                            <input class="form-control text-box single-line" value ="<?php echo $result['product_name']?>" data-val-required="Please provide a name." id="product_name" name="product_name" type="text" value="">
                            <div class="input-group-btn"><span class="required">*</span></div>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="product_name" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper"><label class="col-form-label" for="product_description">Mô tả sản phẩm</label>
                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Short description is the text that is displayed in product list i.e. category / manufacturer pages."></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="4" cols="20"  data-val-length-max="200" data-val-length-min="0" id="product_description" name="product_description"><?php echo $result['product_description']?></textarea>
                        <span class="field-validation-valid" data-valmsg-for="product_description"></span>
                    </div>
                </div>
                <div class="form-group row advanced-setting parent-setting parent-setting-advanced" id="group-required-other-products">
                    <div class="col-md-3">
                        <div class="label-wrapper"><label class="col-form-label" for="product_published">
                                <font style="vertical-align: inherit;">Trạng thái</font>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-9">   
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="advanced-settings-mode" checked="checked">
                            <label class="onoffswitch-label" for="advanced-settings-mode">
                            <span class="onoffswitch-inner" data-locale-basic="Nháp" data-locale-advanced="Đã đăng"></span>
                            <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                   
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label for="product_avatar" class="form-label"> Ảnh đại diện</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" type="file" name="product_avatar" id="product_avatar" multiple />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label for="product_img1" class="form-label"> Hình 1</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input name="product_img1" class="form-control" type="file" id="product_img1" multiple />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label for="product_img2" class="form-label"> Hình 2</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" type="file" name="product_img2" id="product_img2" multiple />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label for="product_img3" class="form-label"> Hình 3</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" name="product_img3" type="file" id="product_img3" multiple />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="lable-wrapper">
                            <label for="product_brand">Thương hiệu</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                            <input class="form-control" type="text" value="<?php echo $result['product_brand']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="lable-wrapper">
                            <label for="product_category">Danh mục</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                         <input class="form-control" type="text" value="<?php echo $result['product_category']?>">
                    </div>
                </div>

            </div>
        </div>
        <!-- End card 1  -->
        <!-- End product infomation  -->

        <!-- Card 2  -->
        <div class="content card card-secondary card-outline">
            <div class="card-header with-border clearfix">
                <div class="card-title">
                    <i class="fas fa-dollar-sign"></i>
                    Giá
                </div>
                <div class="card-tools float-right">
                    <button class="btn btn-tool" data-card-widget="collapse" type="button">
                        <i class="fa toggle-icon fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row" id="product-price-area">
                    <div class="col-md-3">
                        <div class="label-wrapper"><label class="col-form-label" for="product_price">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Giá sản phẩm</font>
                                </font>
                            </label>
                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The price of the product. You can manage currency by selecting Configuration > Currencies."></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control text-box sigle-line" value="<?php echo $result['product_price']?>">
                        <span  name ="product_price" id="product_price"class="field-validation-valid" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                    </div>
                </div>


<?php
    
            }
?>

            </div>

        </div>
    </div>

</form>

<!-- Product infomation  -->

<!-- End card 2  -->

<!-- End content  -->
</div>

<?php require_once "./app/views/layouts/footer.php";
ob_flush();
?>