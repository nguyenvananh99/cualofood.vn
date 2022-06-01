<?php
 require_once "./app/views/layouts/header.php";
?>

<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQ0AEACeefesC7TmN28RJ5ys3esxHRNJ4Qz0jYeq2phfZGzAbGM6s9SeGswp9NYAg2B5fH-uoGl2j712_JZAlShmNB8GUFXbaqWILxEXNF5ppYLgSSJhGPsPMtAIwNfzcE">
<form method="post" action="/Admin/Order/List" novalidate="novalidate">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Đơn hàng
</font></font></h1>
<div class="float-right">
<div class="btn-group">
<button type="button" class="btn btn-success">
<i class="fas fa-download"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xuất khẩu
</font></font></button>
<button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
<span class="sr-only">&nbsp;</span>
</button>
<ul class="dropdown-menu" role="menu">
<li class="dropdown-item">
<button type="submit" name="exportxml-all" formaction="/Admin/Order/ExportXml">
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
<button type="submit" name="exportexcel-all" formaction="/Admin/Order/ExportExcel">
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
<div class="btn-group">
<button type="button" class="btn btn-info">
<i class="far fa-file-pdf"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
In hóa đơn PDF
</font></font></button>
<button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
<span class="sr-only">&nbsp;</span>
</button>
<ul class="dropdown-menu" role="menu">
<li class="dropdown-item">
<button type="submit" name="pdf-invoice-all" formaction="/Admin/Order/PdfInvoice">
Print PDF invoices (all found)
</button>
</li>
<li class="dropdown-item">
<button type="button" id="pdf-invoice-selected">
Print PDF invoices (selected)
</button>
</li>
</ul>
</div>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="OrdersPage.HideSearchBlock">
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
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="WarehouseId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kho</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Load orders with products from a specified warehouse."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Warehouse field is required." id="WarehouseId" name="WarehouseId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kho 1 (New York)</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kho 2 (Los Angeles)</font></font></option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="ProductId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific product."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input type="text" id="search-product-name" autocomplete="off" class="form-control ui-autocomplete-input">
<span id="search-product-friendly-name"></span>
<button type="button" id="search-product-clear" class="btn bg-gray" style="display: none; margin-top: 5px;">Clear</button>
<input autocomplete="off" style="display: none;" type="number" data-val="true" data-val-required="The Product field is required." id="ProductId" name="ProductId" value="0">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="OrderStatusIds" id="OrderStatusIds_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các trạng thái đặt hàng</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific order status e.g. Complete."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style=""><div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on"><ul unselectable="on" class="k-reset" id="OrderStatusIds_taglist"><li role="option" aria-selected="true" class="k-button" unselectable="on" aria-setsize="1"><span unselectable="on"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></span><span aria-hidden="true" unselectable="on" aria-label="xóa bỏ" title="xóa bỏ" class="k-select"><span class="k-icon k-i-close"></span></span></li></ul><input class="k-input" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="OrderStatusIds_taglist" aria-labelledby="OrderStatusIds_label" aria-disabled="false" aria-busy="false"><span unselectable="on" class="k-icon k-clear-value k-i-close" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span></div><select id="OrderStatusIds" multiple="multiple" name="OrderStatusIds" data-role="multiselect" aria-disabled="false" style="display: none;"><option value="0" selected="">All</option><option value="10">Pending</option><option value="20">Processing</option><option value="30">Complete</option><option value="40">Cancelled</option></select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span></div>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="PaymentStatusIds" id="PaymentStatusIds_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trạng thái thanh toán</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific payment status e.g. Paid."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style=""><div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on"><ul unselectable="on" class="k-reset" id="PaymentStatusIds_taglist"><li role="option" aria-selected="true" class="k-button" unselectable="on" aria-setsize="1"><span unselectable="on"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></span><span aria-hidden="true" unselectable="on" aria-label="xóa bỏ" title="xóa bỏ" class="k-select"><span class="k-icon k-i-close"></span></span></li></ul><input class="k-input" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="PaymentStatusIds_taglist" aria-labelledby="PaymentStatusIds_label" aria-disabled="false" aria-busy="false"><span unselectable="on" class="k-icon k-clear-value k-i-close" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span></div><select id="PaymentStatusIds" multiple="multiple" name="PaymentStatusIds" data-role="multiselect" aria-disabled="false" style="display: none;"><option value="0" selected="">All</option><option value="10">Pending</option><option value="20">Authorized</option><option value="30">Paid</option><option value="35">Partially refunded</option><option value="40">Refunded</option><option value="50">Voided</option></select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span></div>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="ShippingStatusIds" id="ShippingStatusIds_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trạng thái vận chuyển</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific shipping status e.g. Not yet shipped."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style=""><div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on"><ul unselectable="on" class="k-reset" id="ShippingStatusIds_taglist"><li role="option" aria-selected="true" class="k-button" unselectable="on" aria-setsize="1"><span unselectable="on"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></span><span aria-hidden="true" unselectable="on" aria-label="xóa bỏ" title="xóa bỏ" class="k-select"><span class="k-icon k-i-close"></span></span></li></ul><input class="k-input" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="ShippingStatusIds_taglist" aria-labelledby="ShippingStatusIds_label" aria-disabled="false" aria-busy="false"><span unselectable="on" class="k-icon k-clear-value k-i-close" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span></div><select id="ShippingStatusIds" multiple="multiple" name="ShippingStatusIds" data-role="multiselect" aria-disabled="false" style="display: none;"><option value="0" selected="">All</option><option value="10">Shipping not required</option><option value="20">Not yet shipped</option><option value="25">Partially shipped</option><option value="30">Shipped</option><option value="40">Delivered</option></select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span></div>
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row" style="display:none">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="StoreId">Store</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific store."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Store field is required." id="StoreId" name="StoreId"><option selected="selected" value="0">All</option>
<option value="1">Your store name</option>
<option value="2">Test store 2</option>
</select>
 </div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="VendorId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Người bán</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific vendor. You'll see orders with products from a specified vendor."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Vendor field is required." id="VendorId" name="VendorId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà cung cấp 1</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà cung cấp 2</font></font></option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="BillingPhone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số điện thoại thanh toán</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Filter by customer billing phone number."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="BillingPhone" name="BillingPhone" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="BillingEmail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ email thanh toán</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Filter by customer billing email address."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="BillingEmail" name="BillingEmail" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="BillingLastName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ tên hóa đơn</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Filter by customer billing last name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="BillingLastName" name="BillingLastName" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="BillingCountryId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đất nước thanh toán</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Filter by order billing country."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Billing country field is required." id="BillingCountryId" name="BillingCountryId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></option>
