 <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" method="get" action="{{ request_url() }}" ajax-form="table">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." value="{{ get('keyword') }}" />
      </form>
      
      <div class="header-right">
        <ul class="headermenu">
          {{-- @include('backoffice.includes.notif') --}}
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="{{ route('initial_image', ['init' => AuthCtrl::user()->bu_init]) }}" alt="user" />
                {{ AuthCtrl::user()->bu_real_name }}
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="{{ route('DashboardCtrl:profile') }}"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                {{-- <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li> --}}
                {{-- <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li> --}}
                <li><a href="{{ route('AuthCtrl:dologout') }}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          {{-- <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li> --}}
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->