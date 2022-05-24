<?php

 require_once "./app/views/layouts/header.php";

?>
  

  <section class="content col-sm-8 offset-3">
<div class="container-fluid">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-12">
<div class="card card-primary card-outline configuration-steps collapsed-card" id="configuration-steps-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="far fa-star"></i>
Start accepting orders
</h3>
<div class="card-tools float-right">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-plus"></i> </button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<text><i class="fas fa-times"></i></text>
</button>
</div>
</div>
<div class="card-body" style="display: none;">
<div class="row">
<div class="col-12">
<h4>
Welcome to your store!
</h4>
</div>
<p class="intro text-center">
Can’t wait to start accepting orders? Let us show you how to set up your store fast and easy. The steps below describe the most important settings for the online shop. With our tips on each page you will see how clear this process is. You will be ready to start selling immediately after you go through these steps. So good luck!
</p>
</div>
<div class="row">
<div class="col-12">
<div class="row mb-2">
<div class="col-4">
<a class="configuration-step-link theme-step" href="/Admin/Setting/GeneralCommon?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="fas fa-pencil-alt"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
1. &nbsp; Personalize your store
<small class="text-muted">
Choose a beautiful theme for your store and add your logo
</small>
</h5>
</div>
</div>
</a>
</div>
<div class="col-4">
<a class="configuration-step-link store-info-step" href="/Admin/Store/Edit/1?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="fas fa-globe"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
2. &nbsp; Add your store info
<small class="text-muted">
Enter your store details and protect your customers using SSL
 </small>
</h5>
</div>
</div>
</a>
</div>
<div class="col-4">
<a class="configuration-step-link shipping-step" href="/Admin/Shipping/Providers?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="fas fa-truck"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
3. &nbsp; Set up shipping
<small class="text-muted">
Set up shipping methods to deliver orders to customers
</small>
</h5>
</div>
</div>
</a>
</div>
</div>
<div class="row mb-2">
<div class="col-4">
<a class="configuration-step-link payments-step" href="/Admin/Payment/Methods?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="far fa-credit-card"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
4. &nbsp; Set up payments
<small class="text-muted">
Choose how your customers will pay for their orders
</small>
</h5>
</div>
</div>
</a>
</div>
<div class="col-4">
<a class="configuration-step-link taxes-step" href="/Admin/Tax/Providers?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="fas fa-percent"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
5. &nbsp; Set up taxes
<small class="text-muted">
Configure rates manually or choose a tax service to automate all tax things
</small>
</h5>
</div>
</div>
</a>
</div>
<div class="col-4">
<a class="configuration-step-link products-step" href="/Admin/Product/Create?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="fas fa-shopping-cart "></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
 6. &nbsp; Create products
<small class="text-muted">
Build a catalog with attractive product descriptions and pictures
</small>
</h5>
</div>
</div>
</a>
</div>
</div>
<div class="row mb-4">
<div class="col-4">
<a class="configuration-step-link email-step" href="/Admin/EmailAccount/List?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="far fa-envelope"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
7. &nbsp; Set up email accounts
<small class="text-muted">
It allows you to send notifications to your customers
</small>
</h5>
</div>
</div>
</a>
</div>
<div class="col-4">
<a class="configuration-step-link service-step" href="/Admin/Topic/List?showtour=True">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="fas fa-info"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
8. &nbsp; Edit services info
<small class="text-muted">
Add info pages describing shipping, return policy and more
</small>
</h5>
</div>
</div>
</a>
</div>
<div class="col-4">
<a class="configuration-step-link copyright-step" href="https://www.nopcommerce.com/nopcommerce-copyright-removal-key?utm_source=demo-admin-panel&amp;utm_medium=tour&amp;utm_campaign=powered_by_nopcommerce&amp;utm_content=dashboard" target="_blank">
<div class="row">
<div class="col-12 col-xl-3">
<div class="configuration-step-icon">
<i class="far fa-copyright"></i>
</div>
</div>
<div class="col-12 col-xl-9">
<h5>
9. &nbsp; “Powered by” link
<small class="text-muted">
Remove the “Powered by nopCommerce” link from the footer
</small>
</h5>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <div class="row">
<div class="col-md-12">
<div class="card card-primary card-outline " id="nopcommerce-news-box">
<div class="card-header with-border clearfix">
<div class="card-title">
<i class="far fa-newspaper"></i>
NopCommerce News
</div>
<div class="card-tools float-right">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-4">
<div class="card card-info">
<div class="card-header clearfix">
<a class="float-left" href="https://www.nopcommerce.com/nopcommerce-copyright-removal-key?utm_source=demo-admin-panel&amp;utm_medium=dashboard&amp;utm_campaign=powered_by_nopcommerce">"Powered by nopCommerce" link</a>
</div>
<div class="card-body">
Would you like to remove the "Powered by nopCommerce" link in the bottom of the footer? Click <a href="https://www.nopcommerce.com/nopcommerce-copyright-removal-key?utm_source=demo-admin-panel&amp;utm_medium=dashboard&amp;utm_campaign=powered_by_nopcommerce">here</a> for more info.
</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-info">
<div class="card-header clearfix">
<a class="float-left" href="https://www.nopcommerce.com/nopcommerce-premium-support-services?utm_source=demo-admin-panel&amp;utm_medium=dashboard&amp;utm_campaign=premium_support">Premium support services</a>
</div>
<div class="card-body">
Get dedicated support from the nopCommerce team with a guaranteed response within 24 hours. Click <a href="https://www.nopcommerce.com/nopcommerce-premium-support-services?utm_source=demo-admin-panel&amp;utm_medium=dashboard&amp;utm_campaign=premium_support">here</a> for more info.
</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-info">
<div class="card-header clearfix">
<a class="float-left" href="https://www.everleap.com/cloud-hosting/web-app/nopcommerce/hosting/?utm_source=NOPC&amp;utm_medium=TXT&amp;utm_content=PREMCP&amp;utm_campaign=MIG30DYS">Recommended hosting for your store</a>
</div>
<div class="card-body">
Everleap cloud hosting seamlessly scales sites with ease and they move stores for free. <a href="https://www.everleap.com/cloud-hosting/web-app/nopcommerce/hosting/?utm_source=NOPC&amp;utm_medium=TXT&amp;utm_content=PREMCP&amp;utm_campaign=MIG30DYS" target="_blank">Learn more</a> and get a 30 day free trial.
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card card-primary card-outline " id="nopcommerce-common-statistics-card">
<div class="card-header with-border clearfix">
<div class="card-title">
<i class="far fa-chart-bar"></i>
Common statistics
</div>
<div class="card-tools float-right">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-6">
<div class="small-box bg-info">
<div class="inner">
<h3>5</h3>
<p>Orders</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a class="small-box-footer" href="/Admin/Order/List">
More info
<i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="small-box bg-yellow">
<div class="inner">
<h3>0</h3>
<p>Pending return requests</p>
</div>
<div class="icon">
<i class="ion ion-refresh"></i>
</div>
<a class="small-box-footer" href="/Admin/ReturnRequest/List">
More info
<i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="small-box bg-green">
<div class="inner">
<h3>9</h3>
<p>Registered customers</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a class="small-box-footer" href="/Admin/Customer/List">
More info
<i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="small-box bg-red">
<div class="inner">
<h3>1</h3>
<p>Low stock products</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a class="small-box-footer" href="/Admin/Report/LowStock">
More info
<i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card card-primary card-outline " id="order-statistics-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="fas fa-shopping-cart"></i>
Orders
</h3>
<div class="card-tools float-right">
<button class="btn btn-xs btn-info btn-flat margin-r-5" data-chart-role="toggle-chart" data-chart-period="year">Year</button>
<button class="btn btn-xs btn-info btn-flat margin-r-5" data-chart-role="toggle-chart" data-chart-period="month">Month</button>
<button class="btn btn-xs btn-info btn-flat bg-light-blue" data-chart-role="toggle-chart" data-chart-period="week">Week</button>
<button type="button" class="btn btn-tool margin-l-10" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
 </div>
