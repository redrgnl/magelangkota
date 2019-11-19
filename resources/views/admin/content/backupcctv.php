<div class="col s4 m4 l4 animate fadeRight">
                <div class="card">
                  <div class="card-content">
                <ul class="navbar-list right">               
                  <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown-{{ $s->idCctv }}"><i class="material-icons float-right">more_vert</i></a>
                  </li>
                </ul>

           <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown-{{ $s->idCctv }}">
              <li><a class="grey-text text-darken-1 modal-trigger" href="#modaldelete{{ $s->idCctv }}">Delete</a></li>
              <li><a class="grey-text text-darken-1" href="/admin/edit-data-cctv/{{ $s->idCctv }}">Edit</a></li>
            </ul>

<!--   <video id='my-video' class='video-js' controls preload='auto' width='240' height='144'
  poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
    <source src='{{$s->urlCctv}}' type='video/mp4'>
    <source src='{{$s->urlCctv}}' type='video/webm'>
    <p class='vjs-no-js'>
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
    </p>
  </video> -->
      <div id="playerBandara{{ $s->idCctv }}" style="width:240;height:144;">Loading the player...</div>
    
    <script>
            // Setup the player
            const playerBandara{{ $s->idCctv }} = jwplayer("playerBandara{{ $s->idCctv }}").setup({
                sources: [{file: "{{$s->urlCctv}}", 
                        }],
                image: "http://mam.jogjaprov.go.id/cctv-thumbs/ViewBreksi.stream.png",
                width: "100%",
                aspectratio: "16:9",
                rtmp: {
                    bufferlength: 3
                },
                fallback: false
            });
        </script>
                    <br>
                    <h8>{{ $s->namaCctv }}</h8>
                  </div>
                </div>
              </div>
                      <!-- Modal Icons -->
                      <div id="modaldelete{{ $s->idCctv }}" class="modal">
                        <div class="modal-content">
                          <h5>Apakah Anda Yakin Untuk Menghapus Data Ini?</h5>
                          <hr>
                          <h4 class="mt-5"> &ensp; {{ $s->namaCctv }}</h4>
                          <h6> &ensp; Data Ini Tidak Dapat Dikembalikan Setelah Proses Hapus, Apakah Anda Yakin?</h6>
                        </div>
                        <div class="modal-footer">
                          <a href="/admin/delete-cctv/{{ $s->idCctv }}" class="modal-action modal-close waves-effect waves-light red accent-2 btn-flat" style="color: white">Delete</a>
                        </div>
                      </div>