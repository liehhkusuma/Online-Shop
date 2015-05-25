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
      <td>Action</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Home</td>
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
      <td align="center" colspan="7">Belum ada Content untuk <strong> Static Content </strong></td>
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
<div class="row">
  <div class="col-xs-12">
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon">
          <i class="fa fa-th"></i>
        </span>
        <h5>Static Content</h5>
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