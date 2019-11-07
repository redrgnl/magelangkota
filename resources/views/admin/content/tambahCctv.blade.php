<!-- menghubungkan ke master -->
@extends('/admin/index')

<!-- page main -->
@section('content')
<div class="col s12">
  <div class="container">
    <div class="row">
      <div id="validations" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <!-- {{-- menampilkan error validasi --}}-->
            @if (count($errors) > 0)

            @foreach ($errors->all() as $error)

            <div class="card-alert card red">
              <div class="card-content white-text">
                <p>{{ $error }}</p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            @endforeach

            @endif
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Tambah CCTV</h4>
              </div>
            </div>
          </div>
          <div id="view-validations">
            <form class="formValidate" id="formValidate" action="/admin/store-cctv" method="post">
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <label for="namaCctv">Nama CCTV*</label>
                  <input id="namaCctv" name="namaCctv" type="text" data-error=".errorTxt1" required>
                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <label for="alamatCctv">Alamat CCTV*</label>
                  <input id="alamatCctv" type="text" name="alamatCctv" data-error=".errorTxt2" required>
                  <div class="errorTxt2"></div>
                </div>
                <div class="input-field col s12">
                  <label for="urlCctv">Url CCTV*</label>
                  <input id="urlCctv" type="text" name="urlCctv" data-error=".errorTxt3" required>
                  <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                  <label for="urlTumb">Url Thumbnail*</label>
                  <input id="urlTumb" type="text" name="urlTumb" data-error=".errorTxt3" required>
                  <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right submit" type="submit" name="action">Tambah
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
<!-- END: Page Main-->
@endsection