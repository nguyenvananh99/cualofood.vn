<?php require_once "./app/views/layouts/header.php"; ?>
<div class="content-wrapper">
    <!-- Header  -->
    <div class="content-header clearfix">
        <h1 class="float-left">
            Sản phẩm
        </h1>
        <div class="float-right">
            <a class="btn btn-info" href="<?php echo BASE_URL ?>san-pham/them-moi">
                <i class="fas fa-plus-square"></i>
                Thêm mới
            </a>
            <button type="submit" name="download-catalog-pdf" class="btn bg-purple" formaction="/Admin/Product/DownloadCatalogPDF">
                <i class="far fa-file-pdf"></i>
                Tải xuống PDF
            </button>
            <div class="btn-group">
                <button type="button" class="btn btn-success">
                    <i class="fas fa-download"></i>
                    Xuất dữ liệu
                </button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">&nbsp;</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-item">
                        <button type="submit" name="exportxml-all" formaction="/Admin/Product/ExportToXml">
                            <i class="far fa-file-code"></i>
                            Export to XML (all found)
                        </button>
                    </li>
                    <li class="dropdown-item">
                        <button type="button" id="exportxml-selected">
                            <i class="far fa-file-code"></i>
                            Export to XML (selected)
                        </button>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">
                        <button type="submit" name="exportexcel-all" formaction="/Admin/Product/ExportToExcel">
                            <i class="far fa-file-excel"></i>
                            Export to Excel (all found)
                        </button>
                    </li>
                    <li class="dropdown-item">
                        <button type="button" id="exportexcel-selected">
                            <i class="far fa-file-excel"></i>
                            Export to Excel (selected)
                        </button>
                    </li>
                </ul>
            </div>
            <button type="button" name="importexcel" class="btn bg-olive" data-toggle="modal" data-target="#importexcel-window">
                <i class="fas fa-upload"></i>
                Nhập dữ liệu
            </button>

            <!-- Modal -->
            <div class="modal fade" id="importexcel-window" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="importexcel-window-title">Nhập dữ liệu từ file excel</h4 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-horizontal">
                                <div class="modal-body">
                                    <ul class="common-list">
                                        <li>
                                            <em>Các sản phẩm nhập khẩu được phân biệt bằng ID. Nếu ID đã tồn tại, thì sản phẩm tương ứng của nó sẽ được cập nhật..</em>
                                        </li>
                                        <li>
                                            <em>Không nên nhập nhiều hơn 500 - 1.000 bản ghi cùng một lúc. Nếu bạn có nhiều bản ghi hơn, tốt hơn nên chia chúng thành nhiều tệp Excel và nhập riêng.</em>
                                        </li>
                                    </ul>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="label-wrapper">
                                                <label class="col-form-label">
                                                    File Excel
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="file" id="importexcelfile" name="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="send-file">
                                        Thực hiện
                                    </button>
                                    <?php
                                    // if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['send-file'])) {
                                    //     if (isset($_FILES['file'])) {
                                    //         $file = $_FILES['file']['tmp_name'];
                                    //         echo $file;
                                    //         $objReader = PHPExcel_IOFactory::createReaderForFile($file);
                                    //         $objExel = $objReader->load($file);
                                    //         $sheetData = $objExel->getActiveSheet()->toArray('null', true, true, true);
                                    //         var_dump($sheetData);
                                    //     }
                                    // }


                                    ?>
                                </div>
                            </div>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQZVOYTj9ybxVATfspW-CCeckFuCIntzKDgP0JQ-4n92e7jt87EYT83SQCEgBE1pGdLgf00Pl9LkAG60oknojz5_JtO3RVUwngTwq2uvxFs7LfBSTd1ADJc_YubwnpUs7c">
                        </form>
                    </div>
                </div>
            </div>

            <button type="button" id="delete-selected" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-action-confirmation" name="">
                <i class="far fa-trash-alt"></i>
                Xoá
            </button>
            <div id="delete-selected-action-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-selected-action-confirmation-title">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="delete-selected-action-confirmation-title">Are you sure?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to perform this action?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="delete-selected-action-confirmation-submit-button" class="btn btn-primary float-right">
                                Yes
                            </button>
                            <span class="btn btn-default float-right margin-r-5" data-dismiss="modal">No, cancel</span>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('# delete-selected').attr("data-toggle", "modal").attr("data-target", "#delete-selected-action-confirmation");
                        $('#delete-selected-action-confirmation-submit-button').attr("name", $("#delete-selected").attr("name"));
                        $("#delete-selected").attr("name", "");
                        if ($("#delete-selected").attr("type") == "submit") $("#delete-selected").attr("type", "button");
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- End header  -->


    <!-- Search bar  -->
        <div class="card">
            <div class="card card-default card-search ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 ml-3 mt-3">
                        <div class="row search-row " data-hideattribute="ProductListPage.HideSearchBlock">
