<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Triplets">
  <title>Command Center Kota Magelang</title>
  <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/vendors.min.css') }}">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-menu-nav-dark-template/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/lock.css') }}">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/hexagon.css') }}">
  <!-- END: Custom CSS-->
  <script src="{{ asset('admin/js/custom/jquery.min.js') }}"></script>
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 1-column magelang-bg  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
  <!-- BEGIN: Page Main-->
  <div class="row mr-0">
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="container">
          <div class="col m10 l10 mt-1 ml-5" style="padding-right: 5px">
            <div class="input-field">
              <img class="responsive-img" width="250" src="{{ asset('admin/images/magelang-logo.png') }}" alt="">
            </div>
          </div>
          <div class="col m1 l1 mt-2 hide-on-small-only">
            <div class="list-right">
            @if(Session::get('idBidang'))
              <a href="/admin/halaman-dashboard" class="mb-6 btn waves-effect waves-light red border-round">Home</a>
            @else
              <a href="/login" class="mb-6 btn waves-effect waves-light red border-round">Login</a>
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="row">
          <div class="col s12 m6 l6">
            <form class="login-form">
              <div class="row">
                <div class="input-field col s12 center-align mt-10">
                  <img class="z-depth-4 circle responsive-img" width="300" src="{{ asset('admin/images/magelang-pintar.png') }}" alt="">
                  <h6 style="font-size: 20px; font-weight: bold; color: white">APLIKASI COMMAND CENTER KOTA MAGELANG</h6>
                    <!-- pencarian -->
                    <div class="container box">
                      <div class="form-group">
                        <input class="border-round" class="form-control input-lg" type="text" name="nama_graf" id="nama_graf" placeholder="PENCARIAN" style="width: 60%; text-align: center; background-color: white" autocomplete="off">
                      </div>
                      @csrf
                    </div>
                    <!-- endpencarian -->
                  <a href="/login" class="btn waves-effect waves-light red border-round hide-on-large-only">Login</a>
                </div>
              </div>
            </form>
            <div class="col m10 l10 ml-8 hide-on-small-only">
              <form class="login-form">
              <div class="row">
                <div class="grid">
                  <ul id="hexGrid">
                    @foreach($sektorss as $sektors)
                    @if($sektors->idSektor != 9)
                    <li class="hex">
                      <div class="hexIn">
                        <a class="hexLink modal-trigger" href="#modalsektor" title="{{ $sektors->namaSektor }}" onclick="datasektor({{ $sektors->idSektor }})">
                          <div class='img' style="background-color: {{ $sektors->color }}"></div>
                            <i class="fa fa-{{ $sektors->icon }}"></i>
                        </a>
                        @csrf
                      </div>
                    </li>
                    @endif
                    @endforeach
                  </ul>
                </div>
              </div>
            </form>
            </div>
          </div>
          <div class="col s12 m6 l6">
            <div id="list_graf" class="mr-5"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('admin/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN THEME  JS-->
  <script src="{{ asset('admin/js/plugins.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/custom/custom-script.js') }}" type="text/javascript"></script>
  <!-- END THEME  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('admin/js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>

</html>

<div id="modalsektor" class="modal modal-fixed-footer">
  <div class="modal-content">
    <div id="returndatasektor">
  </div>
</div>

<!-- Script Search -->
<script>
  $(document).ready(function(){
    $('#nama_graf').keyup(function(){
      var query = $(this).val();

      if(query != '')
      {
        var _token = $('input[name="_token"]').val();

        $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
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
     
    function datasektor($idsektor) {
        var query = $idsektor;
        var _token = $('input[name="_token"]').val();
        
        $.ajax({
          url:"{{ route('modaldata.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data)
          {
          console.log(data)

            $('#returndatasektor').html(data);
          }
        })
    }
</script>