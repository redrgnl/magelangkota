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
              <h4 class="card-title">Page Length Options</h4>
              <div class="row">
                <div class="col s12">
                  <table id="page-length-option" class="display">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th style="width: 15px">Office</th>
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