</div>
<div class="card-body">
<div class="chart" style="height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<canvas id="order-statistics-chart" height="300" style="display: block; width: 339px; height: 300px;" width="339" class="chartjs-render-monitor"></canvas>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card card-primary card-outline " id="customer-statistics-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="far fa-user"></i>
New customers
</h3>
<div class="card-tools float-right">
<button class="btn btn-xs btn-info btn-flat margin-r-5" data-chart-role="toggle-chart" data-chart-period="year">Year</button>
<button class="btn btn-xs btn-info btn-flat margin-r-5" data-chart-role="toggle-chart" data-chart-period="month">Month</button>
<button class="btn btn-xs btn-info btn-flat bg-light-blue" data-chart-role="toggle-chart" data-chart-period="week">Week</button>
<button class="btn btn-tool margin-l-10" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div class="chart" style="height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<canvas id="customer-statistics-chart" height="300" width="339" style="display: block; width: 339px; height: 300px;" class="chartjs-render-monitor"></canvas>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="card card-primary card-outline " id="order-average-report-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="far fa-money-bill-alt"></i>
Order totals
</h3>
<div class="card-tools float-right">
<button class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body" style="padding-bottom: 22px;">
<div id="average-order-report-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 469.656px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 469.656px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75.3281px;">Order Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 42.9062px;">Today</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 43.8438px;">This Week</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.6875px;">This Month</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40.9219px;">This Year</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.9688px;">All time</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="average-order-report-grid" role="grid" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75.3281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Order Status</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 42.9062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Today</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 43.8438px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">This Week</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.6875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">This Month</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40.9219px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">This Year</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.9688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">All time</div></th></tr></thead>
<tbody><tr class="odd"><td>Pending</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$2,468.80</td></tr><tr class="even"><td>Processing</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$1,957.00</td></tr><tr class="odd"><td>Complete</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$43.50</td></tr><tr class="even"><td>Cancelled</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$0.00</td><td>$0.00</td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="average-order-report-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-primary card-outline " id="order-incomplete-report-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="fas fa-hourglass-start"></i>
Incomplete orders
</h3>
<div class="card-tools float-right">
<button class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div id="incomplete-order-report-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 315.969px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 315.969px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75.4531px;">Item</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.6406px;">Total</th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 100.875px;">Count</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="incomplete-order-report-grid" role="grid" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75.4531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Item</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.6406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total</div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 100.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Count</div></th></tr></thead>
<tbody><tr class="odd"><td>Total unpaid orders (pending payment status)</td><td>$2,468.80</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/List?orderStatuses=10,20,30&amp;paymentStatuses=10"><i class="far fa-eye"></i>2 - view all</a></td></tr><tr class="even"><td>Total not yet shipped orders</td><td>$4,315.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/List?orderStatuses=10,20,30&amp;shippingStatuses=20"><i class="far fa-eye"></i>2 - view all</a></td></tr><tr class="odd"><td>Total incomplete orders (pending order status)</td><td>$2,468.80</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/List?orderStatuses=10"><i class="far fa-eye"></i>2 - view all</a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="incomplete-order-report-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="card card-primary card-outline " id="latest-orders-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="fas fa-cart-plus"></i>
Latest Orders
<a class="btn btn-xs btn-info btn-flat margin-l-10" href="/Admin/Order/List">View All Orders</a>
</h3>
<div class="card-tools float-right">
<button class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div id="orders-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 662.562px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 662.562px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40.9844px;">Order #</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.375px;">Order status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 266.484px;">Customer</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74.8281px;">Created on</th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.8906px;">View</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="orders-grid" role="grid" aria-describedby="orders-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 40.9844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Order #</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Order status</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 266.484px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Customer</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74.8281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Created on</div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div></th></tr></thead>
<tbody><tr class="odd"><td>5</td><td><span class="grid-report-item green">Complete</span></td><td>Victoria Terces (victoria_victoria@nopCommerce.com)</td><td>03/13/2017 6:20:10 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/Edit/5"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td>4</td><td><span class="grid-report-item blue">Processing</span></td><td>Brenda Lindgren (brenda_lindgren@nopCommerce.com)</td><td>03/13/2017 6:20:09 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/Edit/4"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td>3</td><td><span class="grid-report-item yellow">Pending</span></td><td>James Pan (james_pan@nopCommerce.com)</td><td>03/13/2017 6:20:09 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/Edit/3"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td>2</td><td><span class="grid-report-item yellow">Pending</span></td><td>Arthur Holmes (arthur_holmes@nopCommerce.com)</td><td>03/13/2017 6:20:09 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/Edit/2"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td>1</td><td><span class="grid-report-item blue">Processing</span></td><td>Steve Gates (steve_gates@nopCommerce.com)</td><td>03/13/2017 6:20:09 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/Edit/1"><i class="far fa-eye"></i>View</a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-10 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="orders-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="orders-grid_previous"><a href="#" aria-controls="orders-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="orders-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="orders-grid_next"><a href="#" aria-controls="orders-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-2 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="orders-grid_info" role="status" aria-live="polite">1-5 of 5 items</div></div></div></div></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-primary card-outline " id="popular-search-terms-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="fas fa-search"></i>
Popular search keywords
</h3>
<div class="card-tools float-right">
<button class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div id="search-term-report-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 207.328px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 207.328px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.0312px;">Keyword</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.2969px;">Count</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="search-term-report-grid" role="grid" aria-describedby="search-term-report-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.0312px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Keyword</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.2969px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Count</div></th></tr></thead>
<tbody><tr class="odd"><td>computer</td><td>34</td></tr><tr class="even"><td>camera</td><td>30</td></tr><tr class="odd"><td>jewelry</td><td>27</td></tr><tr class="even"><td>shoes</td><td>26</td></tr><tr class="odd"><td>jeans</td><td>19</td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-10 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="search-term-report-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="search-term-report-grid_previous"><a href="#" aria-controls="search-term-report-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="search-term-report-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="search-term-report-grid" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="search-term-report-grid_next"><a href="#" aria-controls="search-term-report-grid" data-dt-idx="3" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-2 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="search-term-report-grid_info" role="status" aria-live="polite">1-5 of 6 items</div></div></div></div></div>
</div>
</div> </div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card card-primary card-outline " id="bestsellers-report-quantity-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="fas fa-star"></i>
Bestsellers by quantity
</h3>
<div class="card-tools float-right">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div id="bestsellers-byquantity-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 359px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 359px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.6094px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60.8594px;">Total quantity</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.6406px;">Total amount (excl tax)</th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.8906px;">View</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="bestsellers-byquantity-grid" role="grid" aria-describedby="bestsellers-byquantity-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.6094px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60.8594px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total quantity</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.6406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total amount (excl tax)</div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div></th></tr></thead>
<tbody><tr class="odd"><td>Leica T Mirrorless Digital Camera</td><td>1</td><td>$530.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/16"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td>Apple iCam</td><td>1</td><td>$1,300.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/17"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td>Levi's 511 Jeans</td><td>1</td><td>$43.50</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/30"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td>Night Visions</td><td>1</td><td>$2.80</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/34"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td>If You Wait (donation)</td><td>1</td><td>$3.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/35"><i class="far fa-eye"></i>View</a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-10 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="bestsellers-byquantity-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="bestsellers-byquantity-grid_previous"><a href="#" aria-controls="bestsellers-byquantity-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="bestsellers-byquantity-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bestsellers-byquantity-grid" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bestsellers-byquantity-grid" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="bestsellers-byquantity-grid_next"><a href="#" aria-controls="bestsellers-byquantity-grid" data-dt-idx="4" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-2 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="bestsellers-byquantity-grid_info" role="status" aria-live="polite">1-5 of 12 items</div></div></div></div></div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card card-primary card-outline " id="bestsellers-report-amount-card">
<div class="card-header with-border">
<h3 class="card-title">
<i class="far fa-star"></i>
Bestsellers by amount
</h3>
<div class="card-tools float-right">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i> </button>
</div>
</div>
<div class="card-body">
<div id="bestsellers-byamount-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 372.594px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 372.594px;"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84.2031px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60.8594px;">Total quantity</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.6406px;">Total amount (excl tax)</th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.8906px;">View</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="bestsellers-byamount-grid" role="grid" aria-describedby="bestsellers-byamount-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84.2031px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60.8594px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total quantity</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63.6406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total amount (excl tax)</div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 62.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div></th></tr></thead>
<tbody><tr class="odd"><td>Vintage Style Engagement Ring</td><td>1</td><td>$2,100.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/42"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td>Apple iCam</td><td>1</td><td>$1,300.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/17"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td>Leica T Mirrorless Digital Camera</td><td>1</td><td>$530.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/16"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td>Flower Girl Bracelet</td><td>1</td><td>$360.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/41"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td>First Prize Pies</td><td>1</td><td>$51.00</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Product/Edit/38"><i class="far fa-eye"></i>View</a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-10 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="bestsellers-byamount-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="bestsellers-byamount-grid_previous"><a href="#" aria-controls="bestsellers-byamount-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="bestsellers-byamount-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bestsellers-byamount-grid" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bestsellers-byamount-grid" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="bestsellers-byamount-grid_next"><a href="#" aria-controls="bestsellers-byamount-grid" data-dt-idx="4" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-2 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="bestsellers-byamount-grid_info" role="status" aria-live="polite">1-5 of 12 items</div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
        
        <?php 
           require_once "./app/views/layouts/footer.php";
        ?>