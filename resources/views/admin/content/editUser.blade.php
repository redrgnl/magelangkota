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
<!-- {{-- menampilkan error validasi --}}
 -->@if (count($errors) > 0)

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
                <h4 class="card-title">Update Data Pengguna</h4>
              </div>
            </div>
          </div>
          <div id="view-validations">
            <form class="formValidate" id="formValidate" action="/admin/update-pengguna" method="post">
              @csrf
              @foreach($datapengguna as $dtpgn)
              <div class="row">
                <div class="input-field col s12">
                  <label for="uname">Username*</label>
                  <input id="idd" name="idd" type="hidden" data-error=".errorTxt1" value="{{ $dtpgn->idUser }}">
                  <input id="uname" name="username" type="text" data-error=".errorTxt1" value="{{ $dtpgn->namaUser }}" required>
                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cemail">E-Mail*</label>
                  <input id="cemail" type="email" name="email" data-error=".errorTxt2" value="{{ $dtpgn->emailUser }}" required>
                  <div class="errorTxt2"></div>
                </div>
                <div class="input-field col s12">
                  <label for="password">Password*</label>
                  <input id="password" type="password" name="password" data-error=".errorTxt3" required>
                  <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cpassword">Confirm Password*</label>
                  <input id="cpassword" type="password" name="confirm_password" data-error=".errorTxt4" required>
                  <div class="errorTxt4"></div>
                </div>
                <div class="col s12">
                  <label for="crole">Bidang</label>
                  <select class="error browser-default" id="crole" name="bidang" data-error=".errorTxt6" required>
                    <option value="" disabled selected>Pilih Akses Bidang</option>
                    @if(!empty($bidang))
                    @foreach($bidang as $b)
                    <option <?php if ($dtpgn->idBidang == $b->idBidang): ?>
                    selected
                      
                    <?php endif ?> value="{{$b->idBidang}}">{{$b->namaBidang}}</option>
                    @endforeach
                    @endif
                  </select>
                  <div class="input-field">
                    <div class="errorTxt6"></div>
                  </div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right submit" type="submit" name="action">Update
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
              @endforeach
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: Page Main-->
@endsection