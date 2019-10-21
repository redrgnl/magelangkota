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
                    <h4 class="card-title">Daftar Akses Pengguna</h4>
                  </div>
                  <div class="col s12 m6 l2">
                    <a href="/admin/halaman-tambah-hak-akses" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a>
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
                        <th>Nama Hak Akses</th>
                        <th style="width: 15px; text-align: center">#</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($bidang as $bdg)
                      <tr>
                        <td>{{ $bdg->namaBidang }}</td>
                        <td>
                          @if($bdg->idBidang != 99 && $bdg->idBidang != 1)
                          <a href="/admin/edit-data-hak-akses/{{ $bdg->idBidang }}" class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                            <i class="material-icons">edit</i>
                          </a>
                          
                          <a href="/admin/delete-data-hak-akses/{{ $bdg->idBidang }}" class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                            <i class="material-icons">delete_forever</i>
                          </a>
                          @endif
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