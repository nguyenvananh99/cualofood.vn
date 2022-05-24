<?php
  require_once "./app/views/layouts/header.php";
?>
<div class="content-wrapper" style="min-height: 187px;">

<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQOnEPIfMhXWqjMEE53bVS4LPz5WOfvz2eLcDz4jbCmgXwfWIBoOkUnt0AXpk54N-rkTrxo6FB_MYz4zaki263AwwG9uS00XpMExUwUZgP50mBO-e9obhp49QMvB44nLDA">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Giảm giá
</font></font></h1>
<div class="float-right">
<a class="btn btn-primary" href="/Admin/Discount/Create">
<i class="fas fa-plus-square"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thêm mới
</font></font></a>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="DiscountsPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-5">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchStartDate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày bắt đầu</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The start date for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="SearchStartDate" name="SearchStartDate" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="SearchStartDate_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="lựa chọn" role="button" aria-controls="SearchStartDate_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchEndDate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày cuối</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The end date for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="SearchEndDate" name="SearchEndDate" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="SearchEndDate_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="lựa chọn" role="button" aria-controls="SearchEndDate_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchDiscountTypeId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại giảm giá</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by discount type."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Discount type field is required." id="SearchDiscountTypeId" name="SearchDiscountTypeId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã chỉ định cho tổng số đơn đặt hàng</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho các sản phẩm</font></font></option>
<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho các danh mục</font></font></option>
<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao cho nhà sản xuất</font></font></option>
<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao cho vận chuyển</font></font></option>
<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho tổng phụ của đơn đặt hàng</font></font></option>
</select>
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row">
<div class="col-md-4">
 <div class="label-wrapper"><label class="col-form-label" for="SearchDiscountCouponCode"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã giảm giá</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by discount coupon code."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchDiscountCouponCode" name="SearchDiscountCouponCode" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchDiscountName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên giảm giá</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by discount name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchDiscountName" name="SearchDiscountName" type="text" value="">
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-discounts" class="btn btn-primary btn-search">
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
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/promotional-tools/discounts.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chiết khấu</font></font></a></span></div>
<div id="discounts-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172.109px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 135.406px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại giảm giá</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 115.875px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chiết khấu</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 123.734px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày bắt đầu</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 123.734px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày cuối</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 103.969px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lần sử dụng</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 73.1719px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="discounts-grid" role="grid" aria-describedby="discounts-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172.109px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 135.406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại giảm giá</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 115.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chiết khấu</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 123.734px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày bắt đầu</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 123.734px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày cuối</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 103.969px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lần sử dụng</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 73.1719px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá '20% tổng đơn hàng'</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã chỉ định cho tổng số đơn đặt hàng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20%</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01/01/2010 12:00:00 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01/01/2020 12:00:00 sáng</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/2"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá mẫu với mã phiếu giảm giá</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho các sản phẩm</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10 USD</font></font></td><td></td><td></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="discounts-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="discounts-grid_previous"><a href="#" aria-controls="discounts-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="discounts-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item next disabled" id="discounts-grid_next"><a href="#" aria-controls="discounts-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="discounts-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thể hiện</font></font><select name="discounts-grid_length" aria-controls="discounts-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="discounts-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-2 trong số 2 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="discounts-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
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