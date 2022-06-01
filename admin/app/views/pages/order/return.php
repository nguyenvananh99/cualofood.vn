<?php
 require_once "./app/views/layouts/header.php";
?>
<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQJnfO-kPoDEnl905hMNVaxHqdCtg5e0-zHo0BCRsTBVmzCjPCRW0BiyUD1edMO83E2vs-AWrveP-CK1jLqBz_a6XIh0EYVsG3pIcgl9SgW22ggZyIFXUt_i6mgN_c8Sk0">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Yêu cầu trả lại
</font></font></h1>
<div class="float-right">
&nbsp;
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="ReturnRequestsPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-5">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="StartDate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày bắt đầu</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The start date for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="StartDate" name="StartDate" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="StartDate_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="lựa chọn" role="button" aria-controls="StartDate_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="EndDate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày cuối</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The end date for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="EndDate" name="EndDate" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="EndDate_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="lựa chọn" role="button" aria-controls="EndDate_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="CustomNumber"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TÔI</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific return request identifier."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="CustomNumber" name="CustomNumber" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="ReturnRequestStatusId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng trở lại</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific return request status e.g. Received."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Return status field is required." id="ReturnRequestStatusId" name="ReturnRequestStatusId"><option selected="selected" value="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></option>
<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhận</font></font></option>
<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả lại được ủy quyền</font></font></option>
<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Các) mặt hàng đã sửa chữa</font></font></option>
<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Các) mặt hàng được hoàn lại</font></font></option>
<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yêu cầu bị từ chối</font></font></option>
<option value="60"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã hủy</font></font></option>
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-returnrequests" class="btn btn-primary btn-search">
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
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Tính năng Yêu cầu trả lại (RMA) cho phép khách hàng gửi sản phẩm lại cho bạn. </font><font style="vertical-align: inherit;">Ở đây bạn có thể tìm thấy tất cả các yêu cầu trả lại đã gửi.
</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/order-management/return-requests.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">yêu cầu trả lại</font></font></a></span>
</p>
<div id="returnrequests-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.9375px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TÔI</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 153.688px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62.1094px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62.1094px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng về kho</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 155.281px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">khách hàng</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 93.2969px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi món #</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 97.6562px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả lại trạng thái yêu cầu</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 59.1875px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.7344px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="returnrequests-grid" role="grid" aria-describedby="returnrequests-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.9375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TÔI</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 153.688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62.1094px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62.1094px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng về kho</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 155.281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">khách hàng</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 93.2969px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi món #</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 97.6562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả lại trạng thái yêu cầu</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 59.1875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.7344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">không có dữ liệu trong bảng</font></font></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="returnrequests-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="returnrequests-grid_previous"><a href="#" aria-controls="returnrequests-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item next disabled" id="returnrequests-grid_next"><a href="#" aria-controls="returnrequests-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="returnrequests-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trình diễn</font></font><select name="returnrequests-grid_length" aria-controls="returnrequests-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="returnrequests-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Không có hồ sơ</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="returnrequests-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<?php
 require_once "./app/views/layouts/footer.php";
?>