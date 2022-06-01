<?php
 require_once "./app/views/layouts/header.php";
?>

<div class="wrapper">
<nav class="main-header navbar navbar-expand-md navbar-dark bg-dark">
<ul class="navbar-nav pl-2 pl-md-0">
<li class="nav-item">
<a class="nav-link" id="nopSideBarPusher" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
</li>
</ul>
<a href="/Admin" class="brand-link navbar-dark">
<img src="/css/admin/images/logo.png" alt="logo.png" class="brand-image logo d-block d-md-none d-sm-block d-sm-none">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Chuyển đổi điều hướng thành">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarText">
<ul class="navbar-nav ml-auto pl-2">
<li class="nav-item">
</li>
<li class="nav-item">
<a href="#" class="nav-link disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">John Smith</font></font></a>
</li>
<li class="nav-item">
<a class="nav-link" href="/logout"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng xuất</font></font></a>
</li>
<li class="nav-item">
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#" data-toggle="dropdown">
<i class="fas fa-cogs"></i>
</a>
<ul class="maintenance-menu dropdown-menu dropdown-menu-right" role="menu">
<li class="dropdown-item">
<form action="/Admin/Common/ClearCache" method="post">
<input name="returnurl" type="hidden" value="/Admin/OnlineCustomer/List">
<div class="input-group-append">
<button type="submit" style="width:210px;background-color: Transparent;">
<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bộ nhớ cache</font></font></span>
</button>
</div>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lRPAlftDwdoRr_S5gIqe3FMxt4uo8H65QLHKYqytZXzHeoCymQpCAyfiw_4PUBIlpju5TeomsIlqmZ3zZQu30QRpfMuGamhbKjx0AHtrVYGa8j1keZmldldBrjmIc6QepA"></form>
</li>
</ul>
</li>
</ul>
</div>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="/Admin" class="brand-link navbar-dark logo-switch">
<img src="/css/admin/images/logo.png" alt="logo.png" class="brand-image-xl logo-xl">
<img src="/css/admin/images/logo-mini.png" alt="logo.png" class="brand-image-xs logo-xs">
</a>
<div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
<div class="sidebar-form">
<div id="search-box">
<span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control admin-search-box typeahead tt-input" placeholder="Tìm kiếm" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-pages"></div></div></span>
</div>
</div>
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu">
<li class="nav-item">
<a href="/Admin" class="nav-link">
<i class="nav-icon fas fa-desktop"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bảng điều khiển</font></font></p>
</a>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-book"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Mục lục
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Product/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các sản phẩm</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Category/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thể loại</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Manufacturer/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà sản xuất của</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/ProductReview/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá sản phẩm</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Product/ProductTags" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thẻ sản phẩm</font></font></p>
</a>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thuộc tính
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/ProductAttribute/List" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thuộc tính sản phẩm</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/SpecificationAttribute/List" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thuộc tính đặc điểm kỹ thuật</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/CheckoutAttribute/List" class="nav-link">
<i class="nav-icon far fa-circle"></i>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thuộc tính thanh toán</font></font></p>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-shopping-cart"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Việc bán hàng
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Order/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn hàng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Order/ShipmentList" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lô hàng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/ReturnRequest/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yêu cầu trả lại</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/RecurringPayment/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thanh toán định kỳ</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/GiftCard/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thẻ quà tặng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/ShoppingCart/CurrentCarts" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giỏ hàng và danh sách yêu thích</font></font></p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon far fa-user"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Khách hàng
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Customer/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/CustomerRole/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vai trò của khách hàng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/OnlineCustomer/List" class="nav-link active">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng trực tuyến</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Vendor/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà cung cấp</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/ActivityLog/ActivityLogs" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoạt động đăng nhập</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/ActivityLog/ActivityTypes" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các loại hoạt động</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Customer/GdprLog" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yêu cầu GDPR (nhật ký)</font></font></p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
 <i class="nav-icon fas fa-tags"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Khuyến mại
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Discount/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Affiliate/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi nhánh</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/NewsLetterSubscription/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Người đăng ký bản tin</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Campaign/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các chiến dịch</font></font></p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-cubes"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Quản lý nội dung
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Topic/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chủ đề (trang)</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/MessageTemplate/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mẫu tin nhắn</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/News/NewsItems" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mục tin tức</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/News/NewsComments" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhận xét tin tức</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Blog/BlogPosts" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đăng trên blog</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Blog/BlogComments" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bình luận blog</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Poll/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thăm dò ý kiến</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Forum/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diễn đàn</font></font></p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-cogs"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Cấu hình
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Cài đặt
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Setting/GeneralCommon" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt chung</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/CustomerUser" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt khách hàng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Order" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt đặt hàng</font></font></p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Shipping" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Shipping settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Tax" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Tax settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Catalog" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Catalog settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/ShoppingCart" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Shopping cart settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/RewardPoints" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Reward points</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Gdpr" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> GDPR settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Vendor" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Vendor settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Blog" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Blog settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/News" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> News settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Forum" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Forum settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Media" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Media settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/AllSettings" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> All settings (advanced)</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="/Admin/EmailAccount/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Email accounts</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Store/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>

