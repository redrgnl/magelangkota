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
              <h4 class="card-title">Hak Akses Pengguna</h4>
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