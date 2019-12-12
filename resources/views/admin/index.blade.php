<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>{{ $title }}</title>
  <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/hexagon.css') }}">
<!--  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/new_hexa.css') }}">-->
<!--  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/neww_hexa.css') }}">-->
  <!-- END: Custom CSS-->

  <link href="https://vjs.zencdn.net/7.6.5/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <script src="{{ asset('admin/js/custom/jquery.min.js') }}"></script>
<script src="http://mam.jogjaprov.go.id/jwplayer-7.0.1/jwplayer.js"></script>
<script>jwplayer.key = "c9LmUznIEnGsLiST2yp48x/CgoUCMjbWfowKhA==";</script> 
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

  <!-- BEGIN: Header-->
  <header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow"><input type="hidden" name="sess_id" id="sess_id" value="{{ Session::get('idBidang') }}">

        <div class="nav-wrapper">
          <div class="header-search-wrapper"><i class="material-icons">search</i>
            <input class="header-search-input z-depth-2" type="text" id="nama_graf" name="nama_graf" placeholder="Cari Grafik Sekarang">
            @csrf
          <div id="list_graf"></div>

          </div>
          <ul class="navbar-list right">

            <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('admin/images/avatar/avatar-7.png') }}" alt="avatar"><i></i></span></a></li>

          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li><a class="grey-text text-darken-1" href="/admin/edit-data-pengguna/{{ Session::get('idUser') }}"><i class="material-icons">person_outline</i> Profile</a></li>
            <li class="divider"></li>
            <li><a class="grey-text text-darken-1" href="/logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>

          </ul>

        </div>
      </nav>
    </div>
  </header>
  <!-- END: Header-->
  <!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
    <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img /><span class="logo-text hide-on-med-and-down">Kota Magelang</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
      <!-- Dashboard -->
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-dashboard"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">DASHBOARD</span></a>
      </li>

      @if(Session::get('idBidang') == 99)

      <!-- menu grafik -->
      <li class="navigation-header"><a class="navigation-header-text">MANAGEMENT GRAFIK</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-list-grafik"><i class="material-icons">equalizer</i><span class="menu-title" data-i18n="">GRAFIK</span></a>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/harga-pasar"><i class="material-icons">attach_money</i><span class="menu-title" data-i18n="">HARGA PASAR</span></a>
      </li>

      <!-- menu user -->
      <li class="navigation-header"><a class="navigation-header-text">MANAGEMENT PENGGUNA</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-pengguna"><i class="material-icons">people</i><span class="menu-title" data-i18n="">PENGGUNA</span></a>
      </li>

      <!-- menu hak akses/ bidang -->
      <li class="navigation-header"><a class="navigation-header-text">MANAGEMENT AKSES</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-hak-akses"><i class="material-icons">vpn_key</i><span class="menu-title" data-i18n="">HAK AKSES</span></a>
      </li>

      <!-- menu hak akses/ bidang -->
      <li class="navigation-header"><a class="navigation-header-text">MANAGEMENT SEKTOR</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-sektor"><i class="material-icons">account_balance</i><span class="menu-title" data-i18n="">DATA SEKTOR</span></a>
      </li>

      <!-- menu CCTV -->
      <li class="navigation-header"><a class="navigation-header-text">MANAGEMENT CCTV</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="/admin/halaman-cctv"><i class="material-icons">switch_video</i><span class="menu-title" data-i18n="">CCTV</span></a>
      </li>

      @endif

      <!-- menu sektor -->
      <li class="navigation-header"><a class="navigation-header-text">SEKTOR</a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>

      <?php
      $sektor = DB::table('tb_detailbidang')
        ->join('tb_grafik', 'tb_grafik.idGrafik', '=', 'tb_detailbidang.idGrafik')
        ->join('tb_sektor', 'tb_sektor.idSektor', '=', 'tb_grafik.idSektor')
        ->select('*')
        ->orderBy('tb_grafik.idSektor')
        ->get();

      $sktr = '';
      ?>

      @if (!empty($sektor))
      @foreach($sektor as $s)
      @if($sktr != $s->namaSektor)

      <li class="bold">

        <?php
        $kat = $s->namaSektor;
        $sekicon = $s->icon;
        $aaa = Session::get('idBidang');
        ?>
        @if($s->idSektor != 9 || Session::get('idBidang') == 99)
        <a class="collapsible-header waves-effect waves-cyan " href="#">
          <i class="fa fa-{{ $sekicon }}"></i>
          <span class="menu-title" data-i18n="">{{ $kat }}</span>
        </a>
        @endif

        @endif

        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">

            <?php
            if (in_array(Session::get('idBidang'), explode(',', $s->detBidang))) {
              ?>

              <li>
                <a class="collapsible-body" href="/admin/halaman-tampil-grafik/{{ $s->idGrafik }}" data-i18n="" title="{{ $s->judulGrafik }}">
                  <i class="material-icons">radio_button_unchecked</i>
                  <span class="truncate">{{ $s->judulGrafik }}</span>
                </a>
              </li>

            <?php
            }
            $sktr = $s->namaSektor;
            ?>

          </ul>
        </div>

        @endforeach

      </li>

      @endif
      <br><br>
    </ul>

    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
      <i class="material-icons">menu</i>
    </a>
  </aside>
  <!-- END: SideNav-->

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      @if(Session('alert'))
      <div class="card-alert card red ml-2">
        <div class="card-content white-text">
          <p>{{Session('alert')}}</p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif

      @if(Session('alert'))
      <div class="flash-alert" data-flashalert="{{Session('alert')}}"></div>
      @elseif (Session('success'))
      <div class="flash-data" data-flashdata="{{Session('success')}}"></div>
      @endif

      @yield('content')
    </div>
  </div>
  <!-- END: Page Main-->
  <!-- end side right bar -->
  <!-- BEGIN: Footer-->

  <footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
      <div class="container"><span>&copy; 2019 <a href="#" target="_blank">Pemerintahan Kota Magelang</a></span><span class="right hide-on-small-only">Command Center Kota Magelang</span></div>
    </div>
  </footer>
   
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
  <script src="{{ asset('admin/js/scripts/sweetalert2/sweetalert2.all.min.js') }}"></script>
