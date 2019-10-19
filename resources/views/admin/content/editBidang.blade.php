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
                <h4 class="card-title">Update Data Akses Bidang</h4>
              </div>
            </div>
          </div>
          <div id="view-validations">
            <form class="formValidate" id="formValidate" action="/admin/update-akses" method="post">
              @csrf
              @foreach($akses as $aks)
              <input id="idakses" name="idakses" type="hidden" data-error=".errorTxt1" value="{{ $aks->idBidang }}">
              <div class="row">
                <div class="input-field col s12">
                  <label for="hakses">Nama Bidang*</label>
                  <input id="hakses" name="hakses" type="text" value="{{ $aks->namaBidang }}" data-error=".errorTxt1" required>
                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit</button>
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
@endsection