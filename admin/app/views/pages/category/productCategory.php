<!-- Product category view  -->
<!-- Hiện thị và xử lý các vấn đề liên quan đến Produt Category  -->
<?php
require_once "./app/views/layouts/header.php";
?>

<div class="content-wrapper ">
  <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lSg2SDAw8EXkyLArr6zU2aG-xUWBj7dSuZrS8DBbA8Ecf13SXJ-Rqc0WQawbnF2DBHVoa-URkF0M6wkomj4rCF6bz2BAiRxEIeL2c8bGFtDwBVJbILaQRLTGjQcYgq6xXk">
  <div class="content-header clearfix">
    <h1 class="float-left">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">
          Thể loại
        </font>
      </font>
    </h1>
    <div class="float-right">
      <a class="btn btn-primary" href="/Admin/Category/Create">
        <i class="fas fa-plus-square">
        </i>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">
            Thêm mới
          </font>
        </font>
      </a>

      <div class="btn-group">
        <button type="button" class="btn btn-success">
          <i class="fas fa-download"></i>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
              Xuất khẩu
            </font>
          </font>
        </button>
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">&nbsp;</span>
        </button>
        <ul class="dropdown-menu" role="menu" style="">
          <li class="dropdown-item">
            <a href="/Admin/Category/ExportXml">
              <i class="far fa-file-code"></i>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Xuất sang XML
                </font>
              </font>
            </a>
          </li>
          <li class="dropdown-item">
            <a href="/Admin/Category/ExportXlsx">
              <i class="far fa-file-excel"></i>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Xuất sang Excel
                </font>
              </font>
            </a>
          </li>
        </ul>
      </div>
      <button type="button" name="importexcel" class="btn bg-olive" data-toggle="modal" data-target="#importexcel-window">
        <i class="fas fa-upload"></i>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">
            Nhập khẩu
          </font>
        </font>
      </button>
      <button type="button" id="delete-selected" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-action-confirmation" name="">
        <i class="far fa-trash-alt"></i>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">
            Xóa đã chọn)
          </font>
        </font>
      </button>
      <div id="delete-selected-action-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-selected-action-confirmation-title">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="delete-selected-action-confirmation-title">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Bạn có chắc không?</font>
                </font>
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Đóng"><span aria-hidden="true">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">×</font>
                  </font>
                </span></button>
            </div>
            <div class="modal-body">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Bạn có chắc chắn muốn thực hiện hành động này không?
                </font>
              </font>
            </div>
            <div class="modal-footer">
              <button type="submit" id="delete-selected-action-confirmation-submit-button" class="btn btn-primary float-right">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    Đúng
                  </font>
                </font>
              </button>
              <span class="btn btn-default float-right margin-r-5" data-dismiss="modal">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Không, hủy bỏ</font>
                </font>
              </span>
            </div>
          </div>
        </div>
        <script>
          $(document).ready(function() {
            $('#delete-selected').attr("data-toggle", "modal").attr("data-target", "#delete-selected-action-confirmation");
            $('#delete-selected-action-confirmation-submit-button').attr("name", $("#delete-selected").attr("name"));
            $("#delete-selected").attr("name", "");
            if ($("#delete-selected").attr("type") == "submit") $("#delete-selected").attr("type", "button");
          });
        </script>
      </div>
    </div>
  </div>
  <!-- Phần nội dung  -->
  <section class="content">
    <div class="container-fluid">
      <div class="form-horizontal">
        <div class="cards-group">
          <div class="card card-default card-search">
            <div class="card-body">
              <div class="row search-row opened" data-hideattribute="CategoryPage.HideSearchBlock">
                <div class="search-text">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tìm kiếm</font>
                  </font>
                </div>
                <div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
                <div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
              </div>
              <div class="search-body ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="label-wrapper"><label class="col-form-label" for="SearchCategoryName">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Tên danh mục</font>
                            </font>
                          </label>
                          <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A category name."><i class="fas fa-question-circle"></i></div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <input class="form-control text-box single-line" id="SearchCategoryName" name="SearchCategoryName" type="text" value="">
                      </div>
                    </div>
                    <div class="form-group row" style="display:none">
                      <div class="col-md-4">
                        <div class="label-wrapper"><label class="col-form-label" for="SearchStoreId">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Cửa hàng</font>
                            </font>
                          </label>
                          <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific store."><i class="fas fa-question-circle"></i></div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <select class="form-control" data-val="true" data-val-required="The Store field is required." id="SearchStoreId" name="SearchStoreId">
                          <option selected="selected" value="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Tất cả các</font>
                            </font>
                          </option>
                          <option value="1">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Tên cửa hàng của bạn</font>
                            </font>
                          </option>
                          <option value="2">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Cửa hàng thử nghiệm 2</font>
                            </font>
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="label-wrapper"><label class="col-form-label" for="SearchPublishedId">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Được phát hành</font>
                            </font>
                          </label>
                          <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a &quot;Published&quot; property."><i class="fas fa-question-circle"></i></div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <select class="form-control" data-val="true" data-val-required="The Published field is required." id="SearchPublishedId" name="SearchPublishedId">
                          <option selected="selected" value="0">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Tất cả các</font>
                            </font>
                          </option>
                          <option value="1">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Chỉ xuất bản</font>
                            </font>
                          </option>
                          <option value="2">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Chỉ chưa xuất bản</font>
                            </font>
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="text-center col-12">
                    <button type="button" id="search-categories" class="btn btn-primary btn-search"><i class="fas fa-search"></i>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tìm kiếm</font>
                      </font>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
                    <th>Số lượng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </thead>
                  <tbody>

                    <?php

                    $total_page =  $pctM->total_pages();
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    if ($current_page > $total_page) {
                      $current_page = $total_page;
                    } else if ($current_page < 1) {
                      $current_page = 1;
                    }
                    // Tìm Start
                    $start = ($current_page - 1) * 5;
                    $data = $pctM->getProductCategory($start);
                    while ($result = $data->fetch_assoc()) {


                    ?>
                      <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $result['product_category_id'] ?></td>
                        <td><?php echo $result['product_category_img'] ?></td>
                        <td><?php echo $result['product_category_name'] ?></td>
                        <td><?php echo $result['product_category_description'] ?></td>
                        <td></td>
                        <td></td>
                        <td><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i>Edit</a>
                        </td>
                      </tr>
                    <?php } ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
</div>
</section>
<div id="importexcel-window" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="importexcel-window-title">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="importexcel-window-title">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Nhập từ Excel</font>
          </font>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">×</font>
            </font>
          </span></button>
      </div>
      <form method="post" enctype="multipart/form-data" action="/Admin/Category/ImportFromXlsx">
        <div class="form-horizontal">
          <div class="modal-body">
            <ul class="common-list">
              <li>
                <em>Imported categories are distinguished by ID. If the ID already exists, then its corresponding category will be updated. You should not specify ID (leave 0) for new categories.</em>
              </li>
              <li>
                <em>Import requires a lot of memory resources. That's why it's not recommended to import more than 500 - 1,000 records at once. If you have more records, it's better to split them to multiple Excel files and import separately.</em>
              </li>
            </ul>
            <div class="form-group row">
              <div class="col-md-2">
                <div class="label-wrapper">
                  <label class="col-form-label">
                    Excel file
                  </label>
                </div>
              </div>
              <div class="col-md-10">
                <input type="file" id="importexcelfile" name="importexcelfile" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
              Import from Excel
            </button>
          </div>
        </div>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lSg2SDAw8EXkyLArr6zU2aG-xUWBj7dSuZrS8DBbA8Ecf13SXJ-Rqc0WQawbnF2DBHVoa-URkF0M6wkomj4rCF6bz2BAiRxEIeL2c8bGFtDwBVJbILaQRLTGjQcYgq6xXk">
      </form>
    </div>
  </div>
</div>

   <!-- End table  -->
   <?php

echo '
  <div class="row margin-t-5"><div class="col-lg-5 col-xs-12 offset-3">
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