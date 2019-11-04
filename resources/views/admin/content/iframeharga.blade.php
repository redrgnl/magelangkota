@extends('/admin/index')

@section('content')
<div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s10 m10 l10 breadcrumbs-left">
        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">Data Survey</h5>
        <ol class="breadcrumbs mb-0">
          <li class="breadcrumb-item">Perkembangan Harga Kota Magelang</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="col s12">
  <div class="container">
    <div style="border: 2px solid #828282; overflow: hidden; margin-top: 15px; margin-bottom: 15px;">
      <iframe src="http://datago.magelangkota.go.id/frontend/inflasi" style="border: 0px none; height: 2000px; margin-top: -650px; margin-bottom: -220px; width: 100%;"></iframe>
    </div>
  </div>
</div>

@endsection