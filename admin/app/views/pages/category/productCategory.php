
<?php
 require_once "./app/views/layouts/header.php";
 
?><div class="content-wrapper col-sm-8 offset-3" style="min-height: 187px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lSg2SDAw8EXkyLArr6zU2aG-xUWBj7dSuZrS8DBbA8Ecf13SXJ-Rqc0WQawbnF2DBHVoa-URkF0M6wkomj4rCF6bz2BAiRxEIeL2c8bGFtDwBVJbILaQRLTGjQcYgq6xXk">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thể loại
</font></font></h1>
<div class="float-right">
<a class="btn btn-primary" href="/Admin/Category/Create">
<i class="fas fa-plus-square"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thêm mới
</font></font></a>
<div class="btn-group">
<button type="button" class="btn btn-success">
<i class="fas fa-download"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xuất khẩu
</font></font></button>
<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">&nbsp;</span>
</button>
<ul class="dropdown-menu" role="menu" style="">
<li class="dropdown-item">
<a href="/Admin/Category/ExportXml">
<i class="far fa-file-code"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xuất sang XML
</font></font></a>
</li>
<li class="dropdown-item">
<a href="/Admin/Category/ExportXlsx">
<i class="far fa-file-excel"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xuất sang Excel
</font></font></a>
</li>
</ul>
</div>
<button type="button" name="importexcel" class="btn bg-olive" data-toggle="modal" data-target="#importexcel-window">
<i class="fas fa-upload"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nhập khẩu
</font></font></button>
<button type="button" id="delete-selected" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-action-confirmation" name="">
<i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xóa đã chọn)
</font></font></button>
<div id="delete-selected-action-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-selected-action-confirmation-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="delete-selected-action-confirmation-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bạn có chắc không?</font></font></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Đóng"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span></button>
</div>
<div class="modal-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Bạn có chắc chắn muốn thực hiện hành động này không?
</font></font></div>
<div class="modal-footer">
<button type="submit" id="delete-selected-action-confirmation-submit-button" class="btn btn-primary float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Đúng
</font></font></button>
<span class="btn btn-default float-right margin-r-5" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Không, hủy bỏ</font></font></span>
</div>
</div>
</div> <script>$(document).ready(function () {$('#delete-selected').attr("data-toggle", "modal").attr("data-target", "#delete-selected-action-confirmation");$('#delete-selected-action-confirmation-submit-button').attr("name", $("#delete-selected").attr("name"));$("#delete-selected").attr("name", "");if($("#delete-selected").attr("type") == "submit")$("#delete-selected").attr("type", "button");});</script></div>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="CategoryPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
 </div>
<div class="search-body ">
<div class="row">
<div class="col-md-6">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchCategoryName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên danh mục</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="A category name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchCategoryName" name="SearchCategoryName" type="text" value="">
</div>
</div>
<div class="form-group row" style="display:none">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchStoreId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific store."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Store field is required." id="SearchStoreId" name="SearchStoreId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng thử nghiệm 2</font></font></option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchPublishedId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được phát hành</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a &quot;Published&quot; property."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Published field is required." id="SearchPublishedId" name="SearchPublishedId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉ xuất bản</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉ chưa xuất bản</font></font></option>
</select>
</div>
</div>
</div>
</div>
<div class="form-group row">
<div class="text-center col-12">
<button type="button" id="search-categories" class="btn btn-primary btn-search"><i class="fas fa-search"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></button>
</div>
</div>
</div>
</div>
</div>
<div class="card card-default">
<div class="card-body">
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/catalog/categories.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">các danh mục</font></font></a></span></div>
<div id="categories-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 49.9375px;"><input class="mastercheckbox" type="checkbox"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 498.328px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 99.9062px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được phát hành</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 149.828px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hiển thị đơn hàng</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 100px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="categories-grid" role="grid" aria-describedby="categories-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 49.9375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input class="mastercheckbox" type="checkbox"></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 498.328px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 99.9062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được phát hành</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 149.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hiển thị đơn hàng</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 100px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="1" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy vi tính</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="2" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính &gt;&gt; Máy tính để bàn</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/2"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="3" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính &gt;&gt; Máy tính xách tay</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/3"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="4" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính &gt;&gt; Phần mềm</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/4"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="5" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thiết bị điện tử</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/5"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="6" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điện tử &gt;&gt; Máy ảnh &amp; ảnh</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/6"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="7" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điện tử &gt;&gt; Điện thoại di động</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/7"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="8" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điện tử &gt;&gt; Khác</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/8"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="9" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần áo</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/9"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="10" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang phục &gt;&gt; Giày</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/10"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="11" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang phục &gt;&gt; Quần áo</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/11"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="12" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang phục &gt;&gt; Phụ kiện</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/12"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="13" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải xuống kỹ thuật số</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/13"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_categories" value="14" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sách</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/14"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_categories" value="15" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang sức</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/15"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="categories-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="categories-grid_previous"><a href="#" aria-controls="categories-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="categories-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="categories-grid" data-dt-idx="2" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_button page-item next" id="categories-grid_next"><a href="#" aria-controls="categories-grid" data-dt-idx="3" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="categories-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thể hiện</font></font><select name="categories-grid_length" aria-controls="categories-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="categories-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-15 trong số 16 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="categories-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
 <div id="deleteSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="deleteSelectedFailed-action-alert-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin</font></font></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Đóng"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="deleteSelectedFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được</font></font></span>
</div>
</div>
</div>
<div class="btn btn-default" id="deleteSelectedFailed" style="display:none" data-toggle="modal" data-target="#deleteSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#deleteSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#deleteSelectedFailed-action-alert")});</script></div>
<div id="nothingSelectedAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="nothingSelectedAlert-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="nothingSelectedAlert-action-alert-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin</font></font></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Đóng"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="nothingSelectedAlert-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được</font></font></span>
</div>
</div>
</div>
<div class="btn btn-default" id="nothingSelectedAlert" style="display:none" data-toggle="modal" data-target="#nothingSelectedAlert-action-alert"></div><script>$(document).ready(function () {$('#nothingSelectedAlert').attr("data-toggle", "modal").attr("data-target", "#nothingSelectedAlert-action-alert")});</script></div>
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
<h4 class="modal-title" id="importexcel-window-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhập từ Excel</font></font></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span></button>
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
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lSg2SDAw8EXkyLArr6zU2aG-xUWBj7dSuZrS8DBbA8Ecf13SXJ-Rqc0WQawbnF2DBHVoa-URkF0M6wkomj4rCF6bz2BAiRxEIeL2c8bGFtDwBVJbILaQRLTGjQcYgq6xXk"></form>
</div>
</div>
</div>
</div>
  <?php
 require_once "./app/views/layouts/footer.php";
 
?>