<?php
require_once "./app/views/layouts/header.php";
?>
<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lTsaaiCKHckvCjjTzRtnTr9xI2n901sR7q7-T4IBal4I47aQRQliK_iH49RiDRKQMsyoiXVW2RzYeyFcs4ssaX_dB4574VEuDqx67ICewv_tt6ZBJ0qI2xqcoBrIqaIfMk">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Hoạt động đăng nhập
</font></font></h1>
<div class="float-right">
<form method="post" action="/Admin/ActivityLog/ClearAll">
<button type="button" id="clearall" name="" class="btn bg-red" data-toggle="modal" data-target="#clearall-action-confirmation">
<i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Xóa nhật ký hoạt động
</font></font></button>
<div id="clearall-action-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="clearall-action-confirmation-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="clearall-action-confirmation-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
Are you sure you want to perform this action?
</div>
<div class="modal-footer">
<button type="submit" id="clearall-action-confirmation-submit-button" class="btn btn-primary float-right" name="clearall">
Yes
</button>
<span class="btn btn-default float-right margin-r-5" data-dismiss="modal">No, cancel</span>
</div>
</div>
</div> <script>$(document).ready(function () {$('#clearall').attr("data-toggle", "modal").attr("data-target", "#clearall-action-confirmation");$('#clearall-action-confirmation-submit-button').attr("name", $("#clearall").attr("name"));$("#clearall").attr("name", "");if($("#clearall").attr("type") == "submit")$("#clearall").attr("type", "button");});</script></div>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lTsaaiCKHckvCjjTzRtnTr9xI2n901sR7q7-T4IBal4I47aQRQliK_iH49RiDRKQMsyoiXVW2RzYeyFcs4ssaX_dB4574VEuDqx67ICewv_tt6ZBJ0qI2xqcoBrIqaIfMk"></form>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="ActivityLogPage.HideSearchBlock">
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
</div>
<div class="col-md-7">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="ActivityLogTypeId"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại nhật ký hoạt động</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The activity log type."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Activity log type field is required." id="ActivityLogTypeId" name="ActivityLogTypeId"><option selected="selected" value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các</font></font></option>
<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính địa chỉ mới</font></font></option>
<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giá trị thuộc tính địa chỉ mới</font></font></option>
<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một chi nhánh mới</font></font></option>
<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một bài đăng blog mới</font></font></option>
<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một chiến dịch mới</font></font></option>
<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một danh mục mới</font></font></option>
<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính thanh toán mới</font></font></option>
<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một quốc gia mới</font></font></option>
<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm đơn vị tiền tệ mới</font></font></option>
<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một khách hàng mới</font></font></option>
<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính khách hàng mới</font></font></option>
<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giá trị thuộc tính khách hàng mới</font></font></option>
<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vai trò khách hàng mới</font></font></option>
<option value="14"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giảm giá mới</font></font></option>
<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một tài khoản email mới</font></font></option>
<option value="16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thẻ quà tặng mới</font></font></option>
<option value="17"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một ngôn ngữ mới</font></font></option>
<option value="18"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm nhà sản xuất mới</font></font></option>
<option value="19"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thứ nguyên đo lường mới</font></font></option>
<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm trọng lượng thước đo mới</font></font></option>
<option value="21"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một tin tức mới</font></font></option>
<option value="22"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một sản phẩm mới</font></font></option>
<option value="23"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính sản phẩm mới</font></font></option>
<option value="147"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một loại đánh giá mới</font></font></option>
<option value="24"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một cài đặt mới</font></font></option>
<option value="25">Add a new specification attribute</option>
<option value="151">Add a new specification attribute group</option>
<option value="26">Add a new state or province</option>
<option value="27">Add a new store</option>
<option value="28">Add a new topic</option>
<option value="29">Add a new vendor</option>
<option value="141">Add a new vendor attribute</option>
<option value="144">Add a new vendor attribute value</option>
<option value="30">Add a new warehouse</option>
<option value="31">Add a new widget</option>
<option value="111">Categories were imported</option>
<option value="110">Customer impersonation session. Finished</option>
<option value="109">Customer impersonation session. Started</option>
<option value="36">Delete a blog post</option>
<option value="37">Delete a blog post comment</option>
<option value="38">Delete a campaign</option>
<option value="40">Delete a checkout attribute</option>
<option value="41">Delete a country</option>
<option value="42">Delete a currency</option>
<option value="43">Delete a customer</option>
<option value="44">Delete a customer attribute</option>
<option value="45">Delete a customer attribute value</option>
<option value="46">Delete a customer role</option>
<option value="47">Delete a discount</option>
<option value="49">Delete a gift card</option>
<option value="50">Delete a language</option>
<option value="51">Delete a manufacturer</option>
<option value="52">Delete a measure dimension</option>
<option value="53">Delete a measure weight</option>
<option value="54">Delete a message template</option>
<option value="55">Delete a news</option>
<option value="56">Delete a news comment</option>
<option value="139">Delete a plugin</option>
<option value="58">Delete a product</option>
<option value="59">Delete a product attribute</option>
<option value="60">Delete a product review</option>
<option value="61">Delete a return request</option>
<option value="148">Delete a review type</option>
<option value="62">Delete a setting</option>
<option value="63">Delete a specification attribute</option>
<option value="153">Delete a specification attribute group</option>
<option value="64">Delete a state or province</option>
<option value="65">Delete a store</option>
<option value="66">Delete a topic</option>
<option value="67">Delete a vendor</option>
<option value="143">Delete a vendor attribute</option>
<option value="146">Delete a vendor attribute value</option>
<option value="68">Delete a warehouse</option>
<option value="69">Delete a widget</option>
<option value="32">Delete activity log</option>
<option value="33">Delete an address attribute</option>
<option value="34">Delete an address attribute value</option>
<option value="35">Delete an affiliate</option>
<option value="48">Delete an email account</option>
<option value="57">Delete an order</option>
<option value="39">Delete category</option>
<option value="137">Delete system log</option>
<option value="74">Edit a blog post</option>
<option value="75">Edit a campaign</option>
<option value="77">Edit a checkout attribute</option>
<option value="78">Edit a country</option>
<option value="79">Edit a currency</option>
<option value="80">Edit a customer</option>
<option value="81">Edit a customer attribute</option>
<option value="82">Edit a customer attribute value</option>
<option value="83">Edit a customer role</option>
<option value="84">Edit a discount</option>
<option value="86">Edit a gift card</option>
<option value="87">Edit a language</option>
<option value="88">Edit a manufacturer</option>
<option value="89">Edit a measure dimension</option>
<option value="90">Edit a measure weight</option>
<option value="91">Edit a message template</option>
<option value="92">Edit a news</option>
<option value="94">Edit a plugin</option>
<option value="95">Edit a product</option>
<option value="96">Edit a product attribute</option>
<option value="97">Edit a product review</option>
<option value="99">Edit a return request</option>
<option value="149">Edit a review type</option>
<option value="104">Edit a specification attribute</option>
<option value="152">Edit a specification attribute group</option>
<option value="101">Edit a state or province</option>
<option value="102">Edit a store</option>
<option value="103">Edit a task</option>
<option value="107">Edit a topic</option>
<option value="105">Edit a vendor</option>
<option value="142">Edit a vendor attribute</option>
<option value="145">Edit a vendor attribute value</option>
<option value="106">Edit a warehouse</option>
<option value="108">Edit a widget</option>
<option value="70">Edit activity log types</option>
<option value="71">Edit an address attribute</option>
<option value="72">Edit an address attribute value</option>
<option value="73">Edit an affiliate</option>
<option value="85">Edit an email account</option>
<option value="93">Edit an order</option>
<option value="76">Edit category</option>
<option value="98">Edit promotion providers</option>
<option value="100">Edit setting(s)</option>
<option value="115">Install a new plugin</option>
<option value="112">Manufacturers were imported</option>
<option value="113">Products were imported</option>
<option value="130">Public store. Add blog comment</option>
<option value="134">Public store. Add forum post</option>
<option value="131">Public store. Add forum topic</option>
<option value="129">Public store. Add news comment</option>
<option value="128">Public store. Add product review</option>
<option value="123">Public store. Add to compare list</option>
<option value="124">Public store. Add to shopping cart</option>
<option value="125">Public store. Add to wishlist</option>
<option value="136">Public store. Delete forum post</option>
<option value="133">Public store. Delete forum topic</option>
<option value="135">Public store. Edit forum post</option>
<option value="132">Public store. Edit forum topic</option>
<option value="126"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Đăng nhập</font></font></option>
<option value="127"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Đăng xuất</font></font></option>
<option value="120"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Đặt hàng</font></font></option>
<option value="121"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Gửi PM</font></font></option>
<option value="122"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Sử dụng biểu mẫu liên hệ với chúng tôi</font></font></option>
<option value="117"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xem một danh mục</font></font></option>
<option value="118"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xem nhà sản xuất</font></font></option>
<option value="119"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xem một sản phẩm</font></font></option>
<option value="114"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các tiểu bang đã được nhập khẩu</font></font></option>
<option value="116"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gỡ cài đặt một plugin</font></font></option>
<option value="150"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải lên biểu tượng yêu thích và biểu tượng ứng dụng</font></font></option>
<option value="138"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải lên một plugin</font></font></option>
<option value="140"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải lên một chủ đề</font></font></option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="IpAddress"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">địa chỉ IP</font></font></label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="A customer IP address."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="IpAddress" name="IpAddress" type="text" value="">
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-log" class="btn btn-primary btn-search">
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
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/customer-management/activity-log.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nhật ký hoạt động</font></font></a></span></div>
<div id="activityLog-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 131.312px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại nhật ký hoạt động</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154.906px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email của khách hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 99.6562px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">địa chỉ IP</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 279.641px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông điệp</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 125.172px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo ra</font></font></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 82.3125px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="activityLog-grid" role="grid" aria-describedby="activityLog-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 131.312px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Loại nhật ký hoạt động</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154.906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email của khách hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 99.6562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">địa chỉ IP</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 279.641px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông điệp</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 125.172px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được tạo ra</font></font></div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 82.3125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhật ký hoạt động</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172.70.191.135</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhật ký hoạt động đã xóa</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:00:04 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('18');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Shipping.EasyPost')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19/01/2022 5:39:55 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('14');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Widgets.AccessiBe')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19/01/2022 5:39:55 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('15');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Widgets.FacebookPixel')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19/01/2022 5:39:55 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('16');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Payments.PayPalCommerce')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19/01/2022 5:39:54 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('11');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Misc.WebApi.Frontend')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19/01/2022 5:39:54 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('12');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'MultiFactorAuth.GoogleAuthenticator')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19/01/2022 5:39:54 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('13');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Widgets.FacebookPixel')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/08/2020 11:15:40 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('10');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Shipping.ShipStation')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/08/2020 11:15:40 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('9');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Payments.PayPalSmartPaymentButtons')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/08/2020 11:15:40 sáng</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('8');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">128,73.180.10</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Credit Card')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11/11/2017 1:20:59 PM</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('7');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">128,73.180.10</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã cài đặt một plugin mới (FriendlyName: 'Credit Card')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11/11/2017 1:19:42 CH</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('6');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thẻ quà tặng</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">127.0.0.1</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã xóa thẻ quà tặng ('bdbbc0ef-be57')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:10 AM</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('5');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính sản phẩm mới</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">127.0.0.1</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã thêm một thuộc tính sản phẩm mới ('Một số thuộc tính')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:10 AM</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('4');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính đặc tả</font></font></td><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">127.0.0.1</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã chỉnh sửa thuộc tính thông số kỹ thuật ('Loại CPU')</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13/03/2017 6:20:10 AM</font></font></td><td class=" button-column"><a href="#" class="btn btn-default" onclick="table_deletedata_activityLog_grid('3');return false;"><i class="far fa-trash-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="activityLog-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="activityLog-grid_previous"><a href="#" aria-controls="activityLog-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="activityLog-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="activityLog-grid" data-dt-idx="2" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_button page-item next" id="activityLog-grid_next"><a href="#" aria-controls="activityLog-grid" data-dt-idx="3" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="activityLog-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trình diễn</font></font><select name="activityLog-grid_length" aria-controls="activityLog-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="activityLog-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-15 trong số 17 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="activityLog-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
<div id="activityLog-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="activityLog-grid_deleteConflict-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="activityLog-grid_deleteConflict-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="activityLog-grid_deleteConflict-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="activityLog-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#activityLog-grid_deleteConflict-action-alert"></div><script>$(document).ready(function () {$('#activityLog-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#activityLog-grid_deleteConflict-action-alert")});</script></div>
<div id="activityLog-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="activityLog-grid_deleteCommonFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="activityLog-grid_deleteCommonFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="activityLog-grid_deleteCommonFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="activityLog-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#activityLog-grid_deleteCommonFailed-action-alert"></div><script>$(document).ready(function () {$('#activityLog-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#activityLog-grid_deleteCommonFailed-action-alert")});</script></div>
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