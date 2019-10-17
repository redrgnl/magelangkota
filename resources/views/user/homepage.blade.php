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
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 1-column magelang-bg  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
  <!-- BEGIN: Page Main-->
  <div class="row mr-0">
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="container">
          <div class="col m1 l1 mt-1 ml-5">
            <div class="input-field">
              <img class="responsive-img" width="50" src="{{ asset('admin/images/magelang-logo.png') }}" alt="">
            </div>
          </div>
          <div class="col m4 l4 mt-2" style="padding-left: 0px">
            <div class="input-field">
              <h8 style="font-weight: bold; color: white">Tentang Command Center</h8>
            </div>
          </div>
          <div class="col m5 l5 mt-2 hide-on-small-only"></div>
          <div class="col m1 l1 mt-2 hide-on-small-only">
            <div class="list-right">
              <a href="/login" class="mb-6 btn waves-effect waves-light red border-round">Login</a>
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
                <input class="border-round" type="text" placeholder="PENCARIAN" style="width: 60%; text-align: center; background-color: white">
                <a href="/login" class="btn waves-effect waves-light red border-round hide-on-large-only">Login</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col s12 m7 l7">
      <div class="row">
        <div class="col s12 m10 l10">
          <form class="login-form">
            <div class="row">
              <div class="input-field col s12 center-align">
                <a href="#modal1" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/1.png') }}" alt="">
                </a>
                <a href="#modal2" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/2.png') }}" alt="">
                </a>
                <a href="#modal3" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/3.png') }}" alt="">
                </a>
                <a href="#modal4" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/4.png') }}" alt="">
                </a>
              </div>
              <div class="input-field col s12 center-align" style="margin-top: -39px">
                <a href="#modal5" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/5.png') }}" alt="">
                </a>
                <a href="#modal6" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/6.png') }}" alt="">
                </a>
                <a href="#modal7" class="modal-trigger">
                  <img class="responsive-img" width="80" src="{{ asset('admin/images/logo/7.png') }}" alt="">
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div></div>
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

<!-- Modals -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>

<div id="modal2" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>

<div id="modal3" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>

<div id="modal4" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>

<div id="modal5" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>

<div id="modal6" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>

<div id="modal7" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
  </div>
</div>