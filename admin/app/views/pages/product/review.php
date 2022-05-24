<?php
 require_once "./app/views/layouts/header.php";
 
?>
<div class="content-wrapper col-sm-11 offset-3" style="min-height: 187px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lRoC4V-mVwZ108kaMYuuoToB7FqVlT7ZNWjk_QGoPFTz7vPtRt4s20vYEnpCQ554fHf5gYe5Mt0PmXwRCd-3N1UvjRCnmWAhUyivN7jl_k-2gznhF4lQNrjiW-bhntpNqI">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Đánh giá sản phẩm
</font></font></h1>
<div class="float-right">
<button type="button" id="approve-selected" class="btn btn-success">
<i class="fas fa-check-square"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Phê duyệt đã chọn
</font></font></button>
<button type="button" id="disapprove-selected" class="btn btn-secondary">
<i class="fas fa-minus-square"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Từ chối đã chọn
</font></font></button>
<button type="button" id="delete-selected" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-action-confirmation" name="">
<i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xóa đã chọn
</font></font></button>
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
</div> <script>$(document).ready(function () {$('#delete-selected').attr("data-toggle", "modal").attr("data-target", "#delete-selected-action-confirmation");$('#delete-selected-action-confirmation-submit-button').attr("name", $("#delete-selected").attr("name"));$("#delete-selected").attr("name", "");if($("#delete-selected").attr("type") == "submit")$("#delete-selected").attr("type", "button");});</script></div>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="ProductReviewsPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-5">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="CreatedOnFrom"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo từ</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The creation from date for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="CreatedOnFrom" name="CreatedOnFrom" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="CreatedOnFrom_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="lựa chọn" role="button" aria-controls="CreatedOnFrom_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
 <div class="label-wrapper"><label class="col-form-label" for="CreatedOnTo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo để</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The creation to date for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="CreatedOnTo" name="CreatedOnTo" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="CreatedOnTo_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="lựa chọn" role="button" aria-controls="CreatedOnTo_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchText"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tin nhắn</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search in title and review text."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchText" name="SearchText" type="text" value="">
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchApprovedId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã được phê duyệt</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a &quot;Approved&quot; property."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Approved field is required." id="SearchApprovedId" name="SearchApprovedId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉ được chấp thuận</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉ bị từ chối</font></font></option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchProductId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific product."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input type="text" class="form-control ui-autocomplete-input" id="search-product-name" autocomplete="off">
<span id="search-product-friendly-name"></span>
<button type="button" id="search-product-clear" class="btn bg-gray" style="display: none; margin-top: 5px;">Clear</button>
<input autocomplete="off" style="display: none;" type="number" data-val="true" data-val-required="The Product field is required." id="SearchProductId" name="SearchProductId" value="0">
</div>
</div>
<div class="form-group row" style="display:none">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchStoreId">Store</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific store."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
 <select class="form-control" data-val="true" data-val-required="The Store field is required." id="SearchStoreId" name="SearchStoreId"><option selected="selected" value="0">All</option>
