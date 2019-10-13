<!-- menghubungkan ke master -->
@extends('/admin/index')

<!-- page main -->
@section('content')
  <div class="row">
    <div class="col s12">
      <div id="validations" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Tambah Grafik Baru</h4>
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
            <form class="formValidate" id="formValidate" action="/admin/proses_tambahGraf" method="post">
            	@csrf
              <div class="row">
                <div class="input-field col s12">
                  <label for="uname">Judul Grafik*</label>
                  <input id="uname" name="judul" type="text" value="{{ $judul }}" data-error=".errorTxt1">
                  <input id="uname" name="id_graf" type="hidden" value="{{ $id_graf }}" data-error=".errorTxt1">

                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cemail">Metabase ID *</label>
                  <input id="cemail" type="text" name="metabase" value="{{ $meta }}" data-error=".errorTxt2">
                  <div class="errorTxt2"></div>
                </div>
                <div class="col s12">
                  <label for="crole">Kategori Grafik * </label>
                  <select class="error browser-default" id="crole" name="sektor" data-error=".errorTxt6">
                    <option value="" disabled selected>Pilih Sektor</option>
                    @if(!empty($all_sktr))
                    @foreach($all_sktr as $b)
                    <option <?php if ($b->idSektor == $sktr): ?>
                    	selected
                    <?php endif ?> value="{{$b->idSektor}}">{{$b->namaSektor}}</option>
                    @endforeach
                    @endif
                  </select>
                  <br>
                  <label>Dapat Di Akses Oleh *</label>
                  <div class="input-field">
                    @foreach($allBid as $bdg)
                    <p>
                      <label>
                        <input type="checkbox" class="filled-in" value="{{ $bdg->idBidang }}" name="chkbidang[]" 
                        <?php foreach($bidang as $b):?>
                        <?php if ($bdg->idBidang == $b->detBidang ): ?>
							checked
                        <?php endif ?>
                        <?php endforeach ?>
                         >
                        <span>{{ $bdg->namaBidang }}</span>
                      </label>
                    </p>
                    @endforeach


                  </div>
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
    <!-- END: Page Main-->
@endsection