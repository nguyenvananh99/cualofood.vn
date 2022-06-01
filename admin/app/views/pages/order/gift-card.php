<?php
 require_once "./app/views/layouts/header.php";
?>

<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lTSLmIxO0HtlJeU6opFsQBk9-Zk1gF8J5P4iyBgsmY0npctye8iiNcaAqHx5XwrmOEueiyNHMeZYFzJitiVVewtEE0Bjak2cBs_vCOrPnxAVesJYjl1C6bDFb2iAGr-HD4">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thẻ quà tặng
</font></font></h1>
<div class="float-right">
<a class="btn btn-primary" href="/Admin/GiftCard/Create">
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
<div class="row search-row opened" data-hideattribute="GiftCardsPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-5">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="RecipientName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên người nhận</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by recipient name. Leave empty to load all records."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="RecipientName" name="RecipientName" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="ActivatedId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã kích hoạt</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific gift card status e.g. Activated."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Activated field is required." id="ActivatedId" name="ActivatedId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã kích hoạt</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã hủy kích hoạt</font></font></option>
</select>
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="CouponCode"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã phiếu giảm giá thẻ quà tặng</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="A gift card coupon code. Leave empty to load all records."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="CouponCode" name="CouponCode" type="text" value="">
</div> 
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-giftcards" class="btn btn-primary btn-search">
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
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/promotional-tools/gift-cards.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">thẻ quà tặng</font></font></a></span></div>
<div id="giftcards-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65.7656px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giá trị ban đầu</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 107.672px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số tiền còn lại</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74.7812px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã giảm giá</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 102.75px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên người nhận</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 198.656px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thẻ quà tặng đã được kích hoạt chưa</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 198.75px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày thành lập</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.625px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="giftcards-grid" role="grid" aria-describedby="giftcards-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65.7656px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giá trị ban đầu</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 107.672px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số tiền còn lại</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74.7812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã giảm giá</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 102.75px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên người nhận</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 198.656px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thẻ quà tặng đã được kích hoạt chưa</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 198.75px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày thành lập</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.625px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 25,00</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 25,00</font></font></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Brenda Lindgren</font></font></td><td class=" text-center"><i class="fas fa-times false-icon" nop-value="false"></i></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:09 AM</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="giftcards-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="giftcards-grid_previous"><a href="#" aria-controls="giftcards-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="giftcards-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item next disabled" id="giftcards-grid_next"><a href="#" aria-controls="giftcards-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="giftcards-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trình diễn</font></font><select name="giftcards-grid_length" aria-controls="giftcards-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="giftcards-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-1 của 1 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="giftcards-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<?php
 require_once "./app/views/layouts/header.php";
?>