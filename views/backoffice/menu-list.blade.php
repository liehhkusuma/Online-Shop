@extends('layout.backoffice')

@section('table')
<?php ob_start(); ?>
<div id="dialog" title="Delete Item?">
  <p>Are you sure to delete this item?</p>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <td>Menu</td>
      <td>Link</td>
      <td>Action</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dashboard</td>
      <td>DashboardCtrl:list</td>
      <td>
        <a class="btn btn-primary btn-xs tip-top" data-original-title="update"
         href="#"><i class="fa fa-pencil"></i></a>

        <a class="btn btn-danger btn-xs tip-top open-dialog" data-original-title="Del"
         href="#"><i class="fa fa-trash-o"></i></a>
         
         <a class="btn btn-success btn-xs btn-success btn-xs tip-top" data-original-title="Status Active">Active</a>

         <a class="btn btn-success btn-xs btn-warning btn-xs tip-top" data-original-title="Status Inactive">Inactive</a>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="7">Belum ada Content untuk <strong> Menu </strong></td>
    </tr>
  </tbody>
</table>  
</div>            

<?php 
  $table = ob_get_contents();
  ob_end_clean();
  UI::ajax_table($table);
?>
@stop

@section('content')
<div id="content-header">
<h1>Menu - List</h1>
<div class="btn-group">
  <a href="#" class="btn btn-large" title="Manage Files"><i class="fa fa-list"></i> List &nbsp; <span class="label label-danger">4</span></a>
  <a href="#" class="btn btn-large" title="Manage Files"><i class="fa fa-plus"></i> Add</a>
</div>
</div>
<div id="breadcrumb">
<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
<a href="#" class="current">menu</a>
</div>

<div class="row">
  <div class="col-xs-12">
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon">
          <i class="fa fa-th"></i>
        </span>
        <h5>Menu</h5>
      </div>
        <div class="widget-content">
          @yield('table')
        </div>
    </div>
  </div>
</div>
@stop

@section('footer_script')
@stop