<option value="88"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Afghanistan</font></font></option>
<option value="89"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Albania</font></font></option>
<option value="90"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Algeria</font></font></option>
<option value="91"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">American Samoa</font></font></option>
<option value="92"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andorra</font></font></option>
<option value="93"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Angola</font></font></option>
<option value="94"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anguilla</font></font></option>
<option value="95"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nam Cực</font></font></option>
<option value="96"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Antigua và Barbuda</font></font></option>
<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Argentina</font></font></option>
<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Armenia</font></font></option>
<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aruba</font></font></option>
<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Châu Úc</font></font></option>
<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Áo</font></font></option>
<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Azerbaijan</font></font></option>
<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bahamas</font></font></option>
<option value="97"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bahrain</font></font></option>
<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></option>
<option value="98"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Barbados</font></font></option>
<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Belarus</font></font></option>
<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Bỉ</font></font></option>
<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Belize</font></font></option>
<option value="99"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Benin</font></font></option>
<option value="14"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bermuda</font></font></option>
<option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bhutan</font></font></option>
<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bolivia</font></font></option>
<option value="16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bosnia và Herzegowina</font></font></option>
<option value="101"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Botswana</font></font></option>
<option value="102"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đảo Bouvet</font></font></option>
<option value="17"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Brazil</font></font></option>
<option value="103"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lãnh thổ Ấn Độ Dương thuộc Anh</font></font></option>
<option value="104"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vương quốc Bru-nây</font></font></option>
<option value="18"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bungari</font></font></option>
<option value="105"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Burkina Faso</font></font></option>
<option value="106"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Burundi</font></font></option>
<option value="107"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Campuchia</font></font></option>
<option value="108"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cameroon</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Canada</font></font></option>
<option value="109">Cape Verde</option>
<option value="19">Cayman Islands</option>
<option value="110">Central African Republic</option>
<option value="111">Chad</option>
<option value="20">Chile</option>
<option value="21">China</option>
<option value="112">Christmas Island</option>
<option value="113">Cocos (Keeling) Islands</option>
<option value="22">Colombia</option>
<option value="114">Comoros</option>
<option value="115">Congo</option>
<option value="116">Congo (Democratic Republic of the)</option>
<option value="117">Cook Islands</option>
<option value="23">Costa Rica</option>
<option value="118">Cote D'Ivoire</option>
<option value="24">Croatia</option>
<option value="25">Cuba</option>
<option value="26">Cyprus</option>
<option value="27">Czech Republic</option>
<option value="28">Denmark</option>
<option value="119">Djibouti</option>
<option value="120">Dominica</option>
<option value="29">Dominican Republic</option>
<option value="30">East Timor</option>
<option value="31">Ecuador</option>
<option value="32">Egypt</option>
<option value="121">El Salvador</option>
<option value="122">Equatorial Guinea</option>
<option value="123">Eritrea</option>
<option value="124">Estonia</option>
<option value="125">Ethiopia</option>
<option value="126">Falkland Islands (Malvinas)</option>
<option value="127">Faroe Islands</option>
<option value="128">Fiji</option>
<option value="33">Finland</option>
<option value="34">France</option>
<option value="129">French Guiana</option>
<option value="130">French Polynesia</option>
<option value="131">French Southern Territories</option>
<option value="132">Gabon</option>
<option value="133">Gambia</option>
<option value="35">Georgia</option>
<option value="36">Germany</option>
<option value="134">Ghana</option>
<option value="37">Gibraltar</option>
<option value="38">Greece</option>
<option value="135">Greenland</option>
<option value="136">Grenada</option>
<option value="137">Guadeloupe</option>
<option value="138">Guam</option>
<option value="39">Guatemala</option>
<option value="139">Guinea</option>
<option value="140">Guinea-bissau</option>
<option value="141">Guyana</option>
<option value="142">Haiti</option>
<option value="143">Heard and Mc Donald Islands</option>
<option value="144">Honduras</option>
<option value="40">Hong Kong</option>
<option value="41">Hungary</option>
<option value="145">Iceland</option>
<option value="42">India</option>
<option value="43">Indonesia</option>
<option value="146">Iran (Islamic Republic of)</option>
<option value="147">Iraq</option>
<option value="44">Ireland</option>
<option value="45">Israel</option>
<option value="46">Italy</option>
<option value="47">Jamaica</option>
<option value="48">Japan</option>
<option value="49">Jordan</option>
<option value="50">Kazakhstan</option>
<option value="148">Kenya</option>
<option value="149">Kiribati</option>
<option value="150">Korea</option>
<option value="51">Korea, Democratic People's Republic of</option>
<option value="52">Kuwait</option>
<option value="151">Kyrgyzstan</option>
<option value="152">Lao People's Democratic Republic</option>
<option value="153">Latvia</option>
<option value="154">Lebanon</option>
<option value="155">Lesotho</option>
<option value="156">Liberia</option>
<option value="157">Libyan Arab Jamahiriya</option>
<option value="158">Liechtenstein</option>
<option value="159">Lithuania</option>
<option value="160">Luxembourg</option>
<option value="161">Macau</option>
<option value="162">Macedonia</option>
<option value="163">Madagascar</option>
<option value="164">Malawi</option>
<option value="53">Malaysia</option>
<option value="165">Maldives</option>
<option value="166">Mali</option>
<option value="167">Malta</option>
<option value="168">Marshall Islands</option>
<option value="169">Martinique</option>
<option value="170">Mauritania</option>
<option value="171">Mauritius</option>
<option value="172">Mayotte</option>
<option value="54">Mexico</option>
<option value="173">Micronesia</option>
<option value="174">Moldova</option>
<option value="175">Monaco</option>
<option value="176">Mongolia</option>
<option value="177">Montenegro</option>
<option value="178">Montserrat</option>
<option value="179">Morocco</option>
<option value="180">Mozambique</option>
<option value="181">Myanmar</option>
<option value="182">Namibia</option>
<option value="183">Nauru</option>
<option value="184">Nepal</option>
<option value="55">Netherlands</option>
<option value="185">Netherlands Antilles</option>
<option value="186">New Caledonia</option>
<option value="56">New Zealand</option>
<option value="187">Nicaragua</option>
<option value="188">Niger</option>
<option value="189">Nigeria</option>
<option value="190">Niue</option>
<option value="191">Norfolk Island</option>
<option value="192">Northern Mariana Islands</option>
<option value="57">Norway</option>
<option value="193">Oman</option>
<option value="58">Pakistan</option>
<option value="194">Palau</option>
<option value="59">Palestine</option>
<option value="195">Panama</option>
<option value="196">Papua New Guinea</option>
<option value="60">Paraguay</option>
<option value="61">Peru</option>
<option value="62">Philippines</option>
<option value="197">Pitcairn</option>
<option value="63">Poland</option>
<option value="64">Portugal</option>
<option value="65">Puerto Rico</option>
<option value="66">Qatar</option>
<option value="198">Reunion</option>
<option value="67">Romania</option>
<option value="68">Russian Federation</option>
<option value="199">Rwanda</option>
<option value="200">Saint Kitts and Nevis</option>
<option value="201">Saint Lucia</option>
<option value="202">Saint Vincent and the Grenadines</option>
<option value="203">Samoa</option>
<option value="204">San Marino</option>
<option value="205">Sao Tome and Principe</option>
<option value="69">Saudi Arabia</option>
<option value="206">Senegal</option>
<option value="87">Serbia</option>
<option value="207">Seychelles</option>
<option value="208">Sierra Leone</option>
<option value="70">Singapore</option>
<option value="71">Slovakia (Slovak Republic)</option>
<option value="72">Slovenia</option>
<option value="209">Solomon Islands</option>
<option value="210">Somalia</option>
<option value="73">South Africa</option>
<option value="211">South Georgia &amp; South Sandwich Islands</option>
<option value="212">South Sudan</option>
<option value="74">Spain</option>
<option value="213">Sri Lanka</option>
<option value="214">St. Helena</option>
<option value="215">St. Pierre and Miquelon</option>
<option value="216">Sudan</option>
<option value="217"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suriname</font></font></option>
<option value="218"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Svalbard và Jan Mayen</font></font></option>
<option value="219"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Swaziland</font></font></option>
<option value="75"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thụy Điển</font></font></option>
<option value="76"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thụy sĩ</font></font></option>
<option value="220"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cộng Hòa Arab Syrian</font></font></option>
<option value="77"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đài loan</font></font></option>
<option value="221"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tajikistan</font></font></option>
<option value="222"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tanzania</font></font></option>
<option value="78"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Thái Lan</font></font></option>
<option value="223"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đi</font></font></option>
<option value="224"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tokelau</font></font></option>
<option value="225"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tonga</font></font></option>
<option value="226"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trinidad và Tobago</font></font></option>
<option value="227"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tunisia</font></font></option>
<option value="79"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thổ Nhĩ Kỳ</font></font></option>
<option value="228"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Turkmenistan</font></font></option>
<option value="229"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Turks và Caicos</font></font></option>
<option value="230"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tuvalu</font></font></option>
<option value="231"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uganda</font></font></option>
<option value="80"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ukraine</font></font></option>
<option value="81"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">các Tiểu Vương Quốc Ả Rập Thống Nhất</font></font></option>
<option value="82"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vương quốc Anh</font></font></option>
<option value="83"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các đảo nhỏ xa xôi hẻo lánh của Hoa Kỳ</font></font></option>
<option value="84"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uruguay</font></font></option>
<option value="85"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">U-dơ-bê-ki-xtan</font></font></option>
<option value="232"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vanuatu</font></font></option>
<option value="233"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà nước thành phố Vatican (Tòa thánh)</font></font></option>
<option value="86"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Venezuela</font></font></option>
<option value="234"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Việt Nam</font></font></option>
<option value="235"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Virgin (thuộc Anh)</font></font></option>
<option value="236"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Virgin (Mỹ)</font></font></option>
<option value="237"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Wallis và Futuna</font></font></option>
<option value="238"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía tây Sahara</font></font></option>
<option value="239"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yemen</font></font></option>
<option value="240"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zambia</font></font></option>
<option value="241"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zimbabwe</font></font></option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="PaymentMethodSystemName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phương thức thanh toán</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific payment method."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" id="PaymentMethodSystemName" name="PaymentMethodSystemName"><option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="Payments.PayPalCommerce"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PayPal Commerce</font></font></option>
<option value="Payments.PayPalStandard"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiêu chuẩn PayPal</font></font></option>
<option value="Payments.CheckMoneyOrder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Séc / Lệnh chuyển tiền</font></font></option>
<option value="Payments.Manual"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thẻ tín dụng</font></font></option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="OrderNotes"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghi chú đơn hàng</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search in order notes. Leave empty to load all orders."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="OrderNotes" name="OrderNotes" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="GoDirectlyToCustomOrderNumber"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đến trực tiếp để đặt hàng #</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Go directly to order #."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<div class="input-group input-group-short">
<input class="form-control text-box single-line" id="GoDirectlyToCustomOrderNumber" name="GoDirectlyToCustomOrderNumber" type="text" value="">
<span class="input-group-append">
<button type="submit" id="go-to-order-by-number" name="go-to-order-by-number" class="btn btn-info btn-flat"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Đi
</font></font></button>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-orders" class="btn btn-primary btn-search">
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
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/order-management/orders.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">đơn đặt hàng</font></font></a></span></div>
<div id="orders-grid_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 13.4531px;"><input class="mastercheckbox" type="checkbox"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 41.4688px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi món #</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.4688px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng đặt hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.125px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng thanh toán</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.4375px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng giao hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 256.797px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">khách hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 38.7969px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75.3906px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo ra</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.0938px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng đơn đặt hàng</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.9688px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable" width="100%" id="orders-grid" role="grid" aria-describedby="orders-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 13.4531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input class="mastercheckbox" type="checkbox"></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 41.4688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi món #</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.4688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng đặt hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng thanh toán</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.4375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng giao hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 256.797px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">khách hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 38.7969px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75.3906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo ra</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.0938px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng đơn đặt hàng</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.9688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></div></th></tr></thead><tfoot>
<tr style="height: 0px;"><td class="text-center" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 13.4531px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 41.4688px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 91.4688px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 64.125px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 64.4375px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 256.797px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 38.7969px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 75.3906px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 64.0938px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td><td class="button-column" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 62.9688px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></td></tr>
</tfoot>

