<?php require_once "./app/views/layouts/header.php"; ?>
<div class="col-sm-9 offset-3">

<form method="post" action="/Admin/Customer/List">
<div class="content-header clearfix">
<h1 class="float-left">
Customers
</h1>
<div class="float-right">
<a class="btn btn-primary" href="/Admin/Customer/Create">
<i class="fas fa-plus-square"></i>
Add new
</a>
<div class="btn-group">
<button type="button" class="btn btn-success">
<i class="fas fa-download"></i>
Export
</button>
<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">&nbsp;</span>
</button>
<ul class="dropdown-menu" role="menu">
<li class="dropdown-item">
<button type="submit" name="exportxml-all" formaction="/Admin/Customer/ExportXML">
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
<button type="submit" name="exportexcel-all" formaction="/Admin/Customer/ExportExcel">
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
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="CustomerListPage.HideSearchBlock">
<div class="search-text">Search</div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-5">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchEmail">Email</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific email."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
 <input class="form-control text-box single-line" id="SearchEmail" name="SearchEmail" type="email" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchFirstName">First name</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a first name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchFirstName" name="SearchFirstName" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchLastName">Last name</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a last name."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchLastName" name="SearchLastName" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchDayOfBirth">Date of birth</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Filter by date of birth. Don't select any value to load all records."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<div class="row">
<div class="col-md-6">
<select class="form-control" id="SearchMonthOfBirth" name="SearchMonthOfBirth"><option value="0">Month</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
<div class="col-md-6">
<select class="form-control" id="SearchDayOfBirth" name="SearchDayOfBirth"><option value="0">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchCompany">Company</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by company."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchCompany" name="SearchCompany" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SearchIpAddress">IP address</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by IP address."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="SearchIpAddress" name="SearchIpAddress" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="SelectedCustomerRoleIds" id="SelectedCustomerRoleIds_label">Customer roles</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Filter by customer role."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style=""><div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on"><ul unselectable="on" class="k-reset" id="SelectedCustomerRoleIds_taglist"><li role="option" aria-selected="true" class="k-button" unselectable="on" aria-setsize="1"><span unselectable="on">Registered</span><span aria-hidden="true" unselectable="on" aria-label="delete" title="delete" class="k-select"><span class="k-icon k-i-close"></span></span></li></ul><input class="k-input" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="SelectedCustomerRoleIds_taglist" aria-labelledby="SelectedCustomerRoleIds_label" aria-disabled="false" aria-busy="false" aria-owns="SelectedCustomerRoleIds_taglist SelectedCustomerRoleIds_listbox"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span></div><select id="SelectedCustomerRoleIds" multiple="multiple" name="SelectedCustomerRoleIds" data-role="multiselect" aria-disabled="false" style="display: none;"><option value="1">Administrators</option><option value="2">Forum Moderators</option><option value="4">Guests</option><option value="3" selected="">Registered</option><option value="5">Vendors</option></select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span></div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-customers" class="btn btn-primary btn-search">
<i class="fas fa-search"></i>
Search
</button>
</div>
</div>
</div>
</div>
</div>
<div class="card card-default">
<div class="card-body">
<div class="documentation-reference"><span>Learn more about <a target="_blank" href="https://docs.nopcommerce.com/running-your-store/customer-management/managing-customers.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference">customers</a></span></div>
<div id="customers-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 29.7656px;"><input class="mastercheckbox" type="checkbox"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 309.281px;">Email</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 120.172px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 102.984px;">Customer roles</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136.422px;">Company name</th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 69.6406px;">Active</th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 79.7344px;">Edit</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="customers-grid" role="grid" aria-describedby="customers-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 29.7656px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input class="mastercheckbox" type="checkbox"></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 309.281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Email</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 120.172px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 102.984px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Customer roles</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136.422px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Company name</div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 69.6406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Active</div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 79.7344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div></th></tr></thead>
<tbody><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="186" type="checkbox" class="checkboxGroups"></td><td>qeaSd@gmail.com</td><td>mohan raj</td><td>Administrators, Registered</td><td>Teslaa.Pvt.Ltd</td><td class=" text-center"><i class="fas fa-times false-icon" nop-value="false"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/186"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_customers" value="163" type="checkbox" class="checkboxGroups"></td><td>tOdFe@gmail.com</td><td>sam shar</td><td>Registered</td><td>mcrsoft</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/163"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="161" type="checkbox" class="checkboxGroups"></td><td>cyqPA@gmail.com</td><td>mohan raj</td><td>Administrators, Registered</td><td>Teslaa.Pvt.Ltd</td><td class=" text-center"><i class="fas fa-times false-icon" nop-value="false"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/161"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_customers" value="148" type="checkbox" class="checkboxGroups"></td><td>IcYJt@gmail.com</td><td>mohan raj</td><td>Administrators, Registered</td><td>Teslaa.Pvt.Ltd</td><td class=" text-center"><i class="fas fa-times false-icon" nop-value="false"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/148"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="143" type="checkbox" class="checkboxGroups"></td><td>CdEpe@gmail.com</td><td>sam shar</td><td>Registered</td><td>mcrsoft</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/143"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_customers" value="138" type="checkbox" class="checkboxGroups"></td><td>IIZDO@gmail.com</td><td>sam shar</td><td>Registered</td><td>mcrsoft</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/138"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="125" type="checkbox" class="checkboxGroups"></td><td>AvbLF@gmail.com</td><td>sam shar</td><td>Registered</td><td>mcrsoft</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/125"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_customers" value="6" type="checkbox" class="checkboxGroups"></td><td>victoria_victoria@nopCommerce.com</td><td>Victoria Terces</td><td>Registered</td><td></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/6"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="5" type="checkbox" class="checkboxGroups"></td><td>brenda_lindgren@nopCommerce.com</td><td>Brenda Lindgren</td><td>Registered</td><td></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/5"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_customers" value="4" type="checkbox" class="checkboxGroups"></td><td>james_pan@nopCommerce.com</td><td>James Pan</td><td>Registered</td><td></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/4"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="3" type="checkbox" class="checkboxGroups"></td><td>arthur_holmes@nopCommerce.com</td><td>Arthur Holmes</td><td>Registered</td><td></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/3"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="even"><td class=" text-center"><input name="checkbox_customers" value="2" type="checkbox" class="checkboxGroups"></td><td>steve_gates@nopCommerce.com</td><td>Steve Gates</td><td>Registered</td><td></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/2"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr><tr class="odd"><td class=" text-center"><input name="checkbox_customers" value="1" type="checkbox" class="checkboxGroups"></td><td>admin@yourStore.com</td><td>John Smith</td><td>Administrators, Forum Moderators, Registered</td><td></td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td class=" button-column"><a class="btn btn-default" href="Edit/1"><i class="fas fa-pencil-alt"></i>Edit</a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="customers-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="customers-grid_previous"><a href="#" aria-controls="customers-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="customers-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="customers-grid_next"><a href="#" aria-controls="customers-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="customers-grid_length"><label>Show <select name="customers-grid_length" aria-controls="customers-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7">7</option><option value="15">15</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select> items</label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="customers-grid_info" role="status" aria-live="polite">1-13 of 13 items</div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="customers-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</section>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lTMfpWm-PflcCAy9uq5Ds0ur-XjhspCzrlE-4J2WJKuymc1KdmzdK7_HMC482t_Z1O0Br0l3jRDMvOqUQ0i4UMUtLWGWG18qrIs6CBax_OVfkojMLdvE3fogEGeot4xchY"></form>
    </div>
    <!-- /.box -->


    <?php require_once "./app/views/layouts/footer.php"; ?>