<p> Stores</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Country/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Countries</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Language/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Languages</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Currency/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Currencies</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Payment/Methods" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Payment methods</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Payment/MethodRestrictions" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Payment restrictions</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Tax/Providers" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Tax providers</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Tax/Categories" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Tax categories</p>
</a>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p>
Shipping
<i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Shipping/Providers" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Shipping providers</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Shipping/Warehouses" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Warehouses</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Shipping/PickupPointProviders" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Pickup points</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Shipping/DatesAndRanges" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Dates and ranges</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Measure/List" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Measures</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="/Admin/Security/Permissions" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Access control list</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Widget/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Widgets</p>
</a>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p>
Authentication
<i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
<a href="/Admin/Authentication/ExternalMethods" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> External authentication</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Authentication/MultiFactorMethods" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Multi-factor authentication</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="/Admin/WebApiFrontend/Configure" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Web API</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Plugin/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Local plugins</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Plugin/OfficialFeed" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> All plugins and themes</p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-cube"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Hệ thống
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Common/SystemInfo" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> System information</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Log/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Log</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Common/Warnings" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Warnings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Common/Maintenance" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Maintenance</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/QueuedEmail/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Message queue</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/ScheduleTask/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Schedule tasks</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Common/SeNames" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Search engine friendly page names</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Template/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Templates</p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-chart-line"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Báo cáo
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Report/SalesSummary" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Sales summary</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Report/LowStock" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Low stock</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Report/Bestsellers" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Bestsellers</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Report/NeverSold" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Products never purchased</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Report/CountrySales" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Country sales</p>
</a>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p>
Customer reports
<i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Report/RegisteredCustomers" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Registered customers</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Report/BestCustomersByOrderTotal" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Customers by order total</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Report/BestCustomersByNumberOfOrders" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Customers by number of orders</p>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-question-circle"></i>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Cứu giúp
</font></font><i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="https://docs.nopcommerce.com?utm_source=admin-panel&amp;utm_medium=menu&amp;utm_campaign=documentation&amp;utm_content=help" class="nav-link" target="_blank">
<i class="nav-icon far fa-dot-circle"></i>
<p> Documentation</p>
</a>
</li>
<li class="nav-item">
<a href="https://www.nopcommerce.com/boards?utm_source=admin-panel&amp;utm_medium=menu&amp;utm_campaign=forum&amp;utm_content=help" class="nav-link" target="_blank">
<i class="nav-icon far fa-dot-circle"></i>
<p> Community forums</p>
</a>
</li>
<li class="nav-item">
<a href="https://www.nopcommerce.com/nopcommerce-premium-support-services?utm_source=admin-panel&amp;utm_medium=menu&amp;utm_campaign=premium_support&amp;utm_content=help" class="nav-link" target="_blank">
<i class="nav-icon far fa-dot-circle"></i>
<p> Premium support services</p>
</a>
</li>
<li class="nav-item">
<a href="https://www.nopcommerce.com/solution-partners?utm_source=admin-panel&amp;utm_medium=menu&amp;utm_campaign=solution_partners&amp;utm_content=help" class="nav-link" target="_blank">
<i class="nav-icon far fa-dot-circle"></i>
<p> Solution partners</p>
</a>
</li>
</ul>
</li>
</ul>
</nav> 
</div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 34.375%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
</aside>
<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lRPAlftDwdoRr_S5gIqe3FMxt4uo8H65QLHKYqytZXzHeoCymQpCAyfiw_4PUBIlpju5TeomsIlqmZ3zZQu30QRpfMuGamhbKjx0AHtrVYGa8j1keZmldldBrjmIc6QepA">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Khách hàng trực tuyến
</font></font></h1>
<div class="float-right">
&nbsp;
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default">
<div class="card-body">
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/customer-management/online-customers.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">khách hàng trực tuyến</font></font></a></span></div>
<div id="onlinecustomers-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 208.625px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin khách hàng</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 147.719px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ IP</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.516px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa điểm</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 266.672px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoạt động cuối</font></font></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.469px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang được truy cập lần cuối</font></font></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="onlinecustomers-grid" role="grid" aria-describedby="onlinecustomers-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 208.625px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin khách hàng</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 147.719px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ IP</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.516px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa điểm</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 266.672px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoạt động cuối</font></font></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.469px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang được truy cập lần cuối</font></font></div></th></tr></thead>
<tbody><tr class="odd"><td><a href="/Admin/Customer/Edit/124"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td></td><td></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:19:14 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">admin@yourStore.com</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172,70.188,97</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:19:12 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/123"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172.70.218.155</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:18:33 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/122"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172.70.250.161</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:15:30 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/121"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.198.159</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:14:09 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/120"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172.68.127.141</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Armenia</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:13:53 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/119"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.198.159</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:09:58 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/118"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172,70.188,97</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:09:34 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172,70.175,6</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:06:16 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/117"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.146.77</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Canada</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:06:03 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/116"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.179,86</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hồng Kông</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:05:27 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/115"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">172.70.191.135</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:04:49 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/114"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.48.117</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ấn Độ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:03:39 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="even"><td><a href="/Admin/Customer/Edit/113"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.235.162</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Bỉ</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:03:29 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr><tr class="odd"><td><a href="/Admin/Customer/Edit/112"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách mời</font></font></a></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">162.158.163.228</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Singapore</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/01/2022 2:03:05 sáng</font></font></td><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt "Lưu trữ trang được truy cập gần đây nhất" bị tắt</font></font></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="onlinecustomers-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="onlinecustomers-grid_previous"><a href="#" aria-controls="onlinecustomers-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="onlinecustomers-grid" data-dt-idx="1" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li><li class="paginate_button page-item "><a href="#" aria-controls="onlinecustomers-grid" data-dt-idx="2" tabindex="0" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li><li class="paginate_button page-item next" id="onlinecustomers-grid_next"><a href="#" aria-controls="onlinecustomers-grid" data-dt-idx="3" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="onlinecustomers-grid_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trình diễn</font></font><select name="onlinecustomers-grid_length" aria-controls="onlinecustomers-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option><option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mặt hàng</font></font></label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="onlinecustomers-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-15 trong số 16 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="onlinecustomers-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="main-footer">
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-4 col-xs-12 text-md-left text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Được cung cấp bởi </font></font><a href="https://www.nopcommerce.com/?utm_source=demo-admin-panel&amp;utm_medium=footer&amp;utm_campaign=admin-panel" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nopCommerce</font></font></a>
</div>
<div class="col-md-4 col-xs-12 text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thứ 4, ngày 01 tháng 6 năm 2022 2:19 sáng
</font></font></div>
<div class="col-md-4 col-xs-12 text-md-right text-center">
<b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nopCommerce phiên bản 4.50.0</font></font></b>
</div>
</div>
</div>
</div>
</div>
<div id="sidebar-overlay"></div></div>
<?php
 require_once "./app/views/layouts/footer.php";
?>
