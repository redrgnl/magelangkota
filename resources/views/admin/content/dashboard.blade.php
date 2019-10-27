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
    <div class="seaction">
      @if(Session::get('idBidang') == 99)
      <!-- Halaman Dashboard Super Admin -->
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="col m7 l7 mb-5 mt-5">
            <form class="login-form">
              <div class="row">
                <div class="grid animate fadeLeft">
                  <ul id="hexGrid"> 
                    @foreach($sektorss as $sektors)
                    <li class="hex">
                      <div class="hexIn">
                         <a class="hexLink modal-trigger" href="#modalsektor" title="{{ $sektors->namaSektor }}" onclick="datasektor({{ $sektors->idSektor }})">
                           <div class='img' style="background-color: {{ $sektors->color }}"></div>
                             <i class="fa fa-{{ $sektors->icon }}" style="font-size: 47px"></i>
                         </a>
                        @csrf
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </form>
          </div>
          <div class="col m5 l5 mb-5 mt-5">
            <div class="row">
              <div class="card animate fadeLeft">
                <div class="card-content cyan white-text">
                  <p class="card-stats-title"><i class="fa fa-bar-chart"></i> Grafik</p>
                  <h4 class="card-stats-number white-text">{{ $grafikterdaftar }}</h4>
                  <p class="card-stats-compare">
                    <i class="fa fa-pie-chart"></i> 
                    <span class="cyan text text-lighten-5">Grafik Terdaftar Sampai Saat Ini</span>
                  </p>
                </div>
              </div>
            </div>     
          </div>
        </div>
      </div>
      @else  
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="basic-tabs" class="card card card-default scrollspy">
            <div class="card-content pt-5 pr-5 pb-5 pl-5">
              <!-- Halaman Dashboard User -->
              <p>Selamat datang <b>{{Session::get('namaUser')}}</b> </p>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div><!-- START RIGHT SIDEBAR NAV -->
  </div>
</div>

<div id="modalsektor" class="modal modal-fixed-footer">
  <div class="modal-content">
    <div id="returndatasektor"></div>
  </div>
</div>

<script>
  function datasektor($idsektor) {
        var query = $idsektor;
        var _token = $('input[name="_token"]').val();
        
        $.ajax({
          url:"{{ route('modaldataadmin.fetch') }}",
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
    
<!-- END: Page Main-->
@endsection