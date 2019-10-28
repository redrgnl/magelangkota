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
                <h4 class="card-title">Update CCTV</h4>
              </div>
            </div>
          </div>
          <div id="view-validations">
            <form class="formValidate" id="formValidate" action="/admin/update-cctv" method="post">
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <label for="namaCctv">Nama CCTV*</label>
                  <input id="namaCctv" name="namaCctv" value="{{ $nama }}" type="text" data-error=".errorTxt1" required>
                  <input id="id" name="id" value="{{ $id }}" type="hidden" value="{{ $id }}" data-error=".errorTxt1">

                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <label for="alamatCctv">Alamat CCTV*</label>
                  <input id="alamatCctv" type="text" value="{{ $alamat }}" name="alamatCctv" data-error=".errorTxt2" required>
                  <div class="errorTxt2"></div>
                </div>
                <div class="input-field col s12">
                  <label for="urlCctv">Url CCTV*</label>
                  <input id="urlCctv" type="text" name="urlCctv" value="{{ $url }}" data-error=".errorTxt3" required>
                  <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right submit" type="submit" name="action">Update
                    <i class="material-icons right">send</i>
                  </button>
                </div>
                <div class="input-field col s12">
  <video id='my-video' class='video-js' controls preload='auto' width='440' height='254'
  poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
    <source src='{{$url}}' type='video/mp4'>
    <source src='{{$url}}' type='video/webm'>
    <p class='vjs-no-js'>
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
    </p>
  </video>
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