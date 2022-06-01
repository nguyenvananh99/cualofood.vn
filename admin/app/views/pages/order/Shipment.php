<?php
 require_once "./app/views/layouts/header.php";
?>

<div class="content-wrapper" style="min-height: 197px;">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lR9hnKtnYlt9JDyJ8tkLoFlDrGxy_va512ep96aKxmBlaBoDpXuQMtjTTYgIJ5UYvyoiG8HLEj15JZsKJyP09i6wHcL-OVWj7J8injZNcGfK-ud7AGE_81DH6zV6X1pdmc">
<form method="post" action="/Admin/Order/ShipmentList" novalidate="novalidate">
<div class="content-header clearfix">
<h1 class="float-left">
Shipments
</h1>
<div class="float-right">
<div class="btn-group">
<button type="button" class="btn btn-info">
<i class="far fa-file-pdf"></i>
Print packaging slips
</button>
<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">&nbsp;</span>
</button>
<ul class="dropdown-menu" role="menu">
<li class="dropdown-item">
<button type="submit" name="exportpackagingslips-all">
Print packaging slips (all found)
</button>
</li>
<li class="dropdown-item">
<button type="button" id="exportpackagingslips-selected">
Print packaging slips (selected)
</button>
</li>
</ul>
</div>
<button type="button" id="ship-selected" class="btn btn-primary" onclick="uploadSelectedShipments('/Admin/Order/SetAsShippedSelected', 'setAsShippedSelectedFailed');return false;">
<i class="fas fa-truck"></i>
Set as shipped (selected)
</button>
<button type="button" id="ready-for-pickup-selected" class="btn btn-primary" onclick="uploadSelectedShipments('/Admin/Order/SetAsReadyForPickupSelected', 'setAsReadyForPickupSelectedFailed');return false;">
<i class="fas fa-cube"></i>
Set as ready for pickup (selected)
</button>
<button type="button" id="deliver-selected" class="btn btn-success" onclick="uploadSelectedShipments('/Admin/Order/SetAsDeliveredSelected', 'setAsDeliveredSelectedFailed');return false;">
<i class="fas fa-check-square"></i>
Set as delivered (selected)
</button>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="form-horizontal">
<div class="form-horizontal">
<div class="cards-group">
<div class="card card-default card-search">
<div class="card-body">
<div class="row search-row opened" data-hideattribute="ShipmentsPage.HideSearchBlock">
<div class="search-text">Search</div>
<div class="icon-search"><i class="fas fa-search" aria-hidden="true"></i></div>
<div class="icon-collapse"><i class="far fa-angle-up" aria-hidden="true"></i></div>
</div>
<div class="search-body ">
<div class="row">
<div class="col-md-5">
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="StartDate">Start date</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The start date (shipment creation date) for the search."><i class="fas fa-question-circle"></i></div></div>
 </div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="StartDate" name="StartDate" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="StartDate_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="select" role="button" aria-controls="StartDate_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="EndDate">End date</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="The end date (shipment creation date) for the search."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<span class="k-widget k-datepicker" style=""><span class="k-picker-wrap k-state-default"><input id="EndDate" name="EndDate" data-role="datepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="EndDate_dateview" autocomplete="off" aria-disabled="false" style="width: 100%;"><span unselectable="on" class="k-select" aria-label="select" role="button" aria-controls="EndDate_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="TrackingNumber">Tracking number</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific tracking number."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="TrackingNumber" name="TrackingNumber" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="WarehouseId">Warehouse</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Load shipments with products from a specified warehouse."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Warehouse field is required." id="WarehouseId" name="WarehouseId"><option selected="selected" value="0">All</option>
<option value="1">Warehouse 1 (New York)</option>
<option value="2">Warehouse 2 (Los Angeles)</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="LoadNotDelivered">Load not delivered</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Load only undelivered shipments"><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="check-box" data-val="true" data-val-required="The Load not delivered field is required." id="LoadNotDelivered" name="LoadNotDelivered" type="checkbox" value="true">
</div>
</div>
</div>
<div class="col-md-7">
<div class="form-group row">
 <div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="CountryId">Country</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific country."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The Country field is required." id="CountryId" name="CountryId"><option selected="selected" value="0">Select country</option>
