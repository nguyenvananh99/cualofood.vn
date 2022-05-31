<?php
ob_start();
require_once "./app/views/layouts/header.php"; ?>
<form action="" method="post">
    <div class="wrapper col-sm-8 offset-3">
        <!-- header  -->
        <div class="content-header clearfix">
            <h1 class="float-left">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Thêm một danh mục mới
                </font>
                <small class="btn btn-secondary">
                    <i class="fas fa-arrow-circle-left text-light"></i>
                    <a href="<?php echo BASE_URL ?>product/Category">
                        <font class=" text-light" style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Quay lại danh sách
                            </font>
                        </font>
                    </a>
                </small>
            </h1>
            <div class="float-right">
                <button type="submit" name="product_category_save" class="btn btn-info">
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



        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['product_category_save'])) {
            $product_category_name = $_POST['product_category_name'];
            $product_category_description = $_POST['product_category_description'];
            $product_category_img = $_POST['product_category_img'];
           
            if ( $product_category_name = ""|| $product_category_descriptione = ""||$product_category_img="") {
                echo "<script>alert('Error ! Xin vui lòng nhập đầy đủ thông tin.'); </script> ";
            }  else {
                $data = $pctM->addProductCategory($product_category_name, $product_category_descriptione, $product_category_img);
                echo "<script>alert('Done ! Thêm sản phẩm thành công.'); </script> ";
                header('location: ./Category');
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
                            <label class="col-form-label" for="product_category_name">Tên sản phẩm</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group input-group-required">
                            <input class="form-control text-box single-line" data-val-required="Please provide a name." id="product_category_name" name="product_category_name" type="text" value="">
                            <div class="input-group-btn"><span class="required">*</span></div>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="product_category_name" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper"><label class="col-form-label" for="product_category_description">Mô tả sản phẩm</label>
                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Short description is the text that is displayed in product list i.e. category / manufacturer pages."></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="4" cols="20" data-val="true" data-val-length="'Short Description' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="product_category_description" name="product_category_description"></textarea>
                        <span class="field-validation-valid" data-valmsg-for="product_description" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group row advanced-setting parent-setting parent-setting-advanced" id="group-required-other-products">
                    <div class="col-md-3">
                        <div class="label-wrapper"><label class="col-form-label" for="product_category_published">
                                <font style="vertical-align: inherit;">Trạng thái</font>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input class="check-box" id="product_category_description" name="product_category_published" type="checkbox" value="true">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label class="col-form-label" for="product_name">Số lượng</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group input-group-required">
                            <input class="form-control text-box single-line" data-val-required="Please provide a name." id="product_name" name="product_name" type="text" value="">
                            <div class="input-group-btn"><span class="required">*</span></div>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="product_name" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label for="product_category_img" class="form-label"> Ảnh đại diện</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" type="file" id="product_category_img" name ="product_category_img"id="product_category_img" multiple />
                    </div>
                </div>
               
               
            </div>
        </div>
        <!-- End card 1  -->
        <!-- End product infomation  -->

        <!-- Card 2  -->
      
    </div>

</form>

<!-- Product infomation  -->

<!-- End card 2  -->

<!-- End content  -->
</div>

<?php require_once "./app/views/layouts/footer.php";
ob_flush();
?>