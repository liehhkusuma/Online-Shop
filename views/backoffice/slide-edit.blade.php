@extends('layout.backoffice')

@section('vendor_css')
<link rel="stylesheet" href="<?php echo assets('bo.css');?>/select2.css" />
<link rel="stylesheet" href="<?php echo assets('bo.css');?>/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo assets('bo.css');?>/icheck/flat/blue.css" />
<link rel="stylesheet" href="<?php echo assets('bo.css');?>/unicorn.css" />
<link rel="stylesheet" href="<?php echo assets('bo.css');?>/datepicker.css" />
@stop

@section('vendor_js')
<script src="<?php echo assets('bo.vendor');?>/ckeditor/ckeditor.js"></script>
<script src="<?php echo assets('bo.js');?>/select2.min.js"></script>
<script src="<?php echo assets('bo.js');?>/jquery.icheck.min.js"></script>
<script src="<?php echo assets('bo.js');?>/unicorn.form_common.js"></script>
<script src="<?php echo assets('bo.js');?>/jquery.nicescroll.min.js"></script>
<script src="<?php echo assets('bo.js');?>/unicorn.js"></script>
@stop

@section('content')
<div id="content-header">
<h1>Slider - Update</h1>
<div class="btn-group">
  <a href="#" class="btn btn-large" title="Manage Files"><i class="fa fa-list"></i> List &nbsp; <span class="label label-danger">4</span></a>
  <a href="#" class="btn btn-large" title="Manage Files"><i class="fa fa-plus"></i> Add</a>
</div>
</div>
<div id="breadcrumb">
<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
<a href="#" class="current">Slider</a>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="fa fa-align-justify"></i>                 
          </span>
          <h5>Update Content</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-3 col-md-3 col-lg-2 control-label">Title</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <input type="text" class="form-control input-sm" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 col-md-3 col-lg-2 control-label">Desc</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <textarea name="s_desc" id="s_desc" placeholder="Desc" rows="6"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 col-md-3 col-lg-2 control-label">Status</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <label><input type="radio" name="radios" checked/> Active</label>
                <label><input type="radio" name="radios" /> InActive</label>
              </div>
            </div>
          </form>
        </div>
      </div>            
    </div>
  </div>
</div>
@stop

@section('footer_script')
<script>
  $(document).ready(function() {
    if($('#s_desc').length > 0) CKEDITOR.replace('s_desc', {
     height: 300
    });

  });
</script>
@stop