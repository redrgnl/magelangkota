<!-- menghubungkan ke master -->
@extends('/admin/index')

<!-- page main -->
@section('content')
<div class="row">

  <div class="col s12">
    <div class="container">
      <div class="row">
        <div id="validations" class="card card-tabs">
          <div class="card-content">
            <div class="card-title">
              <div class="row">
                <div class="col s12 m6 l10">
                  <h4 class="card-title">Tambah Hak Akses Baru</h4>
                </div>
              </div>
            </div>
            <div id="view-validations">
              <form class="formValidate" id="formValidate" action="/admin/store-hak-akses" method="post">
                @csrf
                <div class="row">
                  <div class="input-field col s12">
                    <label for="hakses">Nama Bidang*</label>
                    <input id="hakses" name="hakses" type="text" data-error=".errorTxt1" required>
                    <div class="errorTxt1"></div>
                  </div>
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection