<!-- menghubungkan ke master -->
@extends('/admin/index')

<!-- page main -->
@section('content')


<div class="col s12">
  <div class="container">
    <div class="seaction">
      <!--Invoice-->
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="basic-tabs" class="card card card-default scrollspy">
            <div class="card-content pt-5 pr-5 pb-5 pl-5">
              <div class="card-title">
                <div class="row">
                  <div class="col s12 m6 l10">
                    <h4 class="card-title">CCTV</h4>
                  </div>
                  <div class="col s12 m6 l2">
                    <a href="/admin/halaman-tambah-cctv" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a>
                  </div>
                </div>
              </div>
              <hr>
              @foreach($cctv as $s)
              <div class="col s12 m8 l6 animate fadeRight">
                <div class="card">
                  <div class="card-content">
                    <h4 class="card-title mb-0">{{$s->namaCctv}} <i class="material-icons float-right">more_vert</i></h4>
                    <p>{{$s->alamatCctv}}</p>

                    <video id='my-video' class='video-js' controls preload='auto' width='350' height='180' poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
                      <source src="{{$s->urlCctv}}" type="video/webm">
                    </video>

                    <div class="total-transaction-container">
                      <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div><!-- START RIGHT SIDEBAR NAV -->

    <!-- END RIGHT SIDEBAR NAV -->

  </div>
</div>

<!-- END: Page Main-->
@endsection