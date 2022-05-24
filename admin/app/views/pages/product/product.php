<?php require_once "./app/views/layouts/header.php"; ?>
<div class="content-wrapper">
    <!-- Header  -->
    <div class="content-header clearfix">
        <h1 class="float-left">
        Sản phẩm
        </h1>
    <div class="float-right">
        <a class="btn btn-info" href="addProduct">
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
    </div> <script>$(document).ready(function () {$('# delete-selected').attr("data-toggle", "modal").attr("data-target", "#delete-selected-action-confirmation");$('#delete-selected-action-confirmation-submit-button').attr("name", $("#delete-selected").attr("name"));$("#delete-selected").attr("name", "");if($("#delete-selected").attr("type") == "submit")$("#delete-selected").attr("type", "button");});</script></div>
</div>
</div>
<!-- End header  -->


<!-- Search bar  -->
<form action="" method="post">
<div class="card">
    <div class="card card-default card-search ">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 ml-3">
                    <div class="form-group row">
                        
                        <input type="text" id="productName" class="form-control text-box single-line" value="Tên sản phẩm"> 
                    </div>
                    <div class="form-group row">
                        <select class="form-control" name="" id="">
                            <option value="1">Chuyên mục 1</option>
                            <option value="1">Chuyên mục 2</option>
                            <option value="1">Chuyên mục 3</option>
                        </select>
                    </div>
                    <div class="form-group row">
                    <button type="submit" id="search-products" class="btn btn-info btn-search">
                        <i class="fas fa-search"></i>
                            Search
                    </button>
                    </div>
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
                        $data = $prM->getProduct();
                        while($result = $data->fetch_assoc()){
                            
                   ?>
                   <tr>
                       <td><input type="checkbox" name="" id=""></td>
                       <td><?php echo $result['product_id']; ?></td>
                       <td><?php echo $result['product_avatar']; ?></td>
                       <td><?php echo $result['product_name']; ?></td>
                       <td><?php echo $result['product_description']; ?></td>
                       <td><?php echo $result['product_price']; ?></td>
                       <td><?php echo $result['product_number']; ?></td>
                       <td><?php echo $result['product_published']; ?></td>
                       <td>
                           <a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i>Edit</a>
                       </td>
                   </tr>
                   <?php } ?>
                  

               </tbody>
            </table>
        </div>
</div>
</div>

<!-- End table  -->

<!-- page  -->


<!--end  page -->
    
</div>


<?php require_once "./app/views/layouts/footer.php"; ?>