<option value="1">Your store name</option>
<option value="2">Test store 2</option>
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-productreviews" class="btn btn-primary btn-search">
<i class="fas fa-search"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Tìm kiếm
</font></font></button>
</div>
</div>
</div>
</div>
</div>
<div class="card card-default">
<div class="card-body">
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/catalog/products/product-reviews.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">đánh giá sản phẩm</font></font></a></span></div>
<div id="productreviews-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 15.2188px;"><input class="mastercheckbox" type="checkbox"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44.7812px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 92.75px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 157.562px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 58.0469px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiêu đề</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85.875px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá văn bản</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40.0781px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả lời văn bản</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 46.3125px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xếp hạng</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 69.3906px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chấp thuận</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 79.3594px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo ra</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 58.625px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="productreviews-grid" role="grid" aria-describedby="productreviews-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 15.2188px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input class="mastercheckbox" type="checkbox"></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44.7812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 92.75px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 157.562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 58.0469px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiêu đề</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá văn bản</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40.0781px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả lời văn bản</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 46.3125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xếp hạng</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 69.3906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chấp thuận</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 79.3594px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo ra</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 58.625px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="1" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><a href="/Admin/Product/Edit/2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính hiệu suất tùy chỉnh Digital Storm VANQUISH 3</font></font></a></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một số bài đánh giá mẫu</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đánh giá mẫu này dành cho PC Hiệu suất Tùy chỉnh Digital Storm VANQUISH 3. </font><font style="vertical-align: inherit;">Tôi đã chờ đợi sản phẩm này có sẵn. </font><font style="vertical-align: inherit;">Nó có giá vừa phải.</font></font></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:06 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="2" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><a href="/Admin/Product/Edit/3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính tất cả trong một Lenovo IdeaCentre 600</font></font></a></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một số bài đánh giá mẫu</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đánh giá mẫu này dành cho PC Lenovo IdeaCentre 600 All-in-One. </font><font style="vertical-align: inherit;">Tôi đã chờ đợi sản phẩm này có sẵn. </font><font style="vertical-align: inherit;">Nó có giá vừa phải.</font></font></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:06 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/2"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="3" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><a href="/Admin/Product/Edit/4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apple MacBook Pro 13-inch</font></font></a></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một số bài đánh giá mẫu</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đánh giá mẫu này dành cho Apple MacBook Pro 13-inch. </font><font style="vertical-align: inherit;">Tôi đã chờ đợi sản phẩm này có sẵn. </font><font style="vertical-align: inherit;">Nó có giá vừa phải.</font></font></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:06 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/3"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="4" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><a href="/Admin/Product/Edit/5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính xách tay Asus N551JK-XO076H</font></font></a></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một số bài đánh giá mẫu</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đánh giá mẫu này dành cho Máy tính xách tay Asus N551JK-XO076H. </font><font style="vertical-align: inherit;">Tôi đã chờ đợi sản phẩm này có sẵn. </font><font style="vertical-align: inherit;">Nó có giá vừa phải.</font></font></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:06 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/4"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="5" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><a href="/Admin/Product/Edit/9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy tính xách tay Lenovo Thinkpad X1 Carbon</font></font></a></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một số bài đánh giá mẫu</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đánh giá mẫu này dành cho Máy tính xách tay Lenovo Thinkpad X1 Carbon. </font><font style="vertical-align: inherit;">Tôi đã chờ đợi sản phẩm này có sẵn. </font><font style="vertical-align: inherit;">Nó có giá vừa phải.</font></font></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:06 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/5"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="6" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><a href="/Admin/Product/Edit/10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adobe Photoshop CS4</font></font></a></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một số bài đánh giá mẫu</font></font></td><td>This sample review is for the Adobe Photoshop CS4. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/6"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="7" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/11">Windows 8 Pro</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the Windows 8 Pro. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">5</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/7"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="8" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/12">Sound Forge Pro 11 (recurring)</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the Sound Forge Pro 11 (recurring). I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">5</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/8"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="9" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/16">Leica T Mirrorless Digital Camera</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the Leica T Mirrorless Digital Camera. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/9"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="10" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/17">Apple iCam</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the Apple iCam. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/10"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="11" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/18">HTC One M8 Android L 5.0 Lollipop</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the HTC One M8 Android L 5.0 Lollipop. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/11"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="12" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/19">HTC One Mini Blue</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the HTC One Mini Blue. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">5</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/12"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="13" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/20">Nokia Lumia 1020</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the Nokia Lumia 1020. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/13"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_product_reviews" value="14" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/21">Beats Pill 2.0 Wireless Speaker</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td>This sample review is for the Beats Pill 2.0 Wireless Speaker. I've been waiting for this product to be available. It is priced just right.</td><td></td><td class=" text-center">4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td>03/13/2017 6:20:06 AM</td><td class=" button-column"><a class="btn btn-default" href="Edit/14"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_product_reviews" value="15" type="checkbox" class="checkboxGroups"></td><td>Your store name</td><td><a href="/Admin/Product/Edit/22">Universal 7-8 Inch Tablet Cover</a></td><td><a href="/Admin/Customer/Edit/1">admin@yourStore.com</a></td><td>Some sample review</td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đánh giá mẫu này dành cho Bao da Máy tính bảng Phổ thông 7-8 inch. </font><font style="vertical-align: inherit;">Tôi đã chờ đợi sản phẩm này có sẵn. </font><font style="vertical-align: inherit;">Nó có giá vừa phải.</font></font></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:06 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/15"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="productreviews-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="productreviews-grid_previous"><a href="#" aria-controls="productreviews-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="productreviews-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="productreviews-grid" data-dt-idx="2" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="productreviews-grid" data-dt-idx="3" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li><li class="paginate_button page-item next" id="productreviews-grid_next"><a href="#" aria-controls="productreviews-grid" data-dt-idx="4" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="productreviews-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thể hiện</font></font><select name="productreviews-grid_length" aria-controls="productreviews-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="productreviews-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-15 trong số 34 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="productreviews-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</section>
<div id="approveSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="approveSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="approveSelectedFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="approveSelectedFailed-info"></div>

</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="approveSelectedFailed" style="display:none" data-toggle="modal" data-target="#approveSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#approveSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#approveSelectedFailed-action-alert")});</script></div>
<div id="disapproveSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="disapproveSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="disapproveSelectedFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="disapproveSelectedFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="disapproveSelectedFailed" style="display:none" data-toggle="modal" data-target="#disapproveSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#disapproveSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#disapproveSelectedFailed-action-alert")});</script></div>
<div id="deleteSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="deleteSelectedFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="deleteSelectedFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="deleteSelectedFailed" style="display:none" data-toggle="modal" data-target="#deleteSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#deleteSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#deleteSelectedFailed-action-alert")});</script></div>
<div id="nothingSelectedAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="nothingSelectedAlert-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="nothingSelectedAlert-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="nothingSelectedAlert-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="nothingSelectedAlert" style="display:none" data-toggle="modal" data-target="#nothingSelectedAlert-action-alert"></div><script>$(document).ready(function () {$('#nothingSelectedAlert').attr("data-toggle", "modal").attr("data-target", "#nothingSelectedAlert-action-alert")});</script></div>
</div>
<?php
 require_once "./app/views/layouts/footer.php";
 
?>