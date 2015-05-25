 <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> SmERP <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
    <!-- This is only visible to small devices -->
    <div class="visible-xs hidden-sm hidden-md hidden-lg">   
        <div class="media userlogged">
            <img alt="user" src="{{ route('initial_image', ['init' => AuthCtrl::user()->bu_init]) }}" class="media-object">
            <div class="media-body">
                <h4>{{ AuthCtrl::user()->bu_real_name }}</h4>
            </div>
        </div>
      
        <h5 class="sidebartitle actitle">Account</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket mb30">
          <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
          <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
          <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
          <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
        </ul>
    </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        @foreach ($sidebar['parent'] as $parent)
            @if (!isset($sidebar['sub_menu'][$parent['bm_id']]))
                <li class="{{ $parent['active'] }}">
                    <a href="{{ $parent['link'] }}" {{ $parent['bm_type'] == 1 ? 'target="_blank"' : '' }}><i class="{{ $parent['bm_icon'] }}"></i>
                        <span>{{ $parent['bm_name'] }}</span>
                    </a>
                </li>
            @else
            <li class="nav-parent {{ $parent['active'] }}">
                <a href="{{ $parent['link'] }}" {{ $parent['bm_type'] == 1 ? 'target="_blank"' : '' }}><i class="{{ $parent['bm_icon'] }}"></i>
                    <span>{{ $parent['bm_name'] }}</span>
                </a>
                <ul class="children" {{ $parent['active'] ? 'style="display:block"' : "" }}>
                    @foreach ($sidebar['sub_menu'][$parent['bm_id']] as $sub)
                        <li {{ $sub['active'] }}>
                            <a href="{{ $sub['link'] }}" {{ $sub['bm_type'] == 1 ? 'target="_blank"' : '' }}><i class="fa fa-caret-right"></i>
                                {{ $sub['bm_name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            @endif
        @endforeach
      </ul>
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  