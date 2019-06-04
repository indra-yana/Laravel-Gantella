@section('section_sidebar')

<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('gantella-master/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>John Doe</h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	  <div class="menu_section">
	    <h3>General</h3>
	    <ul class="nav side-menu">
	      <li>
	      	<a href="{{ route('gantella-dashboard.index') }}"><i class="fa fa-home"></i> Dashboard </a>
	      </li>
	      <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('form.general-form') }}">General Form</a></li>
	          <li><a href="{{ route('form.advanced-components') }}">Advanced Components</a></li>
	          <li><a href="{{ route('form.form-validation') }}">Form Validation</a></li>
	          <li><a href="{{ route('form.form-wizard') }}">Form Wizard</a></li>
	          <li><a href="{{ route('form.form-upload') }}">Form Upload</a></li>
	          <li><a href="{{ route('form.form-button') }}">Form Buttons</a></li>
	        </ul>
	      </li>
	      <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('ui-element.general-elements') }}">General Elements</a></li>
	          <li><a href="{{ route('ui-element.media-galery') }}">Media Gallery</a></li>
	          <li><a href="{{ route('ui-element.typography') }}">Typography</a></li>
	          <li><a href="{{ route('ui-element.icons') }}">Icons</a></li>
	          <li><a href="{{ route('ui-element.glyphicons') }}">Glyphicons</a></li>
	          <li><a href="{{ route('ui-element.widgets') }}">Widgets</a></li>
	          <li><a href="{{ route('ui-element.invoice') }}">Invoice</a></li>
	          <li><a href="{{ route('ui-element.inbox') }}">Inbox</a></li>
	          <li><a href="{{ route('ui-element.calendar') }}">Calendar</a></li>
	        </ul>
	      </li>
	      <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('table.table') }}">Tables</a></li>
	          <li><a href="{{ route('table.table-dynamic') }}">Table Dynamic</a></li>
	        </ul>
	      </li>
	      <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('data-presentation.chart-js') }}">Chart JS</a></li>
	          <li><a href="{{ route('data-presentation.chart-js2') }}">Chart JS2</a></li>
	          <li><a href="{{ route('data-presentation.moris-js') }}">Moris JS</a></li>
	          <li><a href="{{ route('data-presentation.e-chart') }}">ECharts</a></li>
	          <li><a href="{{ route('data-presentation.other-chart') }}">Other Charts</a></li>
	        </ul>
	      </li>
	      <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('layout.fixed-sidebar') }}">Fixed Sidebar</a></li>
	          <li><a href="{{ route('layout.fixed-footer') }}">Fixed Footer</a></li>
	        </ul>
	      </li>
	    </ul>
	  </div>
	  <div class="menu_section">
	    <h3>Live On</h3>
	    <ul class="nav side-menu">
	      <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('additional-page.e-commerce') }}">E-commerce</a></li>
	          <li><a href="{{ route('additional-page.project') }}">Projects</a></li>
	          <li><a href="{{ route('additional-page.project-detail') }}">Project Detail</a></li>
	          <li><a href="{{ route('additional-page.contact') }}">Contacts</a></li>
	          <li><a href="{{ route('additional-page.profile') }}">Profile</a></li>
	        </ul>
	      </li>
	      <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	          <li><a href="{{ route('extras.403-error') }}">403 Error</a></li>
	          <li><a href="{{ route('extras.404-error') }}">404 Error</a></li>
	          <li><a href="{{ route('extras.500-error') }}">500 Error</a></li>
	          <li><a href="{{ route('extras.plain-page') }}">Plain Page</a></li>
	          <li><a href="{{ route('extras.login-page') }}">Login Page</a></li>
	          <li><a href="{{ route('extras.pricing-table') }}">Pricing Tables</a></li>
	        </ul>
	      </li>
	      <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
	        <ul class="nav child_menu">
	            <li><a href="#level1_1">Level One</a></li>
	            <li><a href="#level1_2">Level One</a></li>
	            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
	              <ul class="nav child_menu">
	                <li class="sub_menu"><a href="#level2_1">Level Two</a></li>
	                <li><a href="#level2_2">Level Two</a></li>
	                <li><a href="#level2_3">Level Two</a></li>
	              </ul>
	            </li>
	        </ul>
	      </li>                  
	      <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
	    </ul>
	  </div>
	</div>

	 <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>

@endsection