<option value="1">United States</option>
<option value="88">Afghanistan</option>
<option value="89">Albania</option>
<option value="90">Algeria</option>
<option value="91">American Samoa</option>
<option value="92">Andorra</option>
<option value="93">Angola</option>
<option value="94">Anguilla</option>
<option value="95">Antarctica</option>
<option value="96">Antigua and Barbuda</option>
<option value="3">Argentina</option>
<option value="4">Armenia</option>
<option value="5">Aruba</option>
<option value="6">Australia</option>
<option value="7">Austria</option>
<option value="8">Azerbaijan</option>
<option value="9">Bahamas</option>
<option value="97">Bahrain</option>
<option value="10">Bangladesh</option>
<option value="98">Barbados</option>
<option value="11">Belarus</option>
<option value="12">Belgium</option>
<option value="13">Belize</option>
<option value="99">Benin</option>
<option value="14">Bermuda</option>
<option value="100">Bhutan</option>
<option value="15">Bolivia</option>
<option value="16">Bosnia and Herzegowina</option>
<option value="101">Botswana</option>
<option value="102">Bouvet Island</option>
<option value="17">Brazil</option>
<option value="103">British Indian Ocean Territory</option>
<option value="104">Brunei Darussalam</option>
<option value="18">Bulgaria</option>
<option value="105">Burkina Faso</option>
<option value="106">Burundi</option>
<option value="107">Cambodia</option>
<option value="108">Cameroon</option>
<option value="2">Canada</option>
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
<option value="217">Suriname</option>
<option value="218">Svalbard and Jan Mayen Islands</option>
<option value="219">Swaziland</option>
<option value="75">Sweden</option>
<option value="76">Switzerland</option>
<option value="220">Syrian Arab Republic</option>
<option value="77">Taiwan</option>
<option value="221">Tajikistan</option>
<option value="222">Tanzania</option>
<option value="78">Thailand</option>
<option value="223">Togo</option>
<option value="224">Tokelau</option>
<option value="225">Tonga</option>
<option value="226">Trinidad and Tobago</option>
<option value="227">Tunisia</option>
<option value="79">Turkey</option>
<option value="228">Turkmenistan</option>
<option value="229">Turks and Caicos Islands</option>
<option value="230">Tuvalu</option>
<option value="231">Uganda</option>
<option value="80">Ukraine</option>
<option value="81">United Arab Emirates</option>
<option value="82">United Kingdom</option>
<option value="83">United States minor outlying islands</option>
<option value="84">Uruguay</option>
<option value="85">Uzbekistan</option>
<option value="232">Vanuatu</option>
<option value="233">Vatican City State (Holy See)</option>
<option value="86">Venezuela</option>
<option value="234">Viet Nam</option>
<option value="235">Virgin Islands (British)</option>
<option value="236">Virgin Islands (U.S.)</option>
<option value="237">Wallis and Futuna Islands</option>
<option value="238">Western Sahara</option>
<option value="239">Yemen</option>
<option value="240">Zambia</option>
<option value="241">Zimbabwe</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="StateProvinceId">State / province</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific state."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<select class="form-control" data-val="true" data-val-required="The State / province field is required." id="StateProvinceId" name="StateProvinceId"><option selected="selected" value="0">Other</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="County">County / region</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific county / region."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="County" name="County" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="City">City</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific city."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="form-control text-box single-line" id="City" name="City" type="text" value="">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="LoadNotShipped">Load not shipped</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Load only not shipped shipments."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="check-box" data-val="true" data-val-required="The Load not shipped field is required." id="LoadNotShipped" name="LoadNotShipped" type="checkbox" value="true">
</div>
</div>
<div class="form-group row">
<div class="col-md-4">
<div class="label-wrapper"><label class="col-form-label" for="LoadNotReadyForPickup">Load not ready for pickup</label><div title="" data-toggle="tooltip" class="ico-help" data-original-title="Load only not ready for pickup shipments."><i class="fas fa-question-circle"></i></div></div>
</div>
<div class="col-md-8">
<input class="check-box" data-val="true" data-val-required="The Load not ready for pickup field is required." id="LoadNotReadyForPickup" name="LoadNotReadyForPickup" type="checkbox" value="true">
</div>
</div>
</div>
</div>
<div class="row">
<div class="text-center col-12">
<button type="button" id="search-shipments" class="btn btn-primary btn-search">
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
<div class="documentation-reference"><span>Learn more about <a target="_blank" href="https://docs.nopcommerce.com/running-your-store/order-management/shipping-management.html?utm_source=demo-admin-panel&amp;utm_medium=admin-page&amp;utm_campaign=documentation&amp;utm_content=doc-reference">shipping management</a></span></div>
<div id="shipments-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-md-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;"><thead><tr role="row"><th class="sorting_disabled child-control" rowspan="1" colspan="1" style="width: 10.6406px;"></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 28.2031px;"><input class="mastercheckbox" type="checkbox"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73.4531px;">Shipment #</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65.25px;">Order #</th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 69.4844px;">Pickup from store</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60.9531px;">Tracking number</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69.8594px;">Total weight</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 101.047px;">Date shipped</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 89.8125px;">Date ready for pickup</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 101.047px;">Date delivered</th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 78.25px;">View</th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="shipments-grid" role="grid" aria-describedby="shipments-grid_info" style="width: 100%;"><thead><tr role="row" style="height: 0px;"><th class="sorting_disabled child-control" rowspan="1" colspan="1" style="width: 10.6406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 28.2031px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input class="mastercheckbox" type="checkbox"></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73.4531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Shipment #</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Order #</div></th><th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 69.4844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Pickup from store</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60.9531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Tracking number</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69.8594px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total weight</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 101.047px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Date shipped</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 89.8125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Date ready for pickup</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 101.047px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Date delivered</div></th><th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 78.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div></th></tr></thead>
<tbody><tr class="odd"><td class=" child-control"><i class="fas fa-caret-right" aria-hidden="true"></i></td><td class=" text-center"><input name="checkbox_shipments" value="3" type="checkbox" class="checkboxGroups"></td><td>3</td><td>5</td><td class=" text-center"><i class="fas fa-times false-icon" nop-value="false"></i></td><td></td><td>2.00 [lb(s)]</td><td>3/13/2017 6:20:10 AM</td><td>-</td><td>3/13/2017 6:20:10 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/ShipmentDetails/3"><i class="far fa-eye"></i>View</a></td></tr><tr class="even"><td class=" child-control"><i class="fas fa-caret-right" aria-hidden="true"></i></td><td class=" text-center"><input name="checkbox_shipments" value="2" type="checkbox" class="checkboxGroups"></td><td>2</td><td>4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td></td><td>2.00 [lb(s)]</td><td>-</td><td>Not yet</td><td>3/13/2017 6:20:10 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/ShipmentDetails/2"><i class="far fa-eye"></i>View</a></td></tr><tr class="odd"><td class=" child-control"><i class="fas fa-caret-right" aria-hidden="true"></i></td><td class=" text-center"><input name="checkbox_shipments" value="1" type="checkbox" class="checkboxGroups"></td><td>1</td><td>4</td><td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td><td></td><td>4.00 [lb(s)]</td><td>-</td><td>Not yet</td><td>3/13/2017 6:20:10 AM</td><td class=" button-column"><a class="btn btn-default" href="/Admin/Order/ShipmentDetails/1"><i class="far fa-eye"></i>View</a></td></tr></tbody></table></div></div></div></div><div class="row margin-t-5"><div class="col-lg-5 col-xs-12"><div class="float-lg-left"><div class="dataTables_paginate paging_simple_numbers" id="shipments-grid_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="shipments-grid_previous"><a href="#" aria-controls="shipments-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="shipments-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="shipments-grid_next"><a href="#" aria-controls="shipments-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li></ul></div></div></div><div class="col-lg-3 col-xs-12"><div class="text-center"><div class="dataTables_length" id="shipments-grid_length"><label>Show <select name="shipments-grid_length" aria-controls="shipments-grid" class="custom-select custom-select-sm form-control form-control-sm"><option value="7">7</option><option value="15">15</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select> items</label></div></div></div><div class="col-lg-3 col-xs-12"><div class="float-lg-right text-center"><div class="dataTables_info" id="shipments-grid_info" role="status" aria-live="polite">1-3 of 3 items</div></div></div><div class="col-lg-1 col-xs-12"><div class="float-lg-right text-center data-tables-refresh"><div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="shipments-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lR9hnKtnYlt9JDyJ8tkLoFlDrGxy_va512ep96aKxmBlaBoDpXuQMtjTTYgIJ5UYvyoiG8HLEj15JZsKJyP09i6wHcL-OVWj7J8injZNcGfK-ud7AGE_81DH6zV6X1pdmc"><input name="LoadNotDelivered" type="hidden" value="false"><input name="LoadNotShipped" type="hidden" value="false"><input name="LoadNotReadyForPickup" type="hidden" value="false"></form>
<div id="statesAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="statesAlert-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="statesAlert-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="statesAlert-info"></div>
Failed to retrieve states.
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="statesAlert" style="display:none" data-toggle="modal" data-target="#statesAlert-action-alert"></div><script>$(document).ready(function () {$('#statesAlert').attr("data-toggle", "modal").attr("data-target", "#statesAlert-action-alert")});</script></div>
<div id="setAsShippedSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="setAsShippedSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="setAsShippedSelectedFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="setAsShippedSelectedFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="setAsShippedSelectedFailed" style="display:none" data-toggle="modal" data-target="#setAsShippedSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#setAsShippedSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#setAsShippedSelectedFailed-action-alert")});</script></div>
<div id="setAsReadyForPickupSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="setAsReadyForPickupSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="setAsReadyForPickupSelectedFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="setAsReadyForPickupSelectedFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="setAsReadyForPickupSelectedFailed" style="display:none" data-toggle="modal" data-target="#setAsReadyForPickupSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#setAsReadyForPickupSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#setAsReadyForPickupSelectedFailed-action-alert")});</script></div>
<div id="setAsDeliveredSelectedFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="setAsDeliveredSelectedFailed-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="setAsDeliveredSelectedFailed-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="setAsDeliveredSelectedFailed-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="setAsDeliveredSelectedFailed" style="display:none" data-toggle="modal" data-target="#setAsDeliveredSelectedFailed-action-alert"></div><script>$(document).ready(function () {$('#setAsDeliveredSelectedFailed').attr("data-toggle", "modal").attr("data-target", "#setAsDeliveredSelectedFailed-action-alert")});</script></div>
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
<form method="post" id="pdf-packaging-slip-selected-form" action="/Admin/Order/PdfPackagingSlipSelected">
<input type="hidden" id="selectedIds" name="selectedIds" value="">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lR9hnKtnYlt9JDyJ8tkLoFlDrGxy_va512ep96aKxmBlaBoDpXuQMtjTTYgIJ5UYvyoiG8HLEj15JZsKJyP09i6wHcL-OVWj7J8injZNcGfK-ud7AGE_81DH6zV6X1pdmc"></form>
<div id="exportPackagingSlipsSelected-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exportPackagingSlipsSelected-action-alert-title">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exportPackagingSlipsSelected-action-alert-title">Information</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="additional-text" id="exportPackagingSlipsSelected-info"></div>
</div>
<div class="modal-footer">
<span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
</div>
</div>
</div>
<div class="btn btn-default" id="exportPackagingSlipsSelected" style="display:none" data-toggle="modal" data-target="#exportPackagingSlipsSelected-action-alert"></div><script>$(document).ready(function () {$('#exportPackagingSlipsSelected').attr("data-toggle", "modal").attr("data-target", "#exportPackagingSlipsSelected-action-alert")});</script></div>
</div>
<?php
 require_once "./app/views/layouts/footer.php";
?>
