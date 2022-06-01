<?php
require_once "./app/views/layouts/header.php";
?>

<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lTSYLxehL0P932iCEEzHKsyKuBoEXgBzkb_NPziAFKVO4bfgz4_10GRiF5iX4orDKfK3GoqYJk_zp9vN0MxqTuIGCKeIHNSX17M2wefl5Kiv5ObPcYt9NZDLjJohsuJIBs">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nhà cung cấp
</font></font></h1>
<div class="float-right">
<a class="btn btn-primary" href="/Admin/Vendor/Create">
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
<div class="row search-row opened" data-hideattribute="VendorsPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-6">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên nhà cung cấp</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="A vendor name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchName" name="SearchName" type="text" value="">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchEmail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email của nhà cung cấp</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a vendor Email."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchEmail" name="SearchEmail" type="text" value="">
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-vendors" class="btn btn-primary btn-search">
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
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/vendor-management.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">quản lý nhà cung cấp</font></font></a></span></div>
<div id="vendors-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 367.891px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 368.281px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 65.875px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tích cực</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 120.953px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="vendors-grid" role="grid" aria-describedby="vendors-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 367.891px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 368.281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 65.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tích cực</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 120.953px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà cung cấp 1</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nhà cung cấp1email@gmail.com</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà cung cấp 2</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nhà cung cấp2email@gmail.com</font></font></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/2"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="vendors-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="vendors-grid_previous"><a href="#" aria-controls="vendors-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="vendors-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item next disabled" id="vendors-grid_next"><a href="#" aria-controls="vendors-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="vendors-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trình diễn</font></font><select name="vendors-grid_length" aria-controls="vendors-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="vendors-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-2 trong số 2 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="vendors-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
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
