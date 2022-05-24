<?php
 require_once "./app/views/layouts/header.php";
 
?>
<div class="content-wrapper col-sm-10 offset-3" style="min-height: 187px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQe0UMrtLNs2kdkc5mWTZnod_N_mLBjs9b06v9FbLK8TRTT9NQibPS-pmIz3UgAH65GyjdAo-0uuDDCVsBADDaBcaocGV8n_GPgI5by1Ryc3n99v2ODDc6IbEUVAZrbkEM">
<form method="post" id="product-tags-form" action="/Admin/Product/ProductTags">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thẻ sản phẩm
</font></font></h1>
<div class="float-right">
&nbsp;
<button type="button" id="delete-selected" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-action-confirmation" name="">
<i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xóa đã chọn)
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
<div class="row search-row opened" data-hideattribute="ManufacturersPage.HideSearchBlock">
<div class="search-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-6">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchTagName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tag tên</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a tag name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchTagName" name="SearchTagName" type="text" value="">
</div>
</div>
</div>
</div>
<div class="form-group row">
<div class="text-center col-12">
<button type="button" id="search-product-tags" class="btn btn-primary btn-search">
<i class="fas fa-search"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Tìm kiếm
</font></font></button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="cards-group">
<div class="card card-default">
<div class="card-body">
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/catalog/products/product-tags.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">thẻ sản phẩm</font></font></a></span></div>
<div id="product-tags-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 49.9375px;"><input class="mastercheckbox" type="checkbox"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 623.203px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tag tên</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 149.844px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm được gắn thẻ</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 100.016px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="product-tags-grid" role="grid" aria-describedby="product-tags-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 49.9375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input class="mastercheckbox" type="checkbox"></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 623.203px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tag tên</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 149.844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm được gắn thẻ</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 100.016px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="8" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tuyệt vời</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/8"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="3" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ngầu</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/3"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="6" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">máy vi tính</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/6"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="4" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">may mặc</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/4"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="9" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">gọn nhẹ</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/9"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="1" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">đẹp</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/1"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="10" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sách</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/10"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="12" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Máy ảnh</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/12"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="16" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">điện tử</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/16"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="13" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">trang sức</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/13"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="5" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">áo sơ mi</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/5"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="11" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tủ</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/11"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="14" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần jean</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/14"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_producttags" value="7" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">đôi giày</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/7"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_producttags" value="15" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">trò chơi</font></font></td><td class=" text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td class=" button-column"><a class="btn btn-default" href="EditProductTag/15"><i class="fas fa-pencil-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biên tập</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="product-tags-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="product-tags-grid_previous"><a href="#" aria-controls="product-tags-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="product-tags-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="product-tags-grid" data-dt-idx="2" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_button page-item next" id="product-tags-grid_next"><a href="#" aria-controls="product-tags-grid" data-dt-idx="3" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="product-tags-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thể hiện</font></font><select name="product-tags-grid_length" aria-controls="product-tags-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="product-tags-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-15 trong số 16 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="product-tags-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
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
</div>
</div>
</div>
</div>
</section>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQe0UMrtLNs2kdkc5mWTZnod_N_mLBjs9b06v9FbLK8TRTT9NQibPS-pmIz3UgAH65GyjdAo-0uuDDCVsBADDaBcaocGV8n_GPgI5by1Ryc3n99v2ODDc6IbEUVAZrbkEM"></form>
</div>
<?php
 require_once "./app/views/layouts/footer.php";
 
?>