<!-- code -->
<!-- Script Search -->
<script>
  $(document).ready(function(){
    $('#nama_graf').keyup(function(){
      var query = $(this).val();
      var sess = $('#sess_id').val();
      if(query != '')
      {
        var _token = $('input[name="_token"]').val();

        $.ajax({
          url:"{{ route('autocomplete_admin.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token, sess:sess},
          success:function(data)
          {
          console.log(data)

            $('#list_graf').fadeIn();
            $('#list_graf').html(data);
          }
        })
      } else {
          $('#list_graf').html('');
      }
    });
  });
  </script>
  <!-- filter datatable -->
  <script>
    $('#searchBySektor').on('change', function() {
      var table = $('#page-length-option').DataTable();
      table.column(1).
      search($(this).val()).draw();
    });
  </script>

  <script src='https://vjs.zencdn.net/7.6.5/video.js'></script>
  <!-- script sweetalert2 selesai-->
  <script type="text/javascript">
    $('.tombol-selesai').on('click', function(e) {
      e.preventDefault();
      // console.log(e);
      const link = $(this).attr('href');

      Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Pesanan ini akan selesai",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, pesanan ini selesai!'
      }).then((result) => {
        if (result.value) {

          document.location.href = link;
        }
      })

    });
  </script>
  <!-- script sweetalert2 batal-->
  <script type="text/javascript">
    $('#tombol-delete').on('click', function(e) {
      e.preventDefault();
      // console.log(e);
      const link = $(this).attr('href');

      Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Data ini akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.value) {

          document.location.href = link;
        }
      })

    });
  </script>
  <!-- script sweetalert2 -->
  <script type="text/javascript">
    const flash = $('.flash-data').data('flashdata');
    if (flash) {
      Swal.fire({
        title: 'Data',
        text: 'Berhasil ' + flash,
        type: 'success',
        showConfirmButton: false,
        timer: 1500
      });
    }
  </script>
  <!-- script sweetalert2 -->
  <script type="text/javascript">
    const alert = $('.flash-alert').data('flashalert');
    if (alert) {
      Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Gagal ' + alert,
        showConfirmButton: false,
        timer: 1500
      });
    }
  </script>
    
</body>

</html>