<tbody><tr class="odd"><td class=" text-center"><input name="checkbox_orders" value="5" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td><span class="grid-report-item green"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoàn thành</font></font></span></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã giao hàng</font></font></td><td><a href="/Admin/Customer/Edit/6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">victoria_victoria@nopCommerce.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:10 AM</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 43,50</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/5"><i class="far fa-eye"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_orders" value="4" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td><span class="grid-report-item blue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xử lý</font></font></span></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã vận chuyển</font></font></td><td><a href="/Admin/Customer/Edit/5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">brenda_lindgren@nopCommerce.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:09 AM</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 102,00</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/4"><i class="far fa-eye"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_orders" value="3" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td><span class="grid-report-item yellow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></span></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vận chuyển không bắt buộc</font></font></td><td><a href="/Admin/Customer/Edit/4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">james_pan@nopCommerce.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:09 AM</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 8,80</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/3"><i class="far fa-eye"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_orders" value="2" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td><span class="grid-report-item yellow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></span></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa được vận chuyển</font></font></td><td><a href="/Admin/Customer/Edit/3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">arthur_holmes@nopCommerce.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:09 AM</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 2.460,00</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/2"><i class="far fa-eye"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_orders" value="1" type="checkbox" class="checkboxGroups"></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td><span class="grid-report-item blue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xử lý</font></font></span></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa được vận chuyển</font></font></td><td><a href="/Admin/Customer/Edit/2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">steve_gates@nopCommerce.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên cửa hàng của bạn</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:09 AM</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 1,855,00</font></font></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="far fa-eye"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lượt xem</font></font></a></td></tr></tbody></table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><tfoot>
<tr><td class="text-center" rowspan="1" colspan="1" style="width: 13.4531px;"></td><td rowspan="1" colspan="1" style="width: 41.4688px;"></td><td rowspan="1" colspan="1" style="width: 91.4688px;"></td><td rowspan="1" colspan="1" style="width: 64.125px;"></td><td rowspan="1" colspan="1" style="width: 64.4375px;"></td><td rowspan="1" colspan="1" style="width: 256.797px;"></td><td rowspan="1" colspan="1" style="width: 38.7969px;"></td><td rowspan="1" colspan="1" style="width: 75.3906px;"></td><td rowspan="1" colspan="1" style="width: 64.0938px;"><div><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bản tóm tắt</font></font></strong></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lợi nhuận </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 4,469,30</font></font></span></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao hàng </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 0,00</font></font></span></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thuế </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 0,00</font></font></span></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 4,469,30</font></font></span></div></td><td class="button-column" rowspan="1" colspan="1" style="width: 62.9688px;"></td></tr>
</tfoot></table></div></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="orders-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="orders-grid_previous"><a href="#" aria-controls="orders-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="orders-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item next disabled" id="orders-grid_next"><a href="#" aria-controls="orders-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="orders-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trình diễn</font></font><select name="orders-grid_length" aria-controls="orders-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="orders-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-5 trong số 5 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="orders-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</section>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQ0AEACeefesC7TmN28RJ5ys3esxHRNJ4Qz0jYeq2phfZGzAbGM6s9SeGswp9NYAg2B5fH-uoGl2j712_JZAlShmNB8GUFXbaqWILxEXNF5ppYLgSSJhGPsPMtAIwNfzcE"></form>
<form method="post" id="export-xml-selected-form" action="/Admin/Order/ExportXmlSelected">
<input type="hidden" id="selectedIds" name="selectedIds" value="">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQ0AEACeefesC7TmN28RJ5ys3esxHRNJ4Qz0jYeq2phfZGzAbGM6s9SeGswp9NYAg2B5fH-uoGl2j712_JZAlShmNB8GUFXbaqWILxEXNF5ppYLgSSJhGPsPMtAIwNfzcE"></form>
<div id="exportXmlSelected-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exportXmlSelected-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exportXmlSelected-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="exportXmlSelected-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="exportXmlSelected" style="display:none" data-toggle="modal" data-target="#exportXmlSelected-action-alert"></div><script>$(document).ready(function () {$('#exportXmlSelected').attr("data-toggle", "modal").attr("data-target", "#exportXmlSelected-action-alert")});</script></div>
<form method="post" id="export-excel-selected-form" action="/Admin/Order/ExportExcelSelected">
<input type="hidden" id="selectedIds" name="selectedIds" value="">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQ0AEACeefesC7TmN28RJ5ys3esxHRNJ4Qz0jYeq2phfZGzAbGM6s9SeGswp9NYAg2B5fH-uoGl2j712_JZAlShmNB8GUFXbaqWILxEXNF5ppYLgSSJhGPsPMtAIwNfzcE"></form>
<div id="exportExcelSelected-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exportExcelSelected-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exportExcelSelected-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="exportExcelSelected-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="exportExcelSelected" style="display:none" data-toggle="modal" data-target="#exportExcelSelected-action-alert"></div><script>$(document).ready(function () {$('#exportExcelSelected').attr("data-toggle", "modal").attr("data-target", "#exportExcelSelected-action-alert")});</script></div>
<form method="post" id="pdf-invoice-selected-form" action="/Admin/Order/PdfInvoiceSelected">
<input type="hidden" id="selectedIds" name="selectedIds" value="">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQ0AEACeefesC7TmN28RJ5ys3esxHRNJ4Qz0jYeq2phfZGzAbGM6s9SeGswp9NYAg2B5fH-uoGl2j712_JZAlShmNB8GUFXbaqWILxEXNF5ppYLgSSJhGPsPMtAIwNfzcE"></form>
<div id="pdfInvoiceSelected-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="pdfInvoiceSelected-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="pdfInvoiceSelected-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="pdfInvoiceSelected-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="pdfInvoiceSelected" style="display:none" data-toggle="modal" data-target="#pdfInvoiceSelected-action-alert"></div><script>$(document).ready(function () {$('#pdfInvoiceSelected').attr("data-toggle", "modal").attr("data-target", "#pdfInvoiceSelected-action-alert")});</script></div>
</div>
                <?php
 require_once "./app/views/layouts/footer.php";
?>