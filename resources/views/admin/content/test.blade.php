<!-- menghubungkan ke master -->
@extends('/admin/index')

<!-- page main -->
@section('content')
<div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s10 m6 l6 breadcrumbs-left">
        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">Dashboard</h5>
        <ol class="breadcrumbs mb-0">
          <li class="breadcrumb-item">Selamat Datang Di Command Center Kota Magelang</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="col s12">
  <div class="container">
    <div class="section">
      <div class="container" id="home-content">
        <div class="row">
            <div class="col m12 l12 mt-5">
                                <div class="row">
                    <a href="#!" class="col m12 l12 offset-md-2 link-home" data-id="1">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/pendidikan.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/pendidikan-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                    <a href="#!" class="col m12 l12 link-home" data-id="2">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/perizinan.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/perizinan-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="#!" class="col m12 l12 link-home" data-id="3">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/kesehatan.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/kesehatan-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                    <a href="#!" class="col m12 l12 link-home" data-id="4">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/keuangan.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/keuangan-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                    <a href="#!" class="col m12 l12 link-home" data-id="8">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/pembangunan.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/pembangunan-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="#!" class="col m12 l12 offset-md-2 link-home" data-id="6">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/kepegawaian.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/kepegawaian-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                    <a href="#!" class="col m12 l12 link-home" data-id="5">
                        <div class="icon-home-menu">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/perencanaan.png" alt="Card Back">
                            <img src="http://v1.cc.magelangkota.go.id/images/new/perencanaan-hover.png" class="img-top" alt="Card Front">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div><!-- START RIGHT SIDEBAR NAV -->
  </div>
</div>

@endsection