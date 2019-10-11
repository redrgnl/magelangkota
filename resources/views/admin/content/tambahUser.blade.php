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
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Tambah Pengguna</h4>
              </div>
            </div>
          </div>
          <div id="view-validations">
            <form class="formValidate" id="formValidate" action="/admin/store" method="post">
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <label for="uname">Username*</label>
                  <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cemail">E-Mail*</label>
                  <input id="cemail" type="email" name="cemail" data-error=".errorTxt2">
                  <div class="errorTxt2"></div>
                </div>
                <div class="input-field col s12">
                  <label for="password">Password*</label>
                  <input id="password" type="password" name="password" data-error=".errorTxt3">
                  <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cpassword">Confirm Password*</label>
                  <input id="cpassword" type="password" name="confirm_password" data-error=".errorTxt4">
                  <div class="errorTxt4"></div>
                </div>
                <div class="col s12">
                  <label for="crole">Bidang</label>
                  <select class="error browser-default" id="crole" name="bidang" data-error=".errorTxt6">
                    <option value="" disabled selected>Pilih Bidang</option>
                    @if(!empty($bidang))
                    @foreach($bidang as $b)
                    <option value="{{$b->idBidang}}">{{$b->namaBidang}}</option>
                    @endforeach
                    @endif
                  </select>
                  <div class="input-field">
                    <div class="errorTxt6"></div>
                  </div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right submit" type="submit" name="action">Daftar
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