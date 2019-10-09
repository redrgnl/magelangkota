<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design /Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, /admin template, dashboard template, flat /admin template, responsive /admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Modern 2 | Materialize - Material Design /Admin Template</title>
    <link rel="apple-touch-icon" href="/admin/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/pages/intro.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/app-assets/css/custom/custom.css">
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
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="/admin/app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
              <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i> Chinese</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
              <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
              <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
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
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="/admin/app-assets/images/logo/materialize-logo.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Magelang </span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge pill orange float-right mr-10">1</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="collapsible-body active" href="/halaman-dashboard-admin" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Magelang Dashboard</span></a>
              </li>

            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">ADMINISTRATOR </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">lock</i><span class="menu-title" data-i18n="">ADMINISTRATOR</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="/halaman-daftar-koneksi" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Daftar Koneksi</span></a>
              </li>

            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">SEKTOR</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
<!-- <?php $sektor = DB::table('tb_sektor')->get();?>
1 -->
<?php $sektor = DB::table('tb_sektor')->rightjoin('tb_grafik','tb_sektor.idSektor','=','tb_grafik.idSektor')->select('judulGrafik','namaSektor','idGrafik')->get();?>

@if (!empty($sektor))
        @foreach($sektor as $s)
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">school</i><span class="menu-title" data-i18n="">{{ $s->namaSektor }}</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">

              <li><a class="collapsible-body" href="/halaman-sektor/{{ $s->idGrafik }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>{{ $s->judulGrafik }}</span></a>
              </li>

            </ul>
          </div>
        </li>
        @endforeach
@endif

<!--         <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">description</i><span class="menu-title" data-i18n="">PERIZINAN</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">local_hospital</i><span class="menu-title" data-i18n="">KESEHATAN</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">local_atm</i><span class="menu-title" data-i18n="">KEUANGAN</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">home</i><span class="menu-title" data-i18n="">PEMBANGUNAN</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">people</i><span class="menu-title" data-i18n="">KEPEGAWAIAN</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">insert_chart</i><span class="menu-title" data-i18n="">PERENCANAAN</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
              </li>
              <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
              </li>
            </ul>
          </div>
        </li> -->

       
        <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">cast</i><span class="menu-title" data-i18n="">Cards</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="cards-basic.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards</span></a>
              </li>
              <li><a class="collapsible-body" href="cards-advance.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Advance</span></a>
              </li>
              <li><a class="collapsible-body" href="cards-extended.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Extended</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="">CSS</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="css-typography.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Typograpy</span></a>
              </li>
              <li><a class="collapsible-body" href="css-color.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Color</span></a>
              </li>
              <li><a class="collapsible-body" href="css-grid.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Grid</span></a>
              </li>
              <li><a class="collapsible-body" href="css-helpers.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Helpers</span></a>
              </li>
              <li><a class="collapsible-body" href="css-media.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
              </li>
              <li><a class="collapsible-body" href="css-pulse.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pulse</span></a>
              </li>
              <li><a class="collapsible-body" href="css-sass.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sass</span></a>
              </li>
              <li><a class="collapsible-body" href="css-shadow.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Shadow</span></a>
              </li>
              <li><a class="collapsible-body" href="css-animations.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Animations</span></a>
              </li>
              <li><a class="collapsible-body" href="css-transitions.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Transitions</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Basic UI</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Buttons</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-body" href="ui-basic-buttons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Basic</span></a>
                    </li>
                    <li><a class="collapsible-body" href="ui-extended-buttons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Extended</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-body" href="ui-icons.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Icons</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-alerts.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Alerts</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-badges.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Badges</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-breadcrumbs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Breadcrumbs</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-chips.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chips</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-collections.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collections</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-navbar.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-pagination.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pagination</span></a>
              </li>
              <li><a class="collapsible-body" href="ui-preloader.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Preloader</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="">Advanced UI</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="advance-ui-carousel.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Carousel</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-collapsibles.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collapsibles</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-toasts.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Toasts</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-tooltip.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tooltip</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-dropdown.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dropdown</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-feature-discovery.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Discovery</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-media.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-modals.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modals</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-scrollspy.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Scrollspy</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-tabs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tabs</span></a>
              </li>
              <li><a class="collapsible-body" href="advance-ui-waves.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Waves</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="">Extra Components</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="extra-components-range-slider.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Range Slider</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-sweetalert.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sweetalert</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-nestable.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Nestable</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-translation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Translation</span></a>
              </li>
              <li><a class="collapsible-body" href="extra-components-highlight.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Highlight</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="">Basic Tables</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="">Data Tables</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="">Forms</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="form-elements.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Elements</span></a>
              </li>
              <li><a class="collapsible-body" href="form-validation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Validation</span></a>
              </li>
              <li><a class="collapsible-body" href="form-masks.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Masks</span></a>
              </li>
              <li><a class="collapsible-body" href="form-file-uploads.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>File Uploads</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="">Form Layouts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="">Form Wizard</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Charts &amp; Maps </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="">Chart</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="charts-chartjs.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>ChartJS</span></a>
              </li>
              <li><a class="collapsible-body" href="charts-chartist.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chartist</span></a>
              </li>
              <li><a class="collapsible-body" href="charts-sparklines.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sparkline Charts</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Menu levels</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level</span></a>
              </li>
              <li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level child</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-body" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Third level</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="changelog.html"><i class="material-icons">track_changes</i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge pill light-blue float-right mr-10">5.1</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="../https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="">Support</span></a>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    @yield('konten')
	<!-- END: Page Main -->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2019          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="/admin/app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/admin/app-assets/vendors/chartjs/chart.min.js" type="text/javascript"></script>
    <script src="/admin/app-assets/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
    <script src="/admin/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>
    <script src="/admin/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="/admin/app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="/admin/app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/admin/app-assets/js/scripts/dashboard-modern.js" type="text/javascript"></script>
    <script src="/admin/app-assets/js/scripts/intro.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>