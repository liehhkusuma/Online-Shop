@extends('layout.main')

@section('table')
<?php ob_start(); ?>
<div class="table-responsive">
  <table class="table table-bordered mb30">
    <thead class="theadfix">
      <tr>
        <th>No</th>
        <th>Initial</th>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>Username</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @if ($data->count())
      @foreach ($data as $no => $row)
        <tr>
          <td>{{ $data->numPage() + $no+1 }}</td>
          <td><img alt="{{ $row['bu_init'] }}" src="{{ route('initial_image', ['init' => $row['bu_init']]) }}" class="initial_image" /></td>
          <td>{{ $row['bu_real_name'] }}</td>
          <td>{{ $row['bu_email'] }}</td>
          <td>{{ $row['bu_name'] }}</td>
          @if ($row['bu_status'] == 'y')
            <td>{{ UI::label("Active", "success") }}</td>
          @else
            <td>{{ UI::label("Inactive", "danger") }}</td>
          @endif
          <td class="table-action">
          <a href="{{ route($ctrl.':edit', ['id' => $row['bu_id']]) }}" data-placement="top" data-original-title="Update {{ $page['type'] }}" class="tooltips"><i class="fa fa-pencil"></i></a>
          <a ajax-confirm="delete" href="{{ route($ctrl.':delete', ['id' => $row['bu_id']]) }}" data-placement="top" data-original-title="Delete {{ $page['type'] }}" class="tooltips"><i class="fa fa-trash-o"></i>
         </a>
          </td>
        </tr>
      @endforeach
    @else
      @include('backoffice.includes.data-not-found')
    @endif
    
    </tbody>
  </table>
</div><!-- table-responsive -->
<div class="row">
    <div class="col-md-12">
        {{ $data->links() }}
    </div>
</div>
<?php 
  $table = ob_get_contents();
  ob_end_clean();
  UI::ajax_table($table);
?>
@stop

@section('content')
  <div class="pageheader">
    <h2>{{ $page['parent'] }}<span>{{ $page['name'] }}</span></h2>
  </div>
    
  <div class="contentpanel">
    <div class="row mar_bot">
      <div class="col-md-12">   
        <a href="javascript:;" class="mar_left btn btn-warning btn-md pull-right refresh-table"><i class="fa fa-bars"></i>&nbsp;&nbsp;<span class="badge">{{ $count_data }}</span><br>
         List {{ $page['type'] }} </a>
        <a href="{{ route($ctrl.':add') }}" class="btn btn-success btn-md pull-right"><span class="fa fa-plus"></span><br>Add {{ $page['type'] }} </a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-dark">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $page['name'] }}</h3>
            </div>
            
            <div class="panel-body ajax-table">
              @yield('table')
            </div><!--Panel-Body-->
        </div><!-- col-md-6 -->
      </div>
    </div><!-- row -->
  </div>
@stop

@section('footer_script')
@stop