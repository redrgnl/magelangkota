@extends('admin/index')

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
                  <h4 class="card-title">Update Data Sektor</h4>
                </div>
              </div>
            </div>
            <div id="view-validations">
              <form class="formValidate" id="formValidate" action="/admin/update-sektor" method="post">
                @csrf
                @foreach($datasektor as $dtsktr)
                <div class="row">
                  <div class="input-field col s12">
                    <input type="hidden" value="{{ $dtsktr->idSektor }}" name="id">
                    <label for="sektor">Nama Sektor*</label>
                    <input id="sektor" name="sektor" type="text" data-error=".errorTxt1" value="{{ $dtsktr->namaSektor }}" required>
                    <div class="errorTxt1"></div>
                  </div>
                  <div class="input-field col s12">
                    <div class="col m1 l1">
                      <a class="btn-floating waves-effect waves-light purple lightrn-1 btn-large modal-trigger" href="#modalicons">
                        <i class="material-icons">grain</i>
                      </a>
                    </div>
                    <div class="col m10 l10">
                      <label for="iconsektor">Nama icon Sektor*</label>
                      <input id="iconsektor" name="iconsektor" type="text" data-error=".errorTxt2" value="{{ $dtsktr->icon }}" required>
                      <div class="errorTxt2"></div>
                    </div>
                  </div>
                  <div class="input-field col s12">
                    <div class="col m1 l1">
                      <a class="btn-floating waves-effect waves-light purple lightrn-1 btn-large modal-trigger" href="#modalcolors">
                        <i class="material-icons">color_lens</i>
                      </a>
                    </div>
                    <div class="col m10 l10">
                      <label for="warnasektor">Warna Sektor*</label>
                      <input id="warnasektor" name="warnasektor" type="text" data-error=".errorTxt2" required placeholder="Contoh #ffebee"  value="{{ $dtsktr->color }}">
                      <div class="errorTxt2"></div>
                    </div>
                  </div>
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
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
    
  <!-- Modal Icons -->
  <div id="modalicons" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Salin Nama Icon</h4>
      <p>Tempel pada field Nama Icon</p>
      <div class="row">
                <section id="new">
                  <h5>Icons</h5>
                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-500px"></i> &ensp; 500px</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-amazon"></i> &ensp; amazon</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-balance-scale"></i> &ensp; balance-scale</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-0"></i> &ensp; battery-0
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-1"></i> &ensp; battery-1
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-2"></i> &ensp; battery-2
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-3"></i> &ensp; battery-3
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-4"></i> &ensp; battery-4
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-empty"></i> &ensp; battery-empty</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-full"></i> &ensp; battery-full</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-half"></i> &ensp; battery-half</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-quarter"></i> &ensp; battery-quarter</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-three-quarters"></i>
                      fa-battery-three-quarters
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-black-tie"></i> &ensp; black-tie</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-check-o"></i> &ensp; calendar-check-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-minus-o"></i> &ensp; calendar-minus-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-plus-o"></i> &ensp; calendar-plus-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-times-o"></i> &ensp; calendar-times-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> &ensp; cc-diners-club</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> &ensp; cc-jcb</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chrome"></i> &ensp; chrome</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-clone"></i> &ensp; clone</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-commenting"></i> &ensp; commenting</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-commenting-o"></i> &ensp; commenting-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-contao"></i> &ensp; contao</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-creative-commons"></i> &ensp; creative-commons
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-expeditedssl"></i> &ensp; expeditedssl</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-firefox"></i> &ensp; firefox</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fonticons"></i> &ensp; fonticons</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-genderless"></i> &ensp; genderless</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-get-pocket"></i> &ensp; get-pocket</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gg"></i> &ensp; gg</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> &ensp; gg-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> &ensp; hand-grab-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> &ensp; hand-lizard-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> &ensp; hand-paper-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> &ensp; hand-peace-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> &ensp; hand-pointer-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> &ensp; hand-rock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> &ensp; hand-scissors-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> &ensp; hand-spock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> &ensp; hand-stop-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass"></i> &ensp; hourglass</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-1"></i> &ensp; hourglass-1
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-2"></i> &ensp; hourglass-2
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-3"></i> &ensp; hourglass-3
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-end"></i> &ensp; hourglass-end</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-half"></i> &ensp; hourglass-half</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-o"></i> &ensp; hourglass-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-start"></i> &ensp; hourglass-start</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-houzz"></i> &ensp; houzz</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-i-cursor"></i> &ensp; i-cursor</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-industry"></i> &ensp; industry</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-internet-explorer"></i> &ensp; internet-explorer
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map"></i> &ensp; map</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-o"></i> &ensp; map-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-pin"></i> &ensp; map-pin</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-signs"></i> &ensp; map-signs</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mouse-pointer"></i> &ensp; mouse-pointer</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-object-group"></i> &ensp; object-group</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-object-ungroup"></i> &ensp; object-ungroup</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-odnoklassniki"></i> &ensp; odnoklassniki</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-odnoklassniki-square"></i>
                      fa-odnoklassniki-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-opencart"></i> &ensp; opencart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-opera"></i> &ensp; opera</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-optin-monster"></i> &ensp; optin-monster</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-registered"></i> &ensp; registered</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-safari"></i> &ensp; safari</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sticky-note"></i> &ensp; sticky-note</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sticky-note-o"></i> &ensp; sticky-note-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-television"></i> &ensp; television</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-trademark"></i> &ensp; trademark</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tripadvisor"></i> &ensp; tripadvisor</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tv"></i> &ensp; tv
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo"></i> &ensp; vimeo</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wikipedia-w"></i> &ensp; wikipedia-w</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-y-combinator"></i> &ensp; y-combinator</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-yc"></i> &ensp; yc
                      <span class="text-muted"></span></div>
                  </div>
                </section>

                <section id="web-application">
                  <h5>Web Application Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-adjust"></i> &ensp; adjust</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-anchor"></i> &ensp; anchor</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-archive"></i> &ensp; archive</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> &ensp; area-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> &ensp; arrows</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> &ensp; arrows-h</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> &ensp; arrows-v</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> &ensp; asterisk</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-at"></i> &ensp; at</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-automobile"></i> &ensp; automobile
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-balance-scale"></i> &ensp; balance-scale</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ban"></i> &ensp; ban</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bank"></i> &ensp; bank <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> &ensp; bar-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> &ensp; bar-chart-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-barcode"></i> &ensp; barcode</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bars"></i> &ensp; bars</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-0"></i> &ensp; battery-0
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-1"></i> &ensp; battery-1
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-2"></i> &ensp; battery-2
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-3"></i> &ensp; battery-3
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-4"></i> &ensp; battery-4
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-empty"></i> &ensp; battery-empty</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-full"></i> &ensp; battery-full</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-half"></i> &ensp; battery-half</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-quarter"></i> &ensp; battery-quarter</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-battery-three-quarters"></i>
                      fa-battery-three-quarters
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bed"></i> &ensp; bed</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-beer"></i> &ensp; beer</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bell"></i> &ensp; bell</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> &ensp; bell-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash"></i> &ensp; bell-slash</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash-o"></i> &ensp; bell-slash-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> &ensp; bicycle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-binoculars"></i> &ensp; binoculars</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-birthday-cake"></i> &ensp; birthday-cake</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bolt"></i> &ensp; bolt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bomb"></i> &ensp; bomb</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-book"></i> &ensp; book</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> &ensp; bookmark</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> &ensp; bookmark-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> &ensp; briefcase</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bug"></i> &ensp; bug</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-building"></i> &ensp; building</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-building-o"></i> &ensp; building-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> &ensp; bullhorn</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> &ensp; bullseye</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bus"></i> &ensp; bus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cab"></i> &ensp; cab <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calculator"></i> &ensp; calculator</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar"></i> &ensp; calendar</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-check-o"></i> &ensp; calendar-check-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-minus-o"></i> &ensp; calendar-minus-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> &ensp; calendar-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-plus-o"></i> &ensp; calendar-plus-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-times-o"></i> &ensp; calendar-times-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-camera"></i> &ensp; camera</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> &ensp; camera-retro</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-car"></i> &ensp; car</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i>
                      fa-caret-square-o-down
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i>
                      fa-caret-square-o-left
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i>
                      fa-caret-square-o-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> &ensp; caret-square-o-up
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cart-arrow-down"></i> &ensp; cart-arrow-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cart-plus"></i> &ensp; cart-plus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc"></i> &ensp; cc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-certificate"></i> &ensp; certificate</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check"></i> &ensp; check</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> &ensp; check-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> &ensp; check-circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> &ensp; check-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> &ensp; check-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-child"></i> &ensp; child</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> &ensp; circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> &ensp; circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> &ensp; circle-o-notch</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle-thin"></i> &ensp; circle-thin</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> &ensp; clock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-clone"></i> &ensp; clone</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-close"></i> &ensp; close <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cloud"></i> &ensp; cloud</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> &ensp; cloud-download</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> &ensp; cloud-upload</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-code"></i> &ensp; code</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> &ensp; code-fork</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-coffee"></i> &ensp; coffee</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> &ensp; cog</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cogs"></i> &ensp; cogs</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-comment"></i> &ensp; comment</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> &ensp; comment-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-commenting"></i> &ensp; commenting</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-commenting-o"></i> &ensp; commenting-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-comments"></i> &ensp; comments</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> &ensp; comments-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-compass"></i> &ensp; compass</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-copyright"></i> &ensp; copyright</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-creative-commons"></i> &ensp; creative-commons
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> &ensp; credit-card</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-crop"></i> &ensp; crop</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> &ensp; crosshairs</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cube"></i> &ensp; cube</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cubes"></i> &ensp; cubes</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> &ensp; cutlery</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> &ensp; dashboard
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-database"></i> &ensp; database</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-desktop"></i> &ensp; desktop</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-diamond"></i> &ensp; diamond</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> &ensp; dot-circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-download"></i> &ensp; download</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> &ensp; edit <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> &ensp; ellipsis-h</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> &ensp; ellipsis-v</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-envelope"></i> &ensp; envelope</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> &ensp; envelope-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-square"></i> &ensp; envelope-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> &ensp; eraser</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> &ensp; exchange</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> &ensp; exclamation</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> &ensp; exclamation-circle
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i>
                      fa-exclamation-triangle
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-external-link"></i> &ensp; external-link</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i>
                      fa-external-link-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eye"></i> &ensp; eye</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> &ensp; eye-slash</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eyedropper"></i> &ensp; eyedropper</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fax"></i> &ensp; fax</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-feed"></i> &ensp; feed <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-female"></i> &ensp; female</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> &ensp; fighter-jet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> &ensp; file-archive-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> &ensp; file-audio-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> &ensp; file-code-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> &ensp; file-excel-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> &ensp; file-image-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> &ensp; file-movie-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> &ensp; file-pdf-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> &ensp; file-photo-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> &ensp; file-picture-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> &ensp; file-powerpoint-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> &ensp; file-sound-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> &ensp; file-video-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> &ensp; file-word-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> &ensp; file-zip-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-film"></i> &ensp; film</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-filter"></i> &ensp; filter</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fire"></i> &ensp; fire</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> &ensp; fire-extinguisher
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-flag"></i> &ensp; flag</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> &ensp; flag-checkered</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> &ensp; flag-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-flash"></i> &ensp; flash <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-flask"></i> &ensp; flask</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-folder"></i> &ensp; folder</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> &ensp; folder-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> &ensp; folder-open</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> &ensp; folder-open-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> &ensp; frown-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-futbol-o"></i> &ensp; futbol-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> &ensp; gamepad</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gavel"></i> &ensp; gavel</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> &ensp; gear <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gears"></i> &ensp; gears <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gift"></i> &ensp; gift</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-glass"></i> &ensp; glass</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-globe"></i> &ensp; globe</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-graduation-cap"></i> &ensp; graduation-cap</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-group"></i> &ensp; group <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> &ensp; hand-grab-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> &ensp; hand-lizard-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> &ensp; hand-paper-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> &ensp; hand-peace-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> &ensp; hand-pointer-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> &ensp; hand-rock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> &ensp; hand-scissors-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> &ensp; hand-spock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> &ensp; hand-stop-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> &ensp; hdd-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-headphones"></i> &ensp; headphones</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> &ensp; heart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> &ensp; heart-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-heartbeat"></i> &ensp; heartbeat</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-history"></i> &ensp; history</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-home"></i> &ensp; home</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hotel"></i> &ensp; hotel <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass"></i> &ensp; hourglass</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-1"></i> &ensp; hourglass-1
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-2"></i> &ensp; hourglass-2
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-3"></i> &ensp; hourglass-3
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-end"></i> &ensp; hourglass-end</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-half"></i> &ensp; hourglass-half</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-o"></i> &ensp; hourglass-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-start"></i> &ensp; hourglass-start</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-i-cursor"></i> &ensp; i-cursor</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-image"></i> &ensp; image <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-inbox"></i> &ensp; inbox</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-industry"></i> &ensp; industry</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-info"></i> &ensp; info</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> &ensp; info-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-institution"></i> &ensp; institution
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-key"></i> &ensp; key</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> &ensp; keyboard-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-language"></i> &ensp; language</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-laptop"></i> &ensp; laptop</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-leaf"></i> &ensp; leaf</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-legal"></i> &ensp; legal <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> &ensp; lemon-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-level-down"></i> &ensp; level-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-level-up"></i> &ensp; level-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-life-bouy"></i> &ensp; life-bouy
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-life-buoy"></i> &ensp; life-buoy
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-life-ring"></i> &ensp; life-ring</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-life-saver"></i> &ensp; life-saver
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> &ensp; lightbulb-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> &ensp; line-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> &ensp; location-arrow</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-lock"></i> &ensp; lock</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-magic"></i> &ensp; magic</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-magnet"></i> &ensp; magnet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> &ensp; mail-forward
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> &ensp; mail-reply
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> &ensp; mail-reply-all
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-male"></i> &ensp; male</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map"></i> &ensp; map</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> &ensp; map-marker</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-o"></i> &ensp; map-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-pin"></i> &ensp; map-pin</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-map-signs"></i> &ensp; map-signs</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> &ensp; meh-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-microphone"></i> &ensp; microphone</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> &ensp; microphone-slash
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-minus"></i> &ensp; minus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> &ensp; minus-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> &ensp; minus-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> &ensp; minus-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mobile"></i> &ensp; mobile</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> &ensp; mobile-phone
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> &ensp; money</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> &ensp; moon-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mortar-board"></i> &ensp; mortar-board
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-motorcycle"></i> &ensp; motorcycle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mouse-pointer"></i> &ensp; mouse-pointer</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-music"></i> &ensp; music</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-navicon"></i> &ensp; navicon
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-newspaper-o"></i> &ensp; newspaper-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-object-group"></i> &ensp; object-group</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-object-ungroup"></i> &ensp; object-ungroup</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paint-brush"></i> &ensp; paint-brush</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane"></i> &ensp; paper-plane</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane-o"></i> &ensp; paper-plane-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paw"></i> &ensp; paw</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pencil"></i> &ensp; pencil</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> &ensp; pencil-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> &ensp; pencil-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-phone"></i> &ensp; phone</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> &ensp; phone-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-photo"></i> &ensp; photo <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> &ensp; picture-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> &ensp; pie-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> &ensp; plane</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plug"></i> &ensp; plug</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus"></i> &ensp; plus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> &ensp; plus-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> &ensp; plus-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> &ensp; plus-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-power-off"></i> &ensp; power-off</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-print"></i> &ensp; print</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> &ensp; puzzle-piece</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> &ensp; qrcode</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-question"></i> &ensp; question</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> &ensp; question-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> &ensp; quote-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> &ensp; quote-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> &ensp; random</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-recycle"></i> &ensp; recycle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> &ensp; refresh</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-registered"></i> &ensp; registered</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-remove"></i> &ensp; remove
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-reorder"></i> &ensp; reorder
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-reply"></i> &ensp; reply</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> &ensp; reply-all</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-retweet"></i> &ensp; retweet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-road"></i> &ensp; road</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> &ensp; rocket</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rss"></i> &ensp; rss</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> &ensp; rss-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-search"></i> &ensp; search</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> &ensp; search-minus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> &ensp; search-plus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-send"></i> &ensp; send <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-send-o"></i> &ensp; send-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-server"></i> &ensp; server</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share"></i> &ensp; share</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> &ensp; share-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> &ensp; share-alt-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share-square"></i> &ensp; share-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> &ensp; share-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-shield"></i> &ensp; shield</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ship"></i> &ensp; ship</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> &ensp; shopping-cart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> &ensp; sign-in</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> &ensp; sign-out</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-signal"></i> &ensp; signal</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> &ensp; sitemap</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sliders"></i> &ensp; sliders</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> &ensp; smile-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-soccer-ball-o"></i> &ensp; soccer-ball-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort"></i> &ensp; sort</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> &ensp; sort-alpha-asc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> &ensp; sort-alpha-desc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> &ensp; sort-amount-asc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> &ensp; sort-amount-desc
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> &ensp; sort-asc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> &ensp; sort-desc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> &ensp; sort-down
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> &ensp; sort-numeric-asc
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> &ensp; sort-numeric-desc
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> &ensp; sort-up
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> &ensp; space-shuttle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> &ensp; spinner</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-spoon"></i> &ensp; spoon</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> &ensp; square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> &ensp; square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-star"></i> &ensp; star</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-star-half"></i> &ensp; star-half</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> &ensp; star-half-empty
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> &ensp; star-half-full
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> &ensp; star-half-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-star-o"></i> &ensp; star-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sticky-note"></i> &ensp; sticky-note</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sticky-note-o"></i> &ensp; sticky-note-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-street-view"></i> &ensp; street-view</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> &ensp; suitcase</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> &ensp; sun-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-support"></i> &ensp; support
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tablet"></i> &ensp; tablet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> &ensp; tachometer</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tag"></i> &ensp; tag</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tags"></i> &ensp; tags</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tasks"></i> &ensp; tasks</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-taxi"></i> &ensp; taxi</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-television"></i> &ensp; television</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-terminal"></i> &ensp; terminal</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> &ensp; thumb-tack</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> &ensp; thumbs-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> &ensp; thumbs-o-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> &ensp; thumbs-o-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> &ensp; thumbs-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ticket"></i> &ensp; ticket</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-times"></i> &ensp; times</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> &ensp; times-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> &ensp; times-circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tint"></i> &ensp; tint</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> &ensp; toggle-down
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> &ensp; toggle-left
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-off"></i> &ensp; toggle-off</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-on"></i> &ensp; toggle-on</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> &ensp; toggle-right
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> &ensp; toggle-up
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-trademark"></i> &ensp; trademark</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-trash"></i> &ensp; trash</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> &ensp; trash-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tree"></i> &ensp; tree</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-trophy"></i> &ensp; trophy</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> &ensp; truck</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tty"></i> &ensp; tty</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tv"></i> &ensp; tv
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> &ensp; umbrella</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-university"></i> &ensp; university</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-unlock"></i> &ensp; unlock</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> &ensp; unlock-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> &ensp; unsorted
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-upload"></i> &ensp; upload</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-user"></i> &ensp; user</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-user-plus"></i> &ensp; user-plus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-user-secret"></i> &ensp; user-secret</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-user-times"></i> &ensp; user-times</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-users"></i> &ensp; users</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> &ensp; video-camera</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> &ensp; volume-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> &ensp; volume-off</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> &ensp; volume-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-warning"></i> &ensp; warning
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> &ensp; wheelchair</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wifi"></i> &ensp; wifi</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wrench"></i> &ensp; wrench</div>
                  </div>
                </section>

                <section id="hand">
                  <h5>Hand Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> &ensp; hand-grab-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> &ensp; hand-lizard-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> &ensp; hand-o-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> &ensp; hand-o-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> &ensp; hand-o-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> &ensp; hand-o-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> &ensp; hand-paper-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> &ensp; hand-peace-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> &ensp; hand-pointer-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> &ensp; hand-rock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> &ensp; hand-scissors-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> &ensp; hand-spock-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> &ensp; hand-stop-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> &ensp; thumbs-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> &ensp; thumbs-o-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> &ensp; thumbs-o-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> &ensp; thumbs-up</div>
                  </div>
                </section>

                <section id="transportation">
                  <h5>Transportation Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> &ensp; ambulance</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-automobile"></i> &ensp; automobile
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> &ensp; bicycle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bus"></i> &ensp; bus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cab"></i> &ensp; cab <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-car"></i> &ensp; car</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> &ensp; fighter-jet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-motorcycle"></i> &ensp; motorcycle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> &ensp; plane</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> &ensp; rocket</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ship"></i> &ensp; ship</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> &ensp; space-shuttle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-subway"></i> &ensp; subway</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-taxi"></i> &ensp; taxi</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-train"></i> &ensp; train</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> &ensp; truck</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> &ensp; wheelchair</div>
                  </div>
                </section>

                <section id="gender">
                  <h5>Gender Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-genderless"></i> &ensp; genderless</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-intersex"></i> &ensp; intersex
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mars"></i> &ensp; mars</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mars-double"></i> &ensp; mars-double</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mars-stroke"></i> &ensp; mars-stroke</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mars-stroke-h"></i> &ensp; mars-stroke-h</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mars-stroke-v"></i> &ensp; mars-stroke-v</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-mercury"></i> &ensp; mercury</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-neuter"></i> &ensp; neuter</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-transgender"></i> &ensp; transgender</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-transgender-alt"></i> &ensp; transgender-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-venus"></i> &ensp; venus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-venus-double"></i> &ensp; venus-double</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-venus-mars"></i> &ensp; venus-mars</div>
                  </div>
                </section>

                <section id="file-type">
                  <h2 class="page-header">File Type Icons</h2>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> &ensp; file</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> &ensp; file-archive-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> &ensp; file-audio-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> &ensp; file-code-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> &ensp; file-excel-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> &ensp; file-image-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> &ensp; file-movie-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> &ensp; file-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> &ensp; file-pdf-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> &ensp; file-photo-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> &ensp; file-picture-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> &ensp; file-powerpoint-o
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> &ensp; file-sound-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> &ensp; file-text</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> &ensp; file-text-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> &ensp; file-video-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> &ensp; file-word-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> &ensp; file-zip-o
                      <span class="text-muted"></span></div>
                  </div>
                </section>

                <section id="spinner">
                  <h2 class="page-header">Spinner Icons</h2>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> &ensp; circle-o-notch</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> &ensp; cog</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> &ensp; gear <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> &ensp; refresh</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> &ensp; spinner</div>
                  </div>
                </section>

                <section id="form-control">
                  <h5>Form Control Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> &ensp; check-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> &ensp; check-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> &ensp; circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> &ensp; circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> &ensp; dot-circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> &ensp; minus-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> &ensp; minus-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> &ensp; plus-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> &ensp; plus-square-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> &ensp; square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> &ensp; square-o</div>
                  </div>
                </section>

                <section id="payment">
                  <h5>Payment Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> &ensp; cc-amex</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> &ensp; cc-diners-club</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> &ensp; cc-discover</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> &ensp; cc-jcb</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> &ensp; cc-mastercard</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> &ensp; cc-paypal</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> &ensp; cc-stripe</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> &ensp; cc-visa</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> &ensp; credit-card</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> &ensp; google-wallet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> &ensp; paypal</div>
                  </div>
                </section>

                <section id="chart">
                  <h5>Chart Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> &ensp; area-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> &ensp; bar-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> &ensp; bar-chart-o
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> &ensp; line-chart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> &ensp; pie-chart</div>
                  </div>
                </section>

                <section id="currency">
                  <h5>Currency Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> &ensp; bitcoin
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> &ensp; btc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cny"></i> &ensp; cny <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dollar"></i> &ensp; dollar
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eur"></i> &ensp; eur</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-euro"></i> &ensp; euro <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gbp"></i> &ensp; gbp</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gg"></i> &ensp; gg</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> &ensp; gg-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ils"></i> &ensp; ils</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-inr"></i> &ensp; inr</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-jpy"></i> &ensp; jpy</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-krw"></i> &ensp; krw</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> &ensp; money</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rmb"></i> &ensp; rmb <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rouble"></i> &ensp; rouble
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rub"></i> &ensp; rub</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ruble"></i> &ensp; ruble <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rupee"></i> &ensp; rupee <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-shekel"></i> &ensp; shekel
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sheqel"></i> &ensp; sheqel
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-try"></i> &ensp; try</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> &ensp; turkish-lira
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-usd"></i> &ensp; usd</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-won"></i> &ensp; won <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-yen"></i> &ensp; yen <span class="text-muted"></span>
                    </div>
                  </div>
                </section>

                <section id="text-editor">
                  <h5>Text Editor Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-align-center"></i> &ensp; align-center</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> &ensp; align-justify</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-align-left"></i> &ensp; align-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-align-right"></i> &ensp; align-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bold"></i> &ensp; bold</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chain"></i> &ensp; chain <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> &ensp; chain-broken</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> &ensp; clipboard</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-columns"></i> &ensp; columns</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-copy"></i> &ensp; copy <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cut"></i> &ensp; cut <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dedent"></i> &ensp; dedent
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> &ensp; eraser</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> &ensp; file</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> &ensp; file-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> &ensp; file-text</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> &ensp; file-text-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-files-o"></i> &ensp; files-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> &ensp; floppy-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-font"></i> &ensp; font</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-header"></i> &ensp; header</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-indent"></i> &ensp; indent</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-italic"></i> &ensp; italic</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-link"></i> &ensp; link</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-list"></i> &ensp; list</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> &ensp; list-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> &ensp; list-ol</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> &ensp; list-ul</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-outdent"></i> &ensp; outdent</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> &ensp; paperclip</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paragraph"></i> &ensp; paragraph</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paste"></i> &ensp; paste <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-repeat"></i> &ensp; repeat</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> &ensp; rotate-left
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> &ensp; rotate-right
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-save"></i> &ensp; save <span class="text-muted"></span>
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-scissors"></i> &ensp; scissors</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> &ensp; strikethrough</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-subscript"></i> &ensp; subscript</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-superscript"></i> &ensp; superscript</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-table"></i> &ensp; table</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-text-height"></i> &ensp; text-height</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-text-width"></i> &ensp; text-width</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-th"></i> &ensp; th</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-th-large"></i> &ensp; th-large</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-th-list"></i> &ensp; th-list</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-underline"></i> &ensp; underline</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-undo"></i> &ensp; undo</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-unlink"></i> &ensp; unlink
                      <span class="text-muted"></span></div>
                  </div>
                </section>

                <section id="directional">
                  <h5>Directional Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> &ensp; angle-double-down
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> &ensp; angle-double-left
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> &ensp; angle-double-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> &ensp; angle-double-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> &ensp; angle-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> &ensp; angle-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> &ensp; angle-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> &ensp; angle-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> &ensp; arrow-circle-down
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> &ensp; arrow-circle-left
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i>
                      fa-arrow-circle-o-down
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i>
                      fa-arrow-circle-o-left
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i>
                      fa-arrow-circle-o-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> &ensp; arrow-circle-o-up
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> &ensp; arrow-circle-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> &ensp; arrow-circle-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> &ensp; arrow-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> &ensp; arrow-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> &ensp; arrow-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> &ensp; arrow-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> &ensp; arrows</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> &ensp; arrows-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> &ensp; arrows-h</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> &ensp; arrows-v</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> &ensp; caret-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> &ensp; caret-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> &ensp; caret-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i>
                      fa-caret-square-o-down
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i>
                      fa-caret-square-o-left
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i>
                      fa-caret-square-o-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> &ensp; caret-square-o-up
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> &ensp; caret-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i>
                      fa-chevron-circle-down
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i>
                      fa-chevron-circle-left
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i>
                      fa-chevron-circle-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> &ensp; chevron-circle-up
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> &ensp; chevron-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> &ensp; chevron-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> &ensp; chevron-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> &ensp; chevron-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> &ensp; exchange</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> &ensp; hand-o-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> &ensp; hand-o-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> &ensp; hand-o-right</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> &ensp; hand-o-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> &ensp; long-arrow-down</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> &ensp; long-arrow-left</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> &ensp; long-arrow-right
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> &ensp; long-arrow-up</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> &ensp; toggle-down
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> &ensp; toggle-left
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> &ensp; toggle-right
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> &ensp; toggle-up
                      <span class="text-muted"></span></div>
                  </div>
                </section>

                <section id="video-player">
                  <h5>Video Player Icons</h5>

                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> &ensp; arrows-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-backward"></i> &ensp; backward</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-compress"></i> &ensp; compress</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-eject"></i> &ensp; eject</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-expand"></i> &ensp; expand</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> &ensp; fast-backward</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> &ensp; fast-forward</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-forward"></i> &ensp; forward</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pause"></i> &ensp; pause</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-play"></i> &ensp; play</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> &ensp; play-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> &ensp; play-circle-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> &ensp; random</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> &ensp; step-backward</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> &ensp; step-forward</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-stop"></i> &ensp; stop</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> &ensp; youtube-play</div>
                  </div>
                </section>

                <section id="brand">
                  <h5>Brand Icons</h5>

                  <div class="alert alert-info">
                    <ul class="margin-bottom-none padding-left-lg">
                      <li>All brand icons are trademarks of their respective owners.</li>
                      <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font
                        Awesome, nor vice versa.
                      </li>
                    </ul>
                  </div>
                  <div class="row fontawesome-icon-list">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-500px"></i> &ensp; 500px</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-adn"></i> &ensp; adn</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-amazon"></i> &ensp; amazon</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-android"></i> &ensp; android</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-angellist"></i> &ensp; angellist</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-apple"></i> &ensp; apple</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-behance"></i> &ensp; behance</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-behance-square"></i> &ensp; behance-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> &ensp; bitbucket</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> &ensp; bitbucket-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> &ensp; bitcoin
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-black-tie"></i> &ensp; black-tie</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> &ensp; btc</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-buysellads"></i> &ensp; buysellads</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> &ensp; cc-amex</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> &ensp; cc-diners-club</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> &ensp; cc-discover</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> &ensp; cc-jcb</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> &ensp; cc-mastercard</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> &ensp; cc-paypal</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> &ensp; cc-stripe</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> &ensp; cc-visa</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-chrome"></i> &ensp; chrome</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-codepen"></i> &ensp; codepen</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-connectdevelop"></i> &ensp; connectdevelop</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-contao"></i> &ensp; contao</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-css3"></i> &ensp; css3</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dashcube"></i> &ensp; dashcube</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-delicious"></i> &ensp; delicious</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-deviantart"></i> &ensp; deviantart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-digg"></i> &ensp; digg</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> &ensp; dribbble</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> &ensp; dropbox</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-drupal"></i> &ensp; drupal</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-empire"></i> &ensp; empire</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-expeditedssl"></i> &ensp; expeditedssl</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-facebook"></i> &ensp; facebook</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-f"></i> &ensp; facebook-f
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-official"></i> &ensp; facebook-official
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> &ensp; facebook-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-firefox"></i> &ensp; firefox</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-flickr"></i> &ensp; flickr</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-fonticons"></i> &ensp; fonticons</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-forumbee"></i> &ensp; forumbee</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> &ensp; foursquare</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ge"></i> &ensp; ge
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-get-pocket"></i> &ensp; get-pocket</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gg"></i> &ensp; gg</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> &ensp; gg-circle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-git"></i> &ensp; git</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-git-square"></i> &ensp; git-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-github"></i> &ensp; github</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> &ensp; github-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-github-square"></i> &ensp; github-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gittip"></i> &ensp; gittip
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-google"></i> &ensp; google</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> &ensp; google-plus</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> &ensp; google-plus-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> &ensp; google-wallet</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-gratipay"></i> &ensp; gratipay</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hacker-news"></i> &ensp; hacker-news</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-houzz"></i> &ensp; houzz</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-html5"></i> &ensp; html5</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> &ensp; instagram</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-internet-explorer"></i> &ensp; internet-explorer
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ioxhost"></i> &ensp; ioxhost</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-joomla"></i> &ensp; joomla</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-jsfiddle"></i> &ensp; jsfiddle</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-lastfm"></i> &ensp; lastfm</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-lastfm-square"></i> &ensp; lastfm-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-leanpub"></i> &ensp; leanpub</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> &ensp; linkedin</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> &ensp; linkedin-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-linux"></i> &ensp; linux</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> &ensp; maxcdn</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-meanpath"></i> &ensp; meanpath</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-medium"></i> &ensp; medium</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-odnoklassniki"></i> &ensp; odnoklassniki</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-odnoklassniki-square"></i>
                      fa-odnoklassniki-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-opencart"></i> &ensp; opencart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-openid"></i> &ensp; openid</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-opera"></i> &ensp; opera</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-optin-monster"></i> &ensp; optin-monster</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> &ensp; pagelines</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> &ensp; paypal</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> &ensp; pied-piper</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper-alt"></i> &ensp; pied-piper-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> &ensp; pinterest</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-p"></i> &ensp; pinterest-p</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> &ensp; pinterest-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-qq"></i> &ensp; qq</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ra"></i> &ensp; ra
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-rebel"></i> &ensp; rebel</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-reddit"></i> &ensp; reddit</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-reddit-square"></i> &ensp; reddit-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-renren"></i> &ensp; renren</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-safari"></i> &ensp; safari</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-sellsy"></i> &ensp; sellsy</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> &ensp; share-alt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> &ensp; share-alt-square
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-shirtsinbulk"></i> &ensp; shirtsinbulk</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-simplybuilt"></i> &ensp; simplybuilt</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-skyatlas"></i> &ensp; skyatlas</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-skype"></i> &ensp; skype</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-slack"></i> &ensp; slack</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-slideshare"></i> &ensp; slideshare</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-soundcloud"></i> &ensp; soundcloud</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-spotify"></i> &ensp; spotify</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> &ensp; stack-exchange</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> &ensp; stack-overflow</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-steam"></i> &ensp; steam</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-steam-square"></i> &ensp; steam-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon"></i> &ensp; stumbleupon</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon-circle"></i> &ensp; stumbleupon-circle
                    </div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tencent-weibo"></i> &ensp; tencent-weibo</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-trello"></i> &ensp; trello</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tripadvisor"></i> &ensp; tripadvisor</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> &ensp; tumblr</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> &ensp; tumblr-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-twitch"></i> &ensp; twitch</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-twitter"></i> &ensp; twitter</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> &ensp; twitter-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-viacoin"></i> &ensp; viacoin</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo"></i> &ensp; vimeo</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> &ensp; vimeo-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-vine"></i> &ensp; vine</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-vk"></i> &ensp; vk</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wechat"></i> &ensp; wechat
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-weibo"></i> &ensp; weibo</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-weixin"></i> &ensp; weixin</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-whatsapp"></i> &ensp; whatsapp</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wikipedia-w"></i> &ensp; wikipedia-w</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-windows"></i> &ensp; windows</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wordpress"></i> &ensp; wordpress</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-xing"></i> &ensp; xing</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> &ensp; xing-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-y-combinator"></i> &ensp; y-combinator</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-y-combinator-square"></i>
                      fa-y-combinator-square <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-yahoo"></i> &ensp; yahoo</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-yc"></i> &ensp; yc
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-yc-square"></i> &ensp; yc-square
                      <span class="text-muted"></span></div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-yelp"></i> &ensp; yelp</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-youtube"></i> &ensp; youtube</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> &ensp; youtube-play</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> &ensp; youtube-square</div>
                  </div>
                </section>

                <section id="medical">
                  <h5>Medical Icons</h5>

                  <div class="row">
                    <div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> &ensp; ambulance</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-h-square"></i> &ensp; h-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> &ensp; heart</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> &ensp; heart-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-heartbeat"></i> &ensp; heartbeat</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> &ensp; hospital-o</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-medkit"></i> &ensp; medkit</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> &ensp; plus-square</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> &ensp; stethoscope</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-user-md"></i> &ensp; user-md</div>
                    <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> &ensp; wheelchair</div>
                  </div>
                </section>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>
  <div id="modalcolors" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Salin Kode Warna</h4>
      <p>Tempel pada field Warna</p>
      <div class="row">
            <div class="dynamic-color">
              <div class="col s12 m6 l4">
                <div class="red lighten-5">#ffebee red lighten-5</div>
                <div class="red lighten-4">#ffcdd2 red lighten-4</div>
                <div class="red lighten-3">#ef9a9a red lighten-3</div>
                <div class="red lighten-2">#e57373 red lighten-2</div>
                <div class="red lighten-1">#ef5350 red lighten-1</div>
                <div class="red">#f44336 red</div>
                <div class="red darken-1" style="color: rgba(255, 255, 255, 0.901961);">#e53935 red darken-1</div>
                <div class="red darken-2" style="color: rgba(255, 255, 255, 0.901961);">#d32f2f red darken-2</div>
                <div class="red darken-3" style="color: rgba(255, 255, 255, 0.901961);">#c62828 red darken-3</div>
                <div class="red darken-4" style="color: rgba(255, 255, 255, 0.901961);">#b71c1c red darken-4</div>
                <div class="red accent-1">#ff8a80 red accent-1</div>
                <div class="red accent-2">#ff5252 red accent-2</div>
                <div class="red accent-3">#ff1744 red accent-3</div>
                <div class="red accent-4">#d50000 red accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="pink lighten-5">#fce4ec pink lighten-5</div>
                <div class="pink lighten-4">#f8bbd0 pink lighten-4</div>
                <div class="pink lighten-3">#f48fb1 pink lighten-3</div>
                <div class="pink lighten-2">#f06292 pink lighten-2</div>
                <div class="pink lighten-1">#ec407a pink lighten-1</div>
                <div class="pink">#e91e63 pink</div>
                <div class="pink darken-1" style="color: rgba(255, 255, 255, 0.901961);">#d81b60 pink darken-1</div>
                <div class="pink darken-2" style="color: rgba(255, 255, 255, 0.901961);">#c2185b pink darken-2</div>
                <div class="pink darken-3" style="color: rgba(255, 255, 255, 0.901961);">#ad1457 pink darken-3</div>
                <div class="pink darken-4" style="color: rgba(255, 255, 255, 0.901961);">#880e4f pink darken-4</div>
                <div class="pink accent-1">#ff80ab pink accent-1</div>
                <div class="pink accent-2">#ff4081 pink accent-2</div>
                <div class="pink accent-3">#f50057 pink accent-3</div>
                <div class="pink accent-4">#c51162 pink accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="purple lighten-5">#f3e5f5 purple lighten-5</div>
                <div class="purple lighten-4">#e1bee7 purple lighten-4</div>
                <div class="purple lighten-3">#ce93d8 purple lighten-3</div>
                <div class="purple lighten-2">#ba68c8 purple lighten-2</div>
                <div class="purple lighten-1">#ab47bc purple lighten-1</div>
                <div class="purple">#9c27b0 purple</div>
                <div class="purple darken-1" style="color: rgba(255, 255, 255, 0.901961);">#8e24aa purple darken-1</div>
                <div class="purple darken-2" style="color: rgba(255, 255, 255, 0.901961);">#7b1fa2 purple darken-2</div>
                <div class="purple darken-3" style="color: rgba(255, 255, 255, 0.901961);">#6a1b9a purple darken-3</div>
                <div class="purple darken-4" style="color: rgba(255, 255, 255, 0.901961);">#4a148c purple darken-4</div>
                <div class="purple accent-1">#ea80fc purple accent-1</div>
                <div class="purple accent-2">#e040fb purple accent-2</div>
                <div class="purple accent-3">#d500f9 purple accent-3</div>
                <div class="purple accent-4">#aa00ff purple accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="deep-purple lighten-5">#ede7f6 deep-purple lighten-5</div>
                <div class="deep-purple lighten-4">#d1c4e9 deep-purple lighten-4</div>
                <div class="deep-purple lighten-3">#b39ddb deep-purple lighten-3</div>
                <div class="deep-purple lighten-2">#9575cd deep-purple lighten-2</div>
                <div class="deep-purple lighten-1">#7e57c2 deep-purple lighten-1</div>
                <div class="deep-purple">#673ab7 deep-purple</div>
                <div class="deep-purple darken-1" style="color: rgba(255, 255, 255, 0.901961);">#5e35b1 deep-purple
                  darken-1</div>
                <div class="deep-purple darken-2" style="color: rgba(255, 255, 255, 0.901961);">#512da8 deep-purple
                  darken-2</div>
                <div class="deep-purple darken-3" style="color: rgba(255, 255, 255, 0.901961);">#4527a0 deep-purple
                  darken-3</div>
                <div class="deep-purple darken-4" style="color: rgba(255, 255, 255, 0.901961);">#311b92 deep-purple
                  darken-4</div>
                <div class="deep-purple accent-1">#b388ff deep-purple accent-1</div>
                <div class="deep-purple accent-2">#7c4dff deep-purple accent-2</div>
                <div class="deep-purple accent-3">#651fff deep-purple accent-3</div>
                <div class="deep-purple accent-4">#6200ea deep-purple accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="indigo lighten-5">#e8eaf6 indigo lighten-5</div>
                <div class="indigo lighten-4">#c5cae9 indigo lighten-4</div>
                <div class="indigo lighten-3">#9fa8da indigo lighten-3</div>
                <div class="indigo lighten-2">#7986cb indigo lighten-2</div>
                <div class="indigo lighten-1">#5c6bc0 indigo lighten-1</div>
                <div class="indigo">#3f51b5 indigo</div>
                <div class="indigo darken-1" style="color: rgba(255, 255, 255, 0.901961);">#3949ab indigo darken-1</div>
                <div class="indigo darken-2" style="color: rgba(255, 255, 255, 0.901961);">#303f9f indigo darken-2</div>
                <div class="indigo darken-3" style="color: rgba(255, 255, 255, 0.901961);">#283593 indigo darken-3</div>
                <div class="indigo darken-4" style="color: rgba(255, 255, 255, 0.901961);">#1a237e indigo darken-4</div>
                <div class="indigo accent-1">#8c9eff indigo accent-1</div>
                <div class="indigo accent-2">#536dfe indigo accent-2</div>
                <div class="indigo accent-3">#3d5afe indigo accent-3</div>
                <div class="indigo accent-4">#304ffe indigo accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="blue lighten-5">#e3f2fd blue lighten-5</div>
                <div class="blue lighten-4">#bbdefb blue lighten-4</div>
                <div class="blue lighten-3">#90caf9 blue lighten-3</div>
                <div class="blue lighten-2">#64b5f6 blue lighten-2</div>
                <div class="blue lighten-1">#42a5f5 blue lighten-1</div>
                <div class="blue">#2196f3 blue</div>
                <div class="blue darken-1" style="color: rgba(255, 255, 255, 0.901961);">#1e88e5 blue darken-1</div>
                <div class="blue darken-2" style="color: rgba(255, 255, 255, 0.901961);">#1976d2 blue darken-2</div>
                <div class="blue darken-3" style="color: rgba(255, 255, 255, 0.901961);">#1565c0 blue darken-3</div>
                <div class="blue darken-4" style="color: rgba(255, 255, 255, 0.901961);">#0d47a1 blue darken-4</div>
                <div class="blue accent-1">#82b1ff blue accent-1</div>
                <div class="blue accent-2">#448aff blue accent-2</div>
                <div class="blue accent-3">#2979ff blue accent-3</div>
                <div class="blue accent-4">#2962ff blue accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="light-blue lighten-5">#e1f5fe light-blue lighten-5</div>
                <div class="light-blue lighten-4">#b3e5fc light-blue lighten-4</div>
                <div class="light-blue lighten-3">#81d4fa light-blue lighten-3</div>
                <div class="light-blue lighten-2">#4fc3f7 light-blue lighten-2</div>
                <div class="light-blue lighten-1">#29b6f6 light-blue lighten-1</div>
                <div class="light-blue">#03a9f4 light-blue</div>
                <div class="light-blue darken-1" style="color: rgba(255, 255, 255, 0.901961);">#039be5 light-blue
                  darken-1</div>
                <div class="light-blue darken-2" style="color: rgba(255, 255, 255, 0.901961);">#0288d1 light-blue
                  darken-2</div>
                <div class="light-blue darken-3" style="color: rgba(255, 255, 255, 0.901961);">#0277bd light-blue
                  darken-3</div>
                <div class="light-blue darken-4" style="color: rgba(255, 255, 255, 0.901961);">#01579b light-blue
                  darken-4</div>
                <div class="light-blue accent-1">#80d8ff light-blue accent-1</div>
                <div class="light-blue accent-2">#40c4ff light-blue accent-2</div>
                <div class="light-blue accent-3">#00b0ff light-blue accent-3</div>
                <div class="light-blue accent-4">#0091ea light-blue accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="cyan lighten-5">#e0f7fa cyan lighten-5</div>
                <div class="cyan lighten-4">#b2ebf2 cyan lighten-4</div>
                <div class="cyan lighten-3">#80deea cyan lighten-3</div>
                <div class="cyan lighten-2">#4dd0e1 cyan lighten-2</div>
                <div class="cyan lighten-1">#26c6da cyan lighten-1</div>
                <div class="cyan">#00bcd4 cyan</div>
                <div class="cyan darken-1" style="color: rgba(255, 255, 255, 0.901961);">#00acc1 cyan darken-1</div>
                <div class="cyan darken-2" style="color: rgba(255, 255, 255, 0.901961);">#0097a7 cyan darken-2</div>
                <div class="cyan darken-3" style="color: rgba(255, 255, 255, 0.901961);">#00838f cyan darken-3</div>
                <div class="cyan darken-4" style="color: rgba(255, 255, 255, 0.901961);">#006064 cyan darken-4</div>
                <div class="cyan accent-1">#84ffff cyan accent-1</div>
                <div class="cyan accent-2">#18ffff cyan accent-2</div>
                <div class="cyan accent-3">#00e5ff cyan accent-3</div>
                <div class="cyan accent-4">#00b8d4 cyan accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="teal lighten-5">#e0f2f1 teal lighten-5</div>
                <div class="teal lighten-4">#b2dfdb teal lighten-4</div>
                <div class="teal lighten-3">#80cbc4 teal lighten-3</div>
                <div class="teal lighten-2">#4db6ac teal lighten-2</div>
                <div class="teal lighten-1">#26a69a teal lighten-1</div>
                <div class="teal">#009688 teal</div>
                <div class="teal darken-1" style="color: rgba(255, 255, 255, 0.901961);">#00897b teal darken-1</div>
                <div class="teal darken-2" style="color: rgba(255, 255, 255, 0.901961);">#00796b teal darken-2</div>
                <div class="teal darken-3" style="color: rgba(255, 255, 255, 0.901961);">#00695c teal darken-3</div>
                <div class="teal darken-4" style="color: rgba(255, 255, 255, 0.901961);">#004d40 teal darken-4</div>
                <div class="teal accent-1">#a7ffeb teal accent-1</div>
                <div class="teal accent-2">#64ffda teal accent-2</div>
                <div class="teal accent-3">#1de9b6 teal accent-3</div>
                <div class="teal accent-4">#00bfa5 teal accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="green lighten-5">#e8f5e9 green lighten-5</div>
                <div class="green lighten-4">#c8e6c9 green lighten-4</div>
                <div class="green lighten-3">#a5d6a7 green lighten-3</div>
                <div class="green lighten-2">#81c784 green lighten-2</div>
                <div class="green lighten-1">#66bb6a green lighten-1</div>
                <div class="green">#4caf50 green</div>
                <div class="green darken-1" style="color: rgba(255, 255, 255, 0.901961);">#43a047 green darken-1</div>
                <div class="green darken-2" style="color: rgba(255, 255, 255, 0.901961);">#388e3c green darken-2</div>
                <div class="green darken-3" style="color: rgba(255, 255, 255, 0.901961);">#2e7d32 green darken-3</div>
                <div class="green darken-4" style="color: rgba(255, 255, 255, 0.901961);">#1b5e20 green darken-4</div>
                <div class="green accent-1">#b9f6ca green accent-1</div>
                <div class="green accent-2">#69f0ae green accent-2</div>
                <div class="green accent-3">#00e676 green accent-3</div>
                <div class="green accent-4">#00c853 green accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="light-green lighten-5">#f1f8e9 light-green lighten-5</div>
                <div class="light-green lighten-4">#dcedc8 light-green lighten-4</div>
                <div class="light-green lighten-3">#c5e1a5 light-green lighten-3</div>
                <div class="light-green lighten-2">#aed581 light-green lighten-2</div>
                <div class="light-green lighten-1">#9ccc65 light-green lighten-1</div>
                <div class="light-green">#8bc34a light-green</div>
                <div class="light-green darken-1" style="color: rgba(255, 255, 255, 0.901961);">#7cb342 light-green
                  darken-1</div>
                <div class="light-green darken-2" style="color: rgba(255, 255, 255, 0.901961);">#689f38 light-green
                  darken-2</div>
                <div class="light-green darken-3" style="color: rgba(255, 255, 255, 0.901961);">#558b2f light-green
                  darken-3</div>
                <div class="light-green darken-4" style="color: rgba(255, 255, 255, 0.901961);">#33691e light-green
                  darken-4</div>
                <div class="light-green accent-1">#ccff90 light-green accent-1</div>
                <div class="light-green accent-2">#b2ff59 light-green accent-2</div>
                <div class="light-green accent-3">#76ff03 light-green accent-3</div>
                <div class="light-green accent-4">#64dd17 light-green accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="lime lighten-5">#f9fbe7 lime lighten-5</div>
                <div class="lime lighten-4">#f0f4c3 lime lighten-4</div>
                <div class="lime lighten-3">#e6ee9c lime lighten-3</div>
                <div class="lime lighten-2">#dce775 lime lighten-2</div>
                <div class="lime lighten-1">#d4e157 lime lighten-1</div>
                <div class="lime">#cddc39 lime</div>
                <div class="lime darken-1" style="color: rgba(255, 255, 255, 0.901961);">#c0ca33 lime darken-1</div>
                <div class="lime darken-2" style="color: rgba(255, 255, 255, 0.901961);">#afb42b lime darken-2</div>
                <div class="lime darken-3" style="color: rgba(255, 255, 255, 0.901961);">#9e9d24 lime darken-3</div>
                <div class="lime darken-4" style="color: rgba(255, 255, 255, 0.901961);">#827717 lime darken-4</div>
                <div class="lime accent-1">#f4ff81 lime accent-1</div>
                <div class="lime accent-2">#eeff41 lime accent-2</div>
                <div class="lime accent-3">#c6ff00 lime accent-3</div>
                <div class="lime accent-4">#aeea00 lime accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="yellow lighten-5">#fffde7 yellow lighten-5</div>
                <div class="yellow lighten-4">#fff9c4 yellow lighten-4</div>
                <div class="yellow lighten-3">#fff59d yellow lighten-3</div>
                <div class="yellow lighten-2">#fff176 yellow lighten-2</div>
                <div class="yellow lighten-1">#ffee58 yellow lighten-1</div>
                <div class="yellow">#ffeb3b yellow</div>
                <div class="yellow darken-1" style="color: rgba(255, 255, 255, 0.901961);">#fdd835 yellow darken-1</div>
                <div class="yellow darken-2" style="color: rgba(255, 255, 255, 0.901961);">#fbc02d yellow darken-2</div>
                <div class="yellow darken-3" style="color: rgba(255, 255, 255, 0.901961);">#f9a825 yellow darken-3</div>
                <div class="yellow darken-4" style="color: rgba(255, 255, 255, 0.901961);">#f57f17 yellow darken-4</div>
                <div class="yellow accent-1">#ffff8d yellow accent-1</div>
                <div class="yellow accent-2">#ffff00 yellow accent-2</div>
                <div class="yellow accent-3">#ffea00 yellow accent-3</div>
                <div class="yellow accent-4">#ffd600 yellow accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="amber lighten-5">#fff8e1 amber lighten-5</div>
                <div class="amber lighten-4">#ffecb3 amber lighten-4</div>
                <div class="amber lighten-3">#ffe082 amber lighten-3</div>
                <div class="amber lighten-2">#ffd54f amber lighten-2</div>
                <div class="amber lighten-1">#ffca28 amber lighten-1</div>
                <div class="amber">#ffc107 amber</div>
                <div class="amber darken-1" style="color: rgba(255, 255, 255, 0.901961);">#ffb300 amber darken-1</div>
                <div class="amber darken-2" style="color: rgba(255, 255, 255, 0.901961);">#ffa000 amber darken-2</div>
                <div class="amber darken-3" style="color: rgba(255, 255, 255, 0.901961);">#ff8f00 amber darken-3</div>
                <div class="amber darken-4" style="color: rgba(255, 255, 255, 0.901961);">#ff6f00 amber darken-4</div>
                <div class="amber accent-1">#ffe57f amber accent-1</div>
                <div class="amber accent-2">#ffd740 amber accent-2</div>
                <div class="amber accent-3">#ffc400 amber accent-3</div>
                <div class="amber accent-4">#ffab00 amber accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="orange lighten-5">#fff3e0 orange lighten-5</div>
                <div class="orange lighten-4">#ffe0b2 orange lighten-4</div>
                <div class="orange lighten-3">#ffcc80 orange lighten-3</div>
                <div class="orange lighten-2">#ffb74d orange lighten-2</div>
                <div class="orange lighten-1">#ffa726 orange lighten-1</div>
                <div class="orange">#ff9800 orange</div>
                <div class="orange darken-1" style="color: rgba(255, 255, 255, 0.901961);">#fb8c00 orange darken-1</div>
                <div class="orange darken-2" style="color: rgba(255, 255, 255, 0.901961);">#f57c00 orange darken-2</div>
                <div class="orange darken-3" style="color: rgba(255, 255, 255, 0.901961);">#ef6c00 orange darken-3</div>
                <div class="orange darken-4" style="color: rgba(255, 255, 255, 0.901961);">#e65100 orange darken-4</div>
                <div class="orange accent-1">#ffd180 orange accent-1</div>
                <div class="orange accent-2">#ffab40 orange accent-2</div>
                <div class="orange accent-3">#ff9100 orange accent-3</div>
                <div class="orange accent-4">#ff6d00 orange accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="deep-orange lighten-5">#fbe9e7 deep-orange lighten-5</div>
                <div class="deep-orange lighten-4">#ffccbc deep-orange lighten-4</div>
                <div class="deep-orange lighten-3">#ffab91 deep-orange lighten-3</div>
                <div class="deep-orange lighten-2">#ff8a65 deep-orange lighten-2</div>
                <div class="deep-orange lighten-1">#ff7043 deep-orange lighten-1</div>
                <div class="deep-orange">#ff5722 deep-orange</div>
                <div class="deep-orange darken-1" style="color: rgba(255, 255, 255, 0.901961);">#f4511e deep-orange
                  darken-1</div>
                <div class="deep-orange darken-2" style="color: rgba(255, 255, 255, 0.901961);">#e64a19 deep-orange
                  darken-2</div>
                <div class="deep-orange darken-3" style="color: rgba(255, 255, 255, 0.901961);">#d84315 deep-orange
                  darken-3</div>
                <div class="deep-orange darken-4" style="color: rgba(255, 255, 255, 0.901961);">#bf360c deep-orange
                  darken-4</div>
                <div class="deep-orange accent-1">#ff9e80 deep-orange accent-1</div>
                <div class="deep-orange accent-2">#ff6e40 deep-orange accent-2</div>
                <div class="deep-orange accent-3">#ff3d00 deep-orange accent-3</div>
                <div class="deep-orange accent-4">#dd2c00 deep-orange accent-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="brown lighten-5">#efebe9 brown lighten-5</div>
                <div class="brown lighten-4">#d7ccc8 brown lighten-4</div>
                <div class="brown lighten-3">#bcaaa4 brown lighten-3</div>
                <div class="brown lighten-2">#a1887f brown lighten-2</div>
                <div class="brown lighten-1">#8d6e63 brown lighten-1</div>
                <div class="brown">#795548 brown</div>
                <div class="brown darken-1" style="color: rgba(255, 255, 255, 0.901961);">#6d4c41 brown darken-1</div>
                <div class="brown darken-2" style="color: rgba(255, 255, 255, 0.901961);">#5d4037 brown darken-2</div>
                <div class="brown darken-3" style="color: rgba(255, 255, 255, 0.901961);">#4e342e brown darken-3</div>
                <div class="brown darken-4" style="color: rgba(255, 255, 255, 0.901961);">#3e2723 brown darken-4</div>
              </div>
              <div class="col s12 m6 l4">
                <div class="grey lighten-5">#fafafa grey lighten-5</div>
                <div class="grey lighten-4">#f5f5f5 grey lighten-4</div>
                <div class="grey lighten-3">#eeeeee grey lighten-3</div>
                <div class="grey lighten-2">#e0e0e0 grey lighten-2</div>
                <div class="grey lighten-1">#bdbdbd grey lighten-1</div>
                <div class="grey">#9e9e9e grey</div>
                <div class="grey darken-1" style="color: rgba(255, 255, 255, 0.901961);">#757575 grey darken-1</div>
                <div class="grey darken-2" style="color: rgba(255, 255, 255, 0.901961);">#616161 grey darken-2</div>
                <div class="grey darken-3" style="color: rgba(255, 255, 255, 0.901961);">#424242 grey darken-3</div>
                <div class="grey darken-4" style="color: rgba(255, 255, 255, 0.901961);">#212121 grey darken-4</div>
              </div>
            </div>
          </div>  
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>
@endsection