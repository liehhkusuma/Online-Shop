@extends('layout.main')

@section('vendor_css')
  <link href="<?php echo assets('bo.vendor');?>/Jcrop/jquery.Jcrop.min.css" rel="stylesheet">
  <link href="<?php echo assets('bo.vendor');?>/fancybox/fancybox.css" rel="stylesheet">
@stop

@section('vendor_js')
  <script src="<?php echo assets('bo.js');?>/jquery.datatables.min.js"></script>
  <script src="<?php echo assets('bo.js');?>/chosen.jquery.min.js"></script>
  <script src="<?php echo assets('bo.vendor');?>/fancybox/fancybox.min.js"></script>
  <script src="<?php echo assets('bo.vendor');?>/uploader/plupload.js"></script>
  <script src="<?php echo assets('bo.vendor');?>/uploader/plupload.html5.js"></script>
  <script src="<?php echo assets('bo.vendor');?>/uploader/plupload.html4.js"></script>
  <script src="<?php echo assets('bo.vendor');?>/uploader/plupload.flash.js"></script>
  <script src="<?php echo assets('bo.vendor');?>/Jcrop/jquery.Jcrop.min.js"></script>
@stop

@section('content')
  <div class="pageheader">
    <h2>{{ $page['parent'] }} <span>Add {{ $page['name'] }}</span></h2>
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li><a href="{{ session('list_page') }}" class="btn btn-warning"><i class="fa fa-bars"></i>List {{ $page['type'] }} &nbsp; &nbsp;<span class="badge">{{ $count_data }}</span></a></li>
      </ol>
      </div>
    
  </div>
  
  <div class="contentpanel">
      <div class="row">
      <div class="col-md-12">
        <form id="TheForm" method="post" action="{{ route($ctrl.':store') }}" ajax-form="true" class="form-horizontal">
          <div class="panel panel-dark">
            <div class="panel-heading">
              <h4 class="panel-title">Add {{ $page['name'] }}</h4>
            </div>
            <div class="panel-body">
              <div class="notif"></div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_real_name'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3">
                  <input name="bu_real_name" type="text" class="form-control" placeholder="{{ $lang['bu_real_name'] }}"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_init'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3">
                  <input name="bu_init" type="text" class="form-control" placeholder="{{ $lang['bu_init'] }}"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_email'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3">
                  <input name="bu_email" type="text" class="form-control" placeholder="{{ $lang['bu_email'] }}"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_name'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3">
                  <input name="bu_name" type="text" class="form-control" placeholder="{{ $lang['bu_name'] }}"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_passwd'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3">
                  <input name="bu_passwd" type="password" class="form-control" placeholder="{{ $lang['bu_passwd'] }}"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_level'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3">
                  {{ select('bu_level', $module_access_select, '', 'class="chosen-select"') }}
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">{{ $lang['bu_pic'] }} <span class="asterisk">*</span></label>
                <div class="col-sm-3 uploader" data-page="{{ $pagename }}" data-btn="Photo" data-type="cropping" data-lang="">
                  <div id="uploaderContainer1" class="gen-btn">
                      <span class="filemsg"></span>
                      <a href="#" id="uploadBtn1" title="Upload Foto" class="btn btn-primary text-upper">Upload</a>
                  </div>
                  <!-- File name is here -->
                  <input type="hidden" class="filename" name="bu_pic" />
                  <input type="hidden" class="x" name="x" />
                  <input type="hidden" class="y" name="y" />
                  <input type="hidden" class="w" name="w" />
                  <input type="hidden" class="h" name="h" />
                  <!-- Modal -->
                  <div class="modal fade JCrop_preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" class="myModalLabel">Croping Image</h4>
                        </div>
                        <div class="modal-body">
                          <!-- Image Preview -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary JC-upload">Upload</button>
                          <button type="button" class="btn btn-default JC-cancel">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-1">
                  <div class="rdio rdio-success">
                    <input type="radio" checked="checked" name="status" value="y" id="rad_active">
                    <label for="rad_active">Active</label>
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="rdio rdio-danger">
                    <input type="radio" name="status" value="n" id="rad_inactive">
                    <label for="rad_inactive">InActive</label>
                  </div>
                </div>
              </div>
            </div><!-- panel-body -->
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" class="btn btn-success btn-loading">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                </div>
              </div>
            </div>
          </div><!-- panel -->
        </form>
        
      </div><!-- col-md-6 -->
    
         
      </div><!-- row -->
  </div>
@stop

@section('footer_script')
<script>
  $(document).ready(function() {
    // Primary Form
    $("#TheForm").validate({{ $validation }});
  });
</script>
@stop