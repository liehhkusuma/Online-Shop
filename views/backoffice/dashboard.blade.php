@extends('layout.main')

@section('vendor_js')
  <script src="{{ assets('bo.js') }}/flot/flot.min.js"></script>
  <script src="{{ assets('bo.js') }}/flot/flot.resize.min.js"></script>
  <script src="{{ assets('bo.js') }}/raphael-2.1.0.min.js"></script>
  <script src="{{ assets('bo.js') }}/dashboard.js"></script>
@stop

@section('var_js')
  <script type="text/javascript">
  var clientStat = {{ json_encode($clientStat) }};
  var projectStat = {{ json_encode($projectStat) }};
  var PattyCashStat = {{ json_encode($PattyCashStat) }};
  var catInStat = {{ json_encode($catInStat) }};
  var catOutStat = {{ json_encode($catOutStat) }};
  var catInOutStat = {{ json_encode($catInOutStat) }};
  </script>
@stop

@section('content')
    <div class="pageheader">
      <h2>Dashboard <span>Dashboard</span></h2>
    </div>
    
    <div class="contentpanel">  
      <div class="row">
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="{{ assets('bo.images') }}/is-user.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Total Clients</small>
                    <h1>{{ $totalClients }}</h1>
                  </div>
                </div><!-- row -->
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-warning panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="{{ assets('bo.images') }}/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Total Contact Person</small>
                    <h1>{{ $totalContacts }}</h1>
                  </div>
                </div><!-- row -->
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-danger panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="{{ assets('bo.images') }}/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Total Projects</small>
                    <h1>{{ $totalProjects }}</h1>
                  </div>
                </div><!-- row -->
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="{{ assets('bo.images') }}/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Total Documents</small>
                    <h1>{{ $totalDocuments }}</h1>
                  </div>
                </div><!-- row -->                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->
      
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-12">
                  <h5 class="subtitle mb5">IntApp Performance</h5>
                  <p class="mb15">Total clients and project in years</p>
                  <div id="basicflot" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
                </div>
              </div><!-- row -->
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-9 -->
      </div><!-- row -->
      
      <!-- Statictic Petty Cash -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-12">
                  <h5 class="subtitle mb5">total expenditure Petty Cash</h5>
                  <p class="mb15">total expenditure</p>
                  <div id="basicflot2" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
                </div>
              </div><!-- row -->
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-9 -->
      </div><!-- row -->
      
      <!-- Statictic Type -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-12">
                  <h5 class="subtitle mb5">total expenditure Petty Cash / Type</h5>
                  <p class="mb15">total expenditure/type</p>
                  <div id="basicflot3" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
                </div>
              </div><!-- row -->
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-9 -->
      </div><!-- row -->
      
    </div><!-- contentpanel -->
@stop