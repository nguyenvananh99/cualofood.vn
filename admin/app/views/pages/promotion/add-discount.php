<?php
  require_once "./app/views/layouts/header.php";
?>
<form method="post" id="discount-form" action="/Admin/Discount/Create" novalidate="novalidate" class="col-sm-8 offset-3">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thêm giảm giá mới
</font></font><small>
<i class="fas fa-arrow-circle-left"></i>
<a href="/Admin/Discount/List"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">quay lại danh sách giảm giá</font></font></a>
</small>
</h1>
<div class="float-right">
<button type="submit" name="save" class="btn btn-primary">
<i class="far fa-save"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Cứu
</font></font></button>
<button type="submit" name="save-continue" class="btn btn-primary">
<i class="far fa-save"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Lưu và Tiếp tục Chỉnh sửa
</font></font></button>
</div>
</div>
<div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
<input type="hidden" data-val="true" data-val-required="The Id field is required." id="Id" name="Id" value="0">
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="row">
<div class="col-md-12 clearfix">
<div class="float-left">
<div class="form-group row">
<div class="col-md-12">
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="advanced-settings-mode" checked="checked">
<label class="onoffswitch-label" for="advanced-settings-mode">
<span class="onoffswitch-inner" data-locale-basic="Basic" data-locale-advanced="Advanced"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
<nop-cards id="discount-cards">
<nop-card><div class="card card-secondary card-outline" data-card-name="discount-info" data-hideattribute="DiscountPage.HideInfoBlock" id="discount-info"><div class="card-header with-border clearfix"><div class="card-title"><i class="fas fa-info"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin giảm giá</font></font></div><div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div></div>
<div class="card-body">
<div class="form-group row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="Name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The name of the discount."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<div class="input-group input-group-required"><input class="form-control text-box single-line" data-val="true" data-val-length="'Name' must be between 0 and 200 characters." data-val-length-max="200" data-val-length-min="0" data-val-required="Please provide a name." id="Name" name="Name" type="text" value=""><div class="input-group-btn"><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></div></div>
<span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="DiscountTypeId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại giảm giá</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The type of discount."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<select class="form-control" data-val="true" data-val-required="The Discount type field is required." id="DiscountTypeId" name="DiscountTypeId"><option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã chỉ định cho tổng số đơn đặt hàng</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho các sản phẩm</font></font></option>
<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho các danh mục</font></font></option>
<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao cho nhà sản xuất</font></font></option>
<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao cho vận chuyển</font></font></option>
<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được chỉ định cho tổng phụ của đơn đặt hàng</font></font></option>
</select>
<span class="field-validation-valid" data-valmsg-for="DiscountTypeId" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group row d-none" id="pnlAppliedToSubCategories">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="AppliedToSubCategories">Apply to subcategories</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to apply discount to subcategories of the selected parent. But please note that it can affect performance if you have a lot of nested subcategories."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<input class="check-box" data-val="true" data-val-required="The Apply to subcategories field is required." id="AppliedToSubCategories" name="AppliedToSubCategories" type="checkbox" value="true">
<span class="field-validation-valid" data-valmsg-for="AppliedToSubCategories" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group row parent-setting" id="parentSetting899520378">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="UsePercentage"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sử dụng phần trăm</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Determines whether to apply a percentage discount to the order/SKUs. If not enabled, a set value is discounted."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<input class="check-box" data-val="true" data-val-required="The Use percentage field is required." id="UsePercentage" name="UsePercentage" type="checkbox" value="true">
<span class="field-validation-valid" data-valmsg-for="UsePercentage" data-valmsg-replace="true"></span>
</div>
</div>
<div class="nested-setting" id="nestedSetting899520378"><script>$(document).ready(function () {initNestedSetting('UsePercentage', 'parentSetting899520378', 'nestedSetting899520378');});</script>
<div class="form-group row d-none" id="pnlDiscountPercentage">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="DiscountPercentage">Discount percentage</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The percentage discount to apply to order/SKUs."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0.0000 " tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Discount percentage must be a number." data-val-required="The Discount percentage field is required." id="DiscountPercentage" name="DiscountPercentage" value="0.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="DiscountPercentage" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group advanced-setting row d-none" id="pnlMaximumDiscountAmount">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="MaximumDiscountAmount">Maximum discount amount</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Maximum allowed discount amount. Leave empty to allow any discount amount. If you're using &quot;Assigned to products&quot; discount type, then it's applied to each product separately."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Maximum discount amount must be a number." id="MaximumDiscountAmount" name="MaximumDiscountAmount" value="" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="MaximumDiscountAmount" data-valmsg-replace="true"></span>
</div>
</div>
</div>
<div class="form-group row" id="pnlDiscountAmount">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="DiscountAmount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số tiền chiết khấu</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The discount amount to apply to the order/SKUs."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0,0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Discount amount must be a number." data-val-required="The Discount amount field is required." id="DiscountAmount" name="DiscountAmount" value="0.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="DiscountAmount" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group row parent-setting" id="parentSetting1374185448">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="RequiresCouponCode"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yêu cầu mã phiếu giảm giá</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="If checked, a customer must supply a valid coupon code for the discount to be applied."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<input class="check-box" data-val="true" data-val-required="The Requires coupon code field is required." id="RequiresCouponCode" name="RequiresCouponCode" type="checkbox" value="true">
<span class="field-validation-valid" data-valmsg-for="RequiresCouponCode" data-valmsg-replace="true"></span>
</div>
</div>
<div class="nested-setting" id="nestedSetting1374185448"><script>$(document).ready(function () {initNestedSetting('RequiresCouponCode', 'parentSetting1374185448', 'nestedSetting1374185448');});</script>
<div class="form-group row d-none" id="pnlCouponCode">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="CouponCode">Coupon code</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The discount coupon code."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<input class="form-control text-box single-line" data-val="true" data-val-length="'Coupon Code' must be between 0 and 100 characters." data-val-length-max="100" data-val-length-min="0" id="CouponCode" name="CouponCode" type="text" value="">
<span class="field-validation-valid" data-valmsg-for="CouponCode" data-valmsg-replace="true"></span>
</div>
</div>
</div>
<div class="nested-setting" id="nestedSetting286712572"><script>$(document).ready(function () {initNestedSetting('RequiresCouponCode', 'parentSetting286712572', 'nestedSetting286712572');});</script>
<div class="form-group row d-none" id="pnlDiscountUrl">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="DiscountUrl">URL with coupon code</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The sample link that includes a discount coupon code, so that customers do not have to input the coupon code at checkout. You can also use this query parameter with any other link to your store, for example link to certain product or category."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<div class="form-text-row"></div>
</div>
</div>
</div>
<div class="form-group advanced-setting row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="StartDateUtc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày bắt đầu</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The start of the discount period in Coordinated Universal Time (UTC)."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="StartDateUtc" name="StartDateUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Mở chế độ xem ngày" aria-controls="StartDateUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Mở chế độ xem thời gian" aria-controls="StartDateUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="StartDateUtc" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group advanced-setting row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="EndDateUtc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày cuối</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The end of the discount period in Coordinated Universal Time (UTC)."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="EndDateUtc" name="EndDateUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Mở chế độ xem ngày" aria-controls="EndDateUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Mở chế độ xem thời gian" aria-controls="EndDateUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="EndDateUtc" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group advanced-setting row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="IsCumulative"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tích lũy với các chiết khấu khác</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="If checked, this discount can be used with other ones simultaneously. Please note that this feature works only for discounts with the same discount type. Right now, discounts with distinct types are already cumulative."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<input class="check-box" data-val="true" data-val-required="The Cumulative with other discounts field is required." id="IsCumulative" name="IsCumulative" type="checkbox" value="true">
<span class="field-validation-valid" data-valmsg-for="IsCumulative" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group advanced-setting row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="DiscountLimitationId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giới hạn chiết khấu</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose the limitation of discount. This parameter will not be taken into account for recurring products/orders."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<select class="form-control" data-val="true" data-val-required="The Discount limitation field is required." id="DiscountLimitationId" name="DiscountLimitationId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vô hạn</font></font></option>
<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N lần duy nhất</font></font></option>
<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N lần cho mỗi khách hàng</font></font></option>
</select>
<span class="field-validation-valid" data-valmsg-for="DiscountLimitationId" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group row d-none" id="pnlLimitationTimes">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="LimitationTimes">N times</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter the number of times that the discount is limited to."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="1 " tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="1" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The N times field is required." id="LimitationTimes" name="LimitationTimes" value="1" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="1" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="LimitationTimes" data-valmsg-replace="true"></span> times
</div>
</div>
<div class="form-group row d-none" id="pnlMaximumDiscountedQuantity">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="MaximumDiscountedQuantity">Maximum discounted quantity</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Maximum product quantity which could be discounted. For example, you can have two products (the same) in the cart but only one of them will be discounted. It can be used for scenarios like &quot;buy 2 get 1 free&quot;. Leave empty if any quantity could be discounted."><i class="fas fa-question-circle"></i></div></div>
</div>
 <div class="col-md-9">
