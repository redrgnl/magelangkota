@extends('admin/index')

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
                     <h4 class="card-title">Daftar Pengguna</h4>
                    </div>
                    <div class="col s12 m6 l2">
                      <a href="/admin/tambah-pengguna" class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a>
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
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>Bidang</th>
                        <th style="width: 15px; text-align:center">#</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $usr)
                      <tr>
                        <td>{{ $usr->namaUser }} 
@if($usr->idBidang == 99)
 <sup class="red-text text-darken-2" >Admin</sup>
@endif
</td>
                        <td>{{ $usr->emailUser }}</td>
                        <td>{{ $usr->namaBidang }}</td>
                        <td>
                          <a href="/admin/edit-data-pengguna/{{ $usr->idUser }}" class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                            <i class="material-icons">edit</i>
                          </a>
@if($usr->idBidang != 99)
                          <a href="/admin/delete-data-pengguna/{{ $usr->idUser }}" id="tombol-delete" class="mb-6 btn-floating waves-effect waves-light purple lightrn-1 ">
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