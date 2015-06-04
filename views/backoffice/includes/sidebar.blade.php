<div id="search">
	<form class="searchform" method="get" action="{{ request_url() }}" ajax-form="table">
		<input type="text" name="keyword" placeholder="Search here..." value="{{ get('keyword') }}" /><button type="submit"><i class="fa fa-search"></i></button>
	</form>
</div>	
<ul>
	<li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
	<li><a href="index.html"><i class="fa fa-home"></i> <span>Brands</span></a></li>
	<li><a href="index.html"><i class="fa fa-home"></i> <span>Customer</span></a></li>
	<li><a href="index.html"><i class="fa fa-home"></i> <span>Slide</span></a></li>
	<li><a href="index.html"><i class="fa fa-home"></i> <span>Transaction</span></a></li>
	<li><a href="index.html"><i class="fa fa-home"></i> <span>Static Content</span></a></li>
	<li><a href="index.html"><i class="fa fa-home"></i> <span>Shipping Cost</span></a></li>
	<li class="submenu">
		<a href="#"><i class="fa fa-flask"></i> <span>Product</span> <i class="arrow fa fa-chevron-right"></i></a>
		<ul>
			<li><a href="interface.html">Category Product</a></li>
			<li><a href="jquery-ui.html">Product</a></li>
		</ul>
	</li>

	<li class="submenu">
		<a href="#"><i class="fa fa-flask"></i> <span>User</span> <i class="arrow fa fa-chevron-right"></i></a>
		<ul>
			<li><a href="{{ route('UserCtrl:list') }}">User List</a></li>
			<li><a href="{{ route('MenuCtrl:list') }}">Menu List</a></li>
			<li><a href="{{ route('ModuleCtrl:list') }}">Module List</a></li>
			<li><a href="{{ route('ModuleAccessCtrl:list') }}">Module Access List</a></li>
		</ul>
	</li>
</ul>