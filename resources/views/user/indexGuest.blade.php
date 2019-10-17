<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="ThemeSelect">
  <title>{{ $sector }} | {{ $title }}</title>
  <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/vendors.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/flag-icon/css/flag-icon.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/data-tables/css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/data-tables/css/select.dataTables.min.css') }}">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-menu-nav-dark-template/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/data-tables.css') }}">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/custom.css') }}">
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

  <!-- BEGIN: Header-->
  <header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
        <div class="nav-wrapper">
          <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
            <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize">
          </div>
          <ul class="navbar-list right">


            <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>

            <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('admin/images/avatar/avatar-7.png') }}" alt="avatar"><i></i></span></a></li>
            
          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
            <li class="divider"></li>
            <li><a class="grey-text text-darken-1" href="/logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>

          </ul>

        </div>
        <nav class="display-none search-sm">
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input class="search-box-sm" type="search" required="">
                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
              </div>
            </form>
          </div>
        </nav>
      </nav>
    </div>
  </header>
  <!-- END: Header-->
  <!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
    <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="{{ asset('admin/images/logo/materialize-logo.png') }}" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
      <!-- menu sektor -->
      <li class="navigation-header"><a class="navigation-header-text">SEKTOR</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      
      <?php
      $sektor = DB::table('tb_sektor')
        ->rightjoin('tb_grafik', 'tb_sektor.idSektor', '=', 'tb_grafik.idSektor')
        ->select('*')
        ->orderBy('tb_grafik.idSektor')
        ->get();
      ?>

      <?php $sktr = '-'; ?>

      @if (!empty($sektor))
      @foreach($sektor as $s)
      @if($sktr =='-'|| $sktr!=$s->namaSektor)
      <li class="bold">

        <?php $kat = $s->namaSektor; ?>

        <a class="collapsible-header waves-effect waves-cyan " href="#">
          <i class="material-icons">school</i>
          <span class="menu-title" data-i18n="">{{ $kat }}</span>
        </a>
        @endif
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">

            <li><a class="collapsible-body" href="/guest/halaman-tampil-grafik/{{ $s->idGrafik }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>{{ $s->judulGrafik }}</span></a>
            </li>

          </ul>
        </div>
        <?php $sktr = $s->namaSektor; ?>

        @endforeach
      </li>
      @endif
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
  </aside>
  <!-- END: SideNav-->

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">

            @if(Session('alert'))
            <div class="card-alert card red">
              <div class="card-content white-text">
                <p>{{Session('alert')}}</p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            @endif

          </div>
        </div>
      </div>

      @yield('content')
    </div>
  </div>
  <!-- END: Page Main-->
  
  <!-- end side right bar -->
  <!-- BEGIN: Footer-->

  <footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
      <div class="container"><span>&copy; 2019 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
    </div>
  </footer>
  <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 -->

  <!-- END: Footer-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('admin/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('admin/vendors/data-tables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/data-tables/js/dataTables.select.min.js') }}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN THEME  JS-->
  <script src="{{ asset('admin/js/plugins.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/custom/custom-script.js') }}" type="text/javascript"></script>
  <!-- END THEME  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('admin/js/scripts/data-tables.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script src="{{ asset('admin/js/scripts/ui-alerts.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script>


</body>

</html>