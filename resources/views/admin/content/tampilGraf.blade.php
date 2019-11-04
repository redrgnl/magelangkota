<!-- menghubungkan ke master -->
@extends('admin/index')

<!-- page main -->
@section('content')
<div class="col s12">
  <div class="container">
    <div class="section section-data-tables">
      <!-- Page Length Options -->
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <div class="card-title">
                 <div class="row">
                    <div class="col s12 m6 l10">
                     <h4 class="card-title">{{ $judul }}</h4>
                    </div>
                    <div class="col s12 m6 l2">
<!--                       <a href="/admin/halaman-tambah-grafik" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a> -->
                    </div>
                  </div>
                </div>
                <hr>
 
                <br>           

 					<iframe
                        src="http://cc.magelangkota.go.id:3000/public/dashboard/{{ $meta }}"
                        frameborder="0"
                        style="width:100%;height:100vh;"
                        allowtransparency>
                    </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection