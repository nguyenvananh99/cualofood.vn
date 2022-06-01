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
<input name="returnurl" type="hidden" value="/Admin/ActivityLog/ActivityTypes">
<div class="input-group-append">
<button type="submit" style="width:210px;background-color: Transparent;">
<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bộ nhớ cache</font></font></span>
</button>
</div>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQPMQRWJRjGB6xJePoVjUV3O-g8m9mxsUJb9GEKemb4f4NEojG5V9nT9-lN2oObT-_Qi7WYB3UF3w940JEU4lf7oyh92lgznJIA2ifrzo5fBtPixerttEV7O1I40M226aI"></form>
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
<div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 252px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
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
<a href="/Admin/OnlineCustomer/List" class="nav-link">
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
<a href="/Admin/ActivityLog/ActivityTypes" class="nav-link active">
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
<p> News comments</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Blog/BlogPosts" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Blog posts</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Blog/BlogComments" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Blog comments</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Poll/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Polls</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Forum/List" class="nav-link">
<i class="nav-icon far fa-dot-circle"></i>
<p> Forums</p>
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
<p>
Settings
<i class="right fas fa-angle-left "></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/Admin/Setting/GeneralCommon" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> General settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/CustomerUser" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Customer settings</p>
</a>
</li>
<li class="nav-item">
<a href="/Admin/Setting/Order" class="nav-link">
<i class="nav-icon far fa-circle"></i>
<p> Order settings</p>
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
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQPMQRWJRjGB6xJePoVjUV3O-g8m9mxsUJb9GEKemb4f4NEojG5V9nT9-lN2oObT-_Qi7WYB3UF3w940JEU4lf7oyh92lgznJIA2ifrzo5fBtPixerttEV7O1I40M226aI">
<form method="post" action="/Admin/ActivityLog/SaveTypes">
<div class="content-header clearfix">
<h1 class="float-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Các loại hoạt động
</font></font></h1>
<div class="float-right">
<button type="submit" name="save" class="btn btn-primary">
<i class="far fa-save"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Tiết kiệm
</font></font></button>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="card card-default">
<div class="card-body">
<div class="documentation-reference"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm hiểu thêm về </font></font><a target="_blank" href="https://docs.nopcommerce.com/running-your-store/customer-management/activity-log.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nhật ký hoạt động</font></font></a></span></div>
<div id="activityLogType-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 873.047px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 99.9531px;"><div class="checkbox"><label><input class="mastercheckbox" type="checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được kích hoạt</font></font></label></div></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="activityLogType-grid" role="grid" aria-describedby="activityLogType-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 873.047px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 99.9531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><div class="checkbox"><label><input class="mastercheckbox" type="checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Được kích hoạt</font></font></label></div></div></th></tr></thead>
<tbody><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính địa chỉ mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="1" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giá trị thuộc tính địa chỉ mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="2" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một chi nhánh mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="3" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một bài đăng blog mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="4" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một chiến dịch mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="5" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một danh mục mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="6" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính thanh toán mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="7" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một quốc gia mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="8" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm đơn vị tiền tệ mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="9" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một khách hàng mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="10" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính khách hàng mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="11" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giá trị thuộc tính khách hàng mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="12" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vai trò khách hàng mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="13" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giảm giá mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="14" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một tài khoản email mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="15" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thẻ quà tặng mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="16" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một ngôn ngữ mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="17" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm nhà sản xuất mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="18" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thứ nguyên đo lường mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="19" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm trọng lượng thước đo mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="20" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một tin tức mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="21" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một sản phẩm mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="22" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính sản phẩm mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="23" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một loại đánh giá mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="147" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một cài đặt mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="24" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một thuộc tính đặc điểm kỹ thuật mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="25" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm nhóm thuộc tính đặc điểm kỹ thuật mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="151" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một tiểu bang hoặc tỉnh mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="26" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một cửa hàng mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="27" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một chủ đề mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="28" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một nhà cung cấp mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="29" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm thuộc tính nhà cung cấp mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="141" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm giá trị thuộc tính nhà cung cấp mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="144" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một nhà kho mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="30" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một widget mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="31" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các danh mục đã được nhập</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="111" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phiên mạo danh khách hàng. </font><font style="vertical-align: inherit;">Hoàn thành</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="110" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phiên mạo danh khách hàng. </font><font style="vertical-align: inherit;">Đã bắt đầu</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="109" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một bài đăng trên blog</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="36" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bình luận bài đăng trên blog</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="37" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa chiến dịch</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="38" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thuộc tính thanh toán</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="40" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một quốc gia</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="41" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa đơn vị tiền tệ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="42" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="43" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thuộc tính khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="44" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa giá trị thuộc tính khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="45" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa vai trò khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="46" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa giảm giá</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="47" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thẻ quà tặng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="49" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một ngôn ngữ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="50" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhà sản xuất</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="51" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thứ nguyên đo lường</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="52" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa số đo trọng lượng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="53" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa mẫu tin nhắn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="54" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa tin tức</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="55" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhận xét tin tức</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="56" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một plugin</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="139" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="58" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thuộc tính sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="59" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bài đánh giá sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="60" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa yêu cầu trả lại</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="61" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một loại đánh giá</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="148" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa cài đặt</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="62" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thuộc tính đặc điểm kỹ thuật</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="63" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhóm thuộc tính đặc điểm kỹ thuật</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="153" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một tiểu bang hoặc tỉnh</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="64" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một cửa hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="65" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa chủ đề</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="66" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhà cung cấp</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="67" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thuộc tính nhà cung cấp</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="143" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa giá trị thuộc tính nhà cung cấp</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="146" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhà kho</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="68" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa tiện ích con</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="69" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhật ký hoạt động</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="32" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa thuộc tính địa chỉ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="33" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa giá trị thuộc tính địa chỉ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="34" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa một chi nhánh</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="35" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa tài khoản email</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="48" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa đơn hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="57" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa danh mục</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="39" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa nhật ký hệ thống</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="137" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa một bài đăng trên blog</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="74" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa chiến dịch</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="75" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính thanh toán</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="77" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa quốc gia</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="78" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa đơn vị tiền tệ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="79" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="80" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="81" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa giá trị thuộc tính khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="82" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa vai trò khách hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="83" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa giảm giá</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="84" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thẻ quà tặng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="86" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa ngôn ngữ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="87" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa nhà sản xuất</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="88" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thứ nguyên đo lường</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="89" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa trọng lượng thước đo</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="90" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa mẫu tin nhắn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="91" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa tin tức</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="92" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa một plugin</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="94" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="95" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="96" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa đánh giá sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="97" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa yêu cầu trả lại</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="99" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa loại đánh giá</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="149" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính đặc tả</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="104" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa nhóm thuộc tính đặc điểm kỹ thuật</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="152" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa tiểu bang hoặc tỉnh</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="101" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa cửa hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="102" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa công việc</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="103" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa chủ đề</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="107" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa nhà cung cấp</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="105" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính nhà cung cấp</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="142" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa giá trị thuộc tính nhà cung cấp</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="145" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa kho hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="106" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa tiện ích con</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="108" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa các loại nhật ký hoạt động</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="70" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa thuộc tính địa chỉ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="71" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa giá trị thuộc tính địa chỉ</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="72" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa chi nhánh</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="73" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa tài khoản email</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="85" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa đơn đặt hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="93" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa danh mục</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="76" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa nhà cung cấp khuyến mại</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="98" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chỉnh sửa (các) cài đặt</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="100" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cài đặt một plugin mới</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="115" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các nhà sản xuất đã được nhập khẩu</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="112" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm đã được nhập khẩu</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="113" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm bình luận blog</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="130" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm bài đăng trên diễn đàn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="134" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm chủ đề diễn đàn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="131" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm bình luận tin tức</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="129" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm đánh giá sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="128" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm vào danh sách so sánh</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="123" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="124" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Thêm vào danh sách yêu thích</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="125" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xóa bài đăng trên diễn đàn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="136" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xóa chủ đề diễn đàn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="133" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Chỉnh sửa bài đăng trên diễn đàn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="135" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Chỉnh sửa chủ đề diễn đàn</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="132" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Đăng nhập</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="126" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Đăng xuất</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="127" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Đặt hàng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="120" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Gửi PM</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="121" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Sử dụng biểu mẫu liên hệ với chúng tôi</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="122" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xem một danh mục</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="117" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xem nhà sản xuất</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="118" type="checkbox" class="checkboxGroups"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng công cộng. </font><font style="vertical-align: inherit;">Xem một sản phẩm</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="119" type="checkbox" class="checkboxGroups"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các tiểu bang đã được nhập khẩu</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="114" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gỡ cài đặt một plugin</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="116" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải lên biểu tượng yêu thích và biểu tượng ứng dụng</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="150" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="even"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải lên một plugin</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="138" type="checkbox" class="checkboxGroups" checked="checked"></td></tr><tr class="odd"><td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải lên một chủ đề</font></font></td><td class=" text-center"><input name="checkbox_activity_types" value="140" type="checkbox" class="checkboxGroups" checked="checked"></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="activityLogType-grid_info" role="status" aria-live="polite"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-153 trong số 153 mặt hàng</font></font></div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="activityLogType-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</section>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQPMQRWJRjGB6xJePoVjUV3O-g8m9mxsUJb9GEKemb4f4NEojG5V9nT9-lN2oObT-_Qi7WYB3UF3w940JEU4lf7oyh92lgznJIA2ifrzo5fBtPixerttEV7O1I40M226aI"></form>
</div>
<div class="main-footer">
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-4 col-xs-12 text-md-left text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Được cung cấp bởi </font></font><a href="https://www.nopcommerce.com/?utm_source=demo-admin-panel&amp;utm_medium=footer&amp;utm_campaign=admin-panel" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nopCommerce</font></font></a>
</div>
<div class="col-md-4 col-xs-12 text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Thứ 4, ngày 01 tháng 6 năm 2022 2:24 sáng
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