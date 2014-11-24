@extends('layouts.default')

@section('title')
	Stock
@stop

@section('subtitle')
	Panel
@stop

@section('link')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
@stop

@section('content')
<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<div class="note note-success note-bordered">
						<p>
							 Please try to re-size your browser window in order to see the tables in responsive mode.
						</p>
					</div>
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Responsive Flip Scroll Tables</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed table-hover" id="example">
							<thead class="flip-content">
							<tr>
								<th width="20%">
									 Code
								</th>
								<th>
									 Company
								</th>
								<th class="numeric">
									 Price
								</th>
								<th class="numeric">
									 Change
								</th>
								<th class="numeric">
									 Change %
								</th>
								<th class="numeric">
									 Open
								</th>
								<th class="numeric">
									 High
								</th>
								<th class="numeric">
									 Low
								</th>
								<th class="numeric">
									 Volume
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 AAC
								</td>
								<td>
									 AUSTRALIAN AGRICULTURAL COMPANY LIMITED.
								</td>
								<td class="numeric">
									 &nbsp;
								</td>
								<td class="numeric">
									 -0.01
								</td>
								<td class="numeric">
									 -0.36%
								</td>
								<td class="numeric">
									 $1.39
								</td>
								<td class="numeric">
									 $1.39
								</td>
								<td class="numeric">
									 &nbsp;
								</td>
								<td class="numeric">
									 9,395
								</td>
							</tr>
							<tr>
								<td>
									 AAD
								</td>
								<td>
									 ARDENT LEISURE GROUP
								</td>
								<td class="numeric">
									 $1.15
								</td>
								<td class="numeric">
									 +0.02
								</td>
								<td class="numeric">
									 1.32%
								</td>
								<td class="numeric">
									 $1.14
								</td>
								<td class="numeric">
									 $1.15
								</td>
								<td class="numeric">
									 $1.13
								</td>
								<td class="numeric">
									 56,431
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Basic Bootstrap 3.0 Responsive Table</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 1
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
								</tr>
								<tr>
									<td>
										 2
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Bordered Bootstrap 3.0 Responsive Table</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-bordered">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 1
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
								</tr>
								<tr>
									<td>
										 2
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
								</tr>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">All in One Bootstrap 3.0 Responsive Table</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
									<th>
										 Table heading
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 1
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
									<td>
										 Table cell
									</td>
								</tr>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Horizontal Scrollable Responsive Table</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th scope="col" style="width:450px !important">
										 Column header 1
									</th>
									<th scope="col">
										 Column header 2
									</th>
									<th scope="col">
										 Column header 3
									</th>
									<th scope="col">
										 Column header 4
									</th>
									<th scope="col">
										 Column header 5
									</th>
									<th scope="col">
										 Column header 6
									</th>
									<th scope="col">
										 Column header 7
									</th>
									<th scope="col">
										 Column header 8
									</th>
									<th scope="col">
										 Column header 9
									</th>
									<th scope="col">
										 Column header 10
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
									<td>
										 Table data
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
@stop


@section('script')

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/table-advanced.js"></script>jg
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
TableAdvanced.init();

$('#example').dataTable( {
        "order": [[ 3, "desc" ]]
    } );
});
</script>
@stop