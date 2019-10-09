<!-- menghubungkan ke master -->
@extends('/admin/master')

<!-- page main -->
@section('konten')
     <div id="main">
      <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6 breadcrumbs-left">
                <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">{{ $judul }}</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="/halaman-dashboard">Home</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">{{ $judul }}</a>
                  </li>

                </ol>
              </div>

            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="seaction">
  <!--Invoice-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="basic-tabs" class="card card card-default scrollspy">
        <div class="card-content pt-5 pr-5 pb-5 pl-5">
<iframe
src="http://cc.magelangkota.go.id:3000/public/dashboard/{{ $idMetabase }}"
                        frameborder="0"
                        style="width:100%;height:100vh;"
                        allowtransparency>
</iframe>
        </div>
      </div>
    </div>
  </div>
</div><!-- START RIGHT SIDEBAR NAV -->

<!-- END RIGHT SIDEBAR NAV -->

          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
@endsection