<div class="search-text">Search</div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>


</div>
                            
                            <form action="<?php echo BASE_URL ?>san-pham/tim-kiem"  method="get">
                            <div class="form-group row">
                                <input type="text" name ="id" id="id" class="form-control text-box single-line" value="" placeholder="Nhập ID sản phẩm">
                            </div>
                            <?php
                               if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['search-product']))
                               {
                                   $productName = $_GET['productName'];
                                  
                                 
                               }
                            ?>
                            <div class="form-group row">
                                <select class="form-control" name="category" id="category">
                                    <?php
                                         $data  =  $pctM->getProductCategory(5);
                                         while($result=$data->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $result['product_category_name'] ?>"><?php echo $result['product_category_name'] ?></option>
                                    <?php
                                            }
                                    ?>
                                </select>
                            </div>     
                            <div class="form-group row">
                            <button type="submit" id="search-product" name="search-product"class="btn btn-info btn-search">
                                        Tìm kiếm
                                        </button>  
                            </div>
                                                    
                                              </form>
                        </div>
                    </div>
                </div>
            </div>
    </form>
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
                        $data = $prM->getProduct($start);
                        while ($result = $data->fetch_assoc()) {


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
                                    <a class="btn btn-default" href="<?php echo BASE_URL ?>san-pham/chinh-sua?id=<?php echo $result['product_id'] ?>"><i class="fas fa-pencil-alt"></i>Edit</a>
                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- End table  -->
    <?php

    echo '
			<div class="row margin-t-5"><div class="col-lg-5 col-xs-12">
			<div class="float-lg-left">
				<div class="dataTables_paginate paging_simple_numbers" id="products-grid_paginate">
					<ul class="pagination">';
    if ($current_page > 1 && $total_page > 1) {
        echo '<li class="paginate_button page-item previous " id="products-grid_previous"><a href="?page=' . ($current_page - 1) . '" aria-controls="products-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="fas fa-caret-left"></i></a></li>';
    }

    // Lặp khoảng giữa
    for ($i = 1; $i <= $total_page; $i++) {
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($i == $current_page) {
            echo ' <li class="paginate_button page-item active"><a href="" aria-controls="products-grid" data-dt-idx="1" tabindex="0" class="page-link">' . ($i) . '</a></li>';
        } else {
            echo '<li class="paginate_button page-item "><a href="?page=' . ($i) . '"class="page-link">' . $i . '</a> </li>';
        }
    }

    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
    if ($current_page < $total_page && $total_page > 1) {
        echo '<li class="paginate_button page-item next" id="products-grid_next">
				<a href="?page=' . ($current_page + 1) . '" aria-controls="products-grid" data-dt-idx="4" tabindex="0" class="page-link">
				<i class="fas fa-caret-right"></i>
				</a>
			</li>';
    }
    echo '	</ul>
			</div>
		</div>
		</div>
		<div class="col-lg-3 col-xs-12">
				<div class="text-center">
					<div class="dataTables_length" id="products-grid_length">
                    <form method="POST" action="">
						<label>Show 
                        <select name="start_select" aria-controls="products-grid" class="custom-select custom-select-sm form-control form-control-sm">
							<option value="7">5</option>
							<option value="15">15</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select> 
						items</label>
                    </form>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-xs-12">
				<div class="float-lg-right text-center">
					<div class="dataTables_info" id="products-grid_info" role="status" aria-live="polite">1-15 of 45 items</div>
				</div>
			</div>
			<div class="col-lg-1 col-xs-12">
				<div class="float-lg-right text-center data-tables-refresh">
					<div class="dt-buttons btn-group flex-wrap">
						<button class="btn btn-secondary" tabindex="0" aria-controls="products-grid" type="button">
							<span>
								<i class="fas fa-sync-alt" style="padding-left: 5px"></i>
							</span>
						</button> 
					</div>
				</div>
			</div>
			</div>';


    ?>
    <?php
    if (isset($_POST["start_select"])) {
        echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
    }
    ?>

    <!--end  page -->

</div>
<?php require_once "./app/views/layouts/footer.php"; ?>