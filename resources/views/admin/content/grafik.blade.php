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
                     <h4 class="card-title">Daftar Grafik</h4>
                    </div>
                    <div class="col s12 m6 l2">
                      <a href="/admin/halaman-tambah-grafik" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a>
                    </div>
                  </div>
                </div>
                <hr>
                <br>           
              <div class="row">
                <div class="col s12">
                  <table id="page-length-option" class="display">
                    <thead>
                      <tr>
                        <th>Judul Grafik</th>
                        <th>Sektor</th>

                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($grafik as $g)
                        <tr>
                          <td>{{ $g->judulGrafik }}</td>
                          <td>{{ $g->namaSektor }}</td>

                          <td>
                            <a class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                              <i class="material-icons">edit</i>
                            </a>
                            <a class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                              <i class="material-icons">delete_forever</i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection