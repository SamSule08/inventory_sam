<?php
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
 <body>
<?php
	require 'inc/navigation.php';
?>

	<div class="tab-pane fade active show" id="v-pills-search" role="tabpanel" aria-labelledby="v-pills-search-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Item Listing<button id="searchTablesRefresh" name="searchTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>
				  <div class="card-body">										
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#itemSearchTab">Item</a>
						</li>
						
					</ul>
  
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="itemSearchTab" class="container-fluid tab-pane active">
						  <br>
						  <p>Use the grid below to see details of items</p>
						  <!-- <a href="#" class="itemDetailsHover" data-toggle="popover" id="10">wwwee</a> -->
							<div class="table-responsive" id="itemDetailsTableDiv"><div id="itemDetailsTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="itemDetailsTable_length"><label>Show <select name="itemDetailsTable_length" aria-controls="itemDetailsTable" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="itemDetailsTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="itemDetailsTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="itemDetailsTable" class="table table-sm table-striped table-bordered table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="itemDetailsTable_info">
				<thead>
					<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product ID: activate to sort column descending" style="width: 60.2px;">Product ID</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Item Number: activate to sort column ascending" style="width: 63.2px;">Item Number</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Item Name: activate to sort column ascending" style="width: 45.2px;">Item Name</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Discount %: activate to sort column ascending" style="width: 67.2px;">Discount %</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Stock: activate to sort column ascending" style="width: 41.2px;">Stock</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Unit Price: activate to sort column ascending" style="width: 38.2px;">Unit Price</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 47.2px;">Status</th><th class="sorting" tabindex="0" aria-controls="itemDetailsTable" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 87.2px;">Description</th></tr>
				</thead>
				<tbody><tr role="row" class="odd"><td class="sorting_1">50</td><td>001</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="50">White Beans</a></td><td>0</td><td>50</td><td>24000</td><td>In_Stock</td><td></td></tr><tr role="row" class="even"><td class="sorting_1">51</td><td>002</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="51">Brown Beans</a></td><td>0</td><td>50</td><td>22000</td><td>In_Stock</td><td></td></tr><tr role="row" class="odd"><td class="sorting_1">52</td><td>003</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="52">Millet</a></td><td>0</td><td>50</td><td>13000</td><td>In_Stock</td><td></td></tr><tr role="row" class="even"><td class="sorting_1">53</td><td>004</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="53">Wheat</a></td><td>0</td><td>50</td><td>17000</td><td>In_Stock</td><td></td></tr><tr role="row" class="odd"><td class="sorting_1">54</td><td>005</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="54">Maize</a></td><td>0</td><td>100</td><td>18000</td><td>In_Stock</td><td></td></tr><tr role="row" class="even"><td class="sorting_1">55</td><td>006</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="55">Soya Beans</a></td><td>0</td><td>50</td><td>32000</td><td>In_Stock</td><td></td></tr><tr role="row" class="odd"><td class="sorting_1">56</td><td>007</td><td><a href="#" class="itemDetailsHover" data-toggle="popover" id="56">Groundnut</a></td><td>0</td><td>70</td><td>20000</td><td>In_Stock</td><td></td></tr></tbody>
					<tfoot>
						<tr><th rowspan="1" colspan="1">Product ID</th><th rowspan="1" colspan="1">Item Number</th><th rowspan="1" colspan="1">Item Name</th><th rowspan="1" colspan="1">Discount %</th><th rowspan="1" colspan="1">Stock</th><th rowspan="1" colspan="1">Unit Price</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Description</th></tr>
					</tfoot>
				</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="itemDetailsTable_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="itemDetailsTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="itemDetailsTable_previous"><a href="#" aria-controls="itemDetailsTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="itemDetailsTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="itemDetailsTable_next"><a href="#" aria-controls="itemDetailsTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div></div>
						</div>
						
				  </div> 
				</div>
			  </div>

	</body>

				?>