<span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-disabled="false" style=""><input type="text" id="MaximumDiscountedQuantity" name="MaximumDiscountedQuantity" value="" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
<span class="field-validation-valid" data-valmsg-for="MaximumDiscountedQuantity" data-valmsg-replace="true"></span>
</div>
</div>
<div class="form-group advanced-setting row">
<div class="col-md-3">
<div class="label-wrapper"><label class="col-form-label" for="AdminComment"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bình luận của quản trị viên</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="This comment is for internal use only, not visible for customers."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-9">
<textarea class="form-control" rows="4" cols="20" data-val="true" data-val-length="'Admin Comment' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="AdminComment" name="AdminComment"></textarea>
<span class="field-validation-valid" data-valmsg-for="AdminComment" data-valmsg-replace="true"></span>
</div>
</div>
</div>
</div></nop-card>
<nop-card><div class="card card-secondary card-outline advanced-setting collapsed-card" data-card-name="discount-requirements" data-hideattribute="DiscountPage.HideRequirementsBlock" id="discount-requirements"><div class="card-header with-border clearfix"><div class="card-title"><i class="fas fa-list"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yêu cầu</font></font></div><div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-plus"></i></button></div></div>
<div class="card-body">
<div class="cards-group">
<div class="card card-default">
<div class="card-body">
You need to save the discount before you can add requirements for this discount page.
</div>
</div>
</div>
<div id="failedToSave-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="failedToSave-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="failedToSave-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="failedToSave-info"></div>
Failed to save requirement
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="failedToSave" style="display:none" data-toggle="modal" data-target="#failedToSave-action-alert"></div><script>$(document).ready(function () {$('#failedToSave').attr("data-toggle", "modal").attr("data-target", "#failedToSave-action-alert")});</script></div>
<div id="getDiscountRequirementsAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="getDiscountRequirementsAlert-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="getDiscountRequirementsAlert-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="getDiscountRequirementsAlert-info"></div>
Failed to load requirements info. Please refresh the page.
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="getDiscountRequirementsAlert" style="display:none" data-toggle="modal" data-target="#getDiscountRequirementsAlert-action-alert"></div><script>$(document).ready(function () {$('#getDiscountRequirementsAlert').attr("data-toggle", "modal").attr("data-target", "#getDiscountRequirementsAlert-action-alert")});</script></div>
</div></div></nop-card>
<nop-card><div class="card card-secondary card-outline collapsed-card d-none" data-card-name="discount-applied-to-products" data-hideattribute="DiscountPage.HideAppliedToProductsBlock" id="discount-applied-to-products"><div class="card-header with-border clearfix"><div class="card-title"><i class="fas fa-object-group"></i>Applied to products</div><div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-plus"></i></button></div></div>
<div class="card-body">
You need to save the discount before you can add products for this discount page.
</div>
</div></nop-card>
<nop-card><div class="card card-secondary card-outline collapsed-card d-none" data-card-name="discount-applied-to-categories" data-hideattribute="DiscountPage.HideAppliedToCategoriesBlock" id="discount-applied-to-categories"><div class="card-header with-border clearfix"><div class="card-title"><i class="fas fa-list-alt"></i>Applied to categories</div><div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-plus"></i></button></div></div>
<div class="card-body">
You need to save the discount before you can add categories for this discount page.
</div>
</div></nop-card>
<nop-card><div class="card card-secondary card-outline collapsed-card d-none" data-card-name="discount-applied-to-manufacturers" data-hideattribute="DiscountPage.HideAppliedToManufacturersBlock" id="discount-applied-to-manufacturers"><div class="card-header with-border clearfix"><div class="card-title"><i class="fas fa-industry"></i>Applied to manufacturers</div><div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-plus"></i></button></div></div>
<div class="card-body">
You need to save the discount before you can add manufacturers for this discount page.
</div>
</div></nop-card>
</nop-cards>
</div>
</div>
</section>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQQ_oM4P7Vk6I0xZc6lFCEbelPOcOT2qyc8CoBk-w6fFNFQV7fjd2oekt6jeUX0viSk8PFPJkoYAseDz-SZ9_YGWSzcmxUpPvEom0YE0VIJRIESdwbktB1kiUj-NnQmxoE"><input name="AppliedToSubCategories" type="hidden" value="false"><input name="UsePercentage" type="hidden" value="false"><input name="RequiresCouponCode" type="hidden" value="false"><input name="IsCumulative" type="hidden" value="false"></form>
<?php
  require_once "./app/views/layouts/footer.php";
?>