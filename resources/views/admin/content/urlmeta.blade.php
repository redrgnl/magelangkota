<!-- menghubungkan ke master -->
@extends('admin/index')

<!-- page main -->
@section('content')
<div class="row">
    <div class="col s12">
      <div id="validations" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">URL Metabase</h4>
              </div>

            </div>
          </div>
          <div id="view-validations">
            <!-- {{-- menampilkan error validasi --}} -->
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
            <form class="formValidate" id="formValidate" action="/admin/update-url-metabase" method="post">
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <label for="urlmeta">URL Metabase*</label>
                  <input id="urlmeta" name="urlmeta" type="text" data-error=".errorTxt1" required value="{{ $urlmetabase->url }}">
                  <input id="idurlmeta" name="idurlmeta" type="hidden" data-error=".errorTxt1" required value="{{ $urlmetabase->idUrl }}">
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
@endsection