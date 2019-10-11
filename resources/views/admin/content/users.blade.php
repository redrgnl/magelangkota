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
              <div class="col s7">
                <h4 class="card-title">Daftar Pengguna</h4>
              </div>
              <div class="col s3">
                <a class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Tambah Baru</a>
              </div>
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
                        <td>{{ $usr->namaUser }}</td>
                        <td>{{ $usr->emailUser }}</td>
                        <td>{{ $usr->namaBidang }}</td>
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