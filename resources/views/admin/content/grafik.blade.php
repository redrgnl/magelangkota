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
                    <h4 class="card-title">Daftar grafik</h4>
                  </div>
                  <div class="col s12 m6 l2">
                    <a href="/admin/halaman-tambah-grafik" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a>
                  </div>
                </div>
              </div>
              <hr>

              <br>
              <div style="margin: auto; width: 40%; margin-bottom: -30px">
                <select name=" FilterSktr" id="searchBySektor">
                  <option value="">-- Filter Sektor --</option>

                  @if(!empty($sektor))
                  @foreach($sektor as $s)

                  <option value="{{ $s->namaSektor }}">{{ $s->namaSektor }}</option>

                  @endforeach
                  @endif

                </select>
              </div>
              <div class="row" style="position:relative; z-index:1;">
                <div class="col s12">
                  <table id="page-length-option" class="display">
                    <thead>
                      <tr>
                        <th>Judul Grafik</th>
                        <th>Sektor</th>
                        <th style=" width: 15px; text-align: center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(!empty($grafik))
                      @foreach($grafik as $g)
                      <tr>
                        <td>{{ $g->judulGrafik }}</td>
                        <td>{{ $g->namaSektor }}</td>

                        <td>
                          <a href="/admin/edit-data-grafik/{{ $g->idGrafik }}" class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                            <i class="material-icons">edit</i>
                          </a>
                          <a class="mb-6 btn-floating waves-effect waves-light purple lightrn-1 modal-trigger" href="#modaldelete{{ $g->idGrafik }}">
                            <i class="material-icons">delete_forever</i>
                          </a>
                        </td>
                      </tr>
                      <!-- Modal Icons -->
                      <div id="modaldelete{{ $g->idGrafik }}" class="modal">
                        <div class="modal-content">
                          <h5>Apakah Anda Yakin Untuk Menghapus Data Ini?</h5>
                          <hr>
                          <h4 class="mt-5"> &ensp; {{ $g->judulGrafik }}</h4>
                          <h6> &ensp; Data Ini Tidak Dapat Dikembalikan Setelah Proses Hapus, Apakah Anda Yakin?</h6>
                        </div>
                        <div class="modal-footer">
                          <a href="/admin/delete-grafik/{{ $g->idGrafik }}" class="modal-action modal-close waves-effect waves-light red accent-2 btn-flat" style="color: white">Delete</a>
                        </div>
                      </div>
                      @endforeach
                      @endif
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