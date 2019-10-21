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
                  <h4 class="card-title">Tambah Sektor Baru</h4>
                </div>
              </div>
            </div>
            <div id="view-validations">
              <form class="formValidate" id="formValidate" action="/admin/store-sektor" method="post">
                @csrf
                <div class="row">
                  <div class="input-field col s12">
                    <label for="sektor">Nama Sektor*</label>
                    <input id="sektor" name="sektor" type="text" data-error=".errorTxt1" required>
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
                      <input id="iconsektor" name="iconsektor" type="text" data-error=".errorTxt2" required>
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
                      <input id="warnasektor" name="warnasektor" type="text" data-error=".errorTxt2" required placeholder="Contoh #ffebee">
                      <div class="errorTxt2"></div>
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
  </div>
  
  <!-- Modal Icons -->
  <div id="modalicons" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Salin Nama Icon</h4>
      <p>Tempel pada field Nama Icon</p>
      <div class="row">
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">3d_rotation</i>&ensp;<span>3d_rotation</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">ac_unit</i>&ensp;<span>ac_unit</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">access_alarm</i>&ensp;<span>access_alarm</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">access_alarms</i>&ensp;<span>access_alarms</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">access_time</i>&ensp;<span>access_time</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">accessibility</i>&ensp;<span>accessibility</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">accessible</i>&ensp;<span>accessible</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">account_balance</i>&ensp;<span>account_balance</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">account_balance_wallet</i>&ensp;<span>account_balance_wallet</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">account_box</i>&ensp;<span>account_box</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">account_circle</i>&ensp;<span>account_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">adb</i>&ensp;<span>adb</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add</i>&ensp;<span>add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_a_photo</i>&ensp;<span>add_a_photo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_alarm</i>&ensp;<span>add_alarm</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_alert</i>&ensp;<span>add_alert</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_box</i>&ensp;<span>add_box</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_circle</i>&ensp;<span>add_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_circle_outline</i>&ensp;<span>add_circle_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_location</i>&ensp;<span>add_location</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_shopping_cart</i>&ensp;<span>add_shopping_cart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_to_photos</i>&ensp;<span>add_to_photos</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">add_to_queue</i>&ensp;<span>add_to_queue</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">adjust</i>&ensp;<span>adjust</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_flat</i>&ensp;<span>airline_seat_flat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_flat_angled</i>&ensp;<span>airline_seat_flat_angled</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_individual_suite</i>&ensp;<span>airline_seat_individual_suite</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_legroom_extra</i>&ensp;<span>airline_seat_legroom_extra</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_legroom_normal</i>&ensp;<span>airline_seat_legroom_normal</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_legroom_reduced</i>&ensp;<span>airline_seat_legroom_reduced</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_recline_extra</i>&ensp;<span>airline_seat_recline_extra</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airline_seat_recline_normal</i>&ensp;<span>airline_seat_recline_normal</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airplanemode_active</i>&ensp;<span>airplanemode_active</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airplanemode_inactive</i>&ensp;<span>airplanemode_inactive</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airplay</i>&ensp;<span>airplay</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">airport_shuttle</i>&ensp;<span>airport_shuttle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">alarm</i>&ensp;<span>alarm</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">alarm_add</i>&ensp;<span>alarm_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">alarm_off</i>&ensp;<span>alarm_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">alarm_on</i>&ensp;<span>alarm_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">album</i>&ensp;<span>album</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">all_inclusive</i>&ensp;<span>all_inclusive</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">all_out</i>&ensp;<span>all_out</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">android</i>&ensp;<span>android</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">announcement</i>&ensp;<span>announcement</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">apps</i>&ensp;<span>apps</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">archive</i>&ensp;<span>archive</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_back</i>&ensp;<span>arrow_back</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_downward</i>&ensp;<span>arrow_downward</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_drop_down</i>&ensp;<span>arrow_drop_down</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_drop_down_circle</i>&ensp;<span>arrow_drop_down_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_drop_up</i>&ensp;<span>arrow_drop_up</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_forward</i>&ensp;<span>arrow_forward</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">arrow_upward</i>&ensp;<span>arrow_upward</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">art_track</i>&ensp;<span>art_track</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">aspect_ratio</i>&ensp;<span>aspect_ratio</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assessment</i>&ensp;<span>assessment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assignment</i>&ensp;<span>assignment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assignment_ind</i>&ensp;<span>assignment_ind</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assignment_late</i>&ensp;<span>assignment_late</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assignment_return</i>&ensp;<span>assignment_return</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assignment_returned</i>&ensp;<span>assignment_returned</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assignment_turned_in</i>&ensp;<span>assignment_turned_in</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assistant</i>&ensp;<span>assistant</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">assistant_photo</i>&ensp;<span>assistant_photo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">attach_file</i>&ensp;<span>attach_file</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">attach_money</i>&ensp;<span>attach_money</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">attachment</i>&ensp;<span>attachment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">audiotrack</i>&ensp;<span>audiotrack</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">autorenew</i>&ensp;<span>autorenew</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">av_timer</i>&ensp;<span>av_timer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">backspace</i>&ensp;<span>backspace</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">backup</i>&ensp;<span>backup</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">battery_alert</i>&ensp;<span>battery_alert</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">battery_charging_full</i>&ensp;<span>battery_charging_full</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">battery_full</i>&ensp;<span>battery_full</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">battery_std</i>&ensp;<span>battery_std</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">battery_unknown</i>&ensp;<span>battery_unknown</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">beach_access</i>&ensp;<span>beach_access</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">beenhere</i>&ensp;<span>beenhere</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">block</i>&ensp;<span>block</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bluetooth</i>&ensp;<span>bluetooth</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bluetooth_audio</i>&ensp;<span>bluetooth_audio</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bluetooth_connected</i>&ensp;<span>bluetooth_connected</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bluetooth_disabled</i>&ensp;<span>bluetooth_disabled</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bluetooth_searching</i>&ensp;<span>bluetooth_searching</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">blur_circular</i>&ensp;<span>blur_circular</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">blur_linear</i>&ensp;<span>blur_linear</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">blur_off</i>&ensp;<span>blur_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">blur_on</i>&ensp;<span>blur_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">book</i>&ensp;<span>book</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bookmark</i>&ensp;<span>bookmark</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bookmark_border</i>&ensp;<span>bookmark_border</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_all</i>&ensp;<span>border_all</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_bottom</i>&ensp;<span>border_bottom</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_clear</i>&ensp;<span>border_clear</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_color</i>&ensp;<span>border_color</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_horizontal</i>&ensp;<span>border_horizontal</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_inner</i>&ensp;<span>border_inner</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_left</i>&ensp;<span>border_left</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_outer</i>&ensp;<span>border_outer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_right</i>&ensp;<span>border_right</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_style</i>&ensp;<span>border_style</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_top</i>&ensp;<span>border_top</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">border_vertical</i>&ensp;<span>border_vertical</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">branding_watermark</i>&ensp;<span>branding_watermark</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_1</i>&ensp;<span>brightness_1</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_2</i>&ensp;<span>brightness_2</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_3</i>&ensp;<span>brightness_3</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_4</i>&ensp;<span>brightness_4</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_5</i>&ensp;<span>brightness_5</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_6</i>&ensp;<span>brightness_6</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_7</i>&ensp;<span>brightness_7</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_auto</i>&ensp;<span>brightness_auto</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_high</i>&ensp;<span>brightness_high</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_low</i>&ensp;<span>brightness_low</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brightness_medium</i>&ensp;<span>brightness_medium</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">broken_image</i>&ensp;<span>broken_image</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">brush</i>&ensp;<span>brush</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bubble_chart</i>&ensp;<span>bubble_chart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">bug_report</i>&ensp;<span>bug_report</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">build</i>&ensp;<span>build</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">burst_mode</i>&ensp;<span>burst_mode</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">business</i>&ensp;<span>business</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">business_center</i>&ensp;<span>business_center</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cached</i>&ensp;<span>cached</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cake</i>&ensp;<span>cake</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call</i>&ensp;<span>call</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_end</i>&ensp;<span>call_end</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_made</i>&ensp;<span>call_made</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_merge</i>&ensp;<span>call_merge</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_missed</i>&ensp;<span>call_missed</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_missed_outgoing</i>&ensp;<span>call_missed_outgoing</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_received</i>&ensp;<span>call_received</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_split</i>&ensp;<span>call_split</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">call_to_action</i>&ensp;<span>call_to_action</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">camera</i>&ensp;<span>camera</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">camera_alt</i>&ensp;<span>camera_alt</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">camera_enhance</i>&ensp;<span>camera_enhance</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">camera_front</i>&ensp;<span>camera_front</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">camera_rear</i>&ensp;<span>camera_rear</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">camera_roll</i>&ensp;<span>camera_roll</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cancel</i>&ensp;<span>cancel</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">card_giftcard</i>&ensp;<span>card_giftcard</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">card_membership</i>&ensp;<span>card_membership</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">card_travel</i>&ensp;<span>card_travel</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">casino</i>&ensp;<span>casino</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cast</i>&ensp;<span>cast</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cast_connected</i>&ensp;<span>cast_connected</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">center_focus_strong</i>&ensp;<span>center_focus_strong</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">center_focus_weak</i>&ensp;<span>center_focus_weak</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">change_history</i>&ensp;<span>change_history</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">chat</i>&ensp;<span>chat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">chat_bubble</i>&ensp;<span>chat_bubble</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">chat_bubble_outline</i>&ensp;<span>chat_bubble_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">check</i>&ensp;<span>check</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">check_box</i>&ensp;<span>check_box</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">check_box_outline_blank</i>&ensp;<span>check_box_outline_blank</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">check_circle</i>&ensp;<span>check_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">chevron_left</i>&ensp;<span>chevron_left</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">chevron_right</i>&ensp;<span>chevron_right</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">child_care</i>&ensp;<span>child_care</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">child_friendly</i>&ensp;<span>child_friendly</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">chrome_reader_mode</i>&ensp;<span>chrome_reader_mode</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">class</i>&ensp;<span>class</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">clear</i>&ensp;<span>clear</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">clear_all</i>&ensp;<span>clear_all</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">close</i>&ensp;<span>close</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">closed_caption</i>&ensp;<span>closed_caption</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud</i>&ensp;<span>cloud</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud_circle</i>&ensp;<span>cloud_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud_done</i>&ensp;<span>cloud_done</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud_download</i>&ensp;<span>cloud_download</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud_off</i>&ensp;<span>cloud_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud_queue</i>&ensp;<span>cloud_queue</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">cloud_upload</i>&ensp;<span>cloud_upload</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">code</i>&ensp;<span>code</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">collections</i>&ensp;<span>collections</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">collections_bookmark</i>&ensp;<span>collections_bookmark</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">color_lens</i>&ensp;<span>color_lens</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">colorize</i>&ensp;<span>colorize</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">comment</i>&ensp;<span>comment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">compare</i>&ensp;<span>compare</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">compare_arrows</i>&ensp;<span>compare_arrows</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">computer</i>&ensp;<span>computer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">confirmation_number</i>&ensp;<span>confirmation_number</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">contact_mail</i>&ensp;<span>contact_mail</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">contact_phone</i>&ensp;<span>contact_phone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">contacts</i>&ensp;<span>contacts</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">content_copy</i>&ensp;<span>content_copy</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">content_cut</i>&ensp;<span>content_cut</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">content_paste</i>&ensp;<span>content_paste</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">control_point</i>&ensp;<span>control_point</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">control_point_duplicate</i>&ensp;<span>control_point_duplicate</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">copyright</i>&ensp;<span>copyright</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">create</i>&ensp;<span>create</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">create_new_folder</i>&ensp;<span>create_new_folder</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">credit_card</i>&ensp;<span>credit_card</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop</i>&ensp;<span>crop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_16_9</i>&ensp;<span>crop_16_9</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_3_2</i>&ensp;<span>crop_3_2</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_5_4</i>&ensp;<span>crop_5_4</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_7_5</i>&ensp;<span>crop_7_5</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_din</i>&ensp;<span>crop_din</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_free</i>&ensp;<span>crop_free</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_landscape</i>&ensp;<span>crop_landscape</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_original</i>&ensp;<span>crop_original</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_portrait</i>&ensp;<span>crop_portrait</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_rotate</i>&ensp;<span>crop_rotate</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">crop_square</i>&ensp;<span>crop_square</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dashboard</i>&ensp;<span>dashboard</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">data_usage</i>&ensp;<span>data_usage</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">date_range</i>&ensp;<span>date_range</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dehaze</i>&ensp;<span>dehaze</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">delete</i>&ensp;<span>delete</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">delete_forever</i>&ensp;<span>delete_forever</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">delete_sweep</i>&ensp;<span>delete_sweep</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">description</i>&ensp;<span>description</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">desktop_mac</i>&ensp;<span>desktop_mac</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">desktop_windows</i>&ensp;<span>desktop_windows</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">details</i>&ensp;<span>details</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">developer_board</i>&ensp;<span>developer_board</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">developer_mode</i>&ensp;<span>developer_mode</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">device_hub</i>&ensp;<span>device_hub</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">devices</i>&ensp;<span>devices</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">devices_other</i>&ensp;<span>devices_other</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dialer_sip</i>&ensp;<span>dialer_sip</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dialpad</i>&ensp;<span>dialpad</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions</i>&ensp;<span>directions</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_bike</i>&ensp;<span>directions_bike</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_boat</i>&ensp;<span>directions_boat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_bus</i>&ensp;<span>directions_bus</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_car</i>&ensp;<span>directions_car</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_railway</i>&ensp;<span>directions_railway</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_run</i>&ensp;<span>directions_run</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_subway</i>&ensp;<span>directions_subway</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_transit</i>&ensp;<span>directions_transit</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">directions_walk</i>&ensp;<span>directions_walk</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">disc_full</i>&ensp;<span>disc_full</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dns</i>&ensp;<span>dns</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">do_not_disturb</i>&ensp;<span>do_not_disturb</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">do_not_disturb_alt</i>&ensp;<span>do_not_disturb_alt</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">do_not_disturb_off</i>&ensp;<span>do_not_disturb_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">do_not_disturb_on</i>&ensp;<span>do_not_disturb_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dock</i>&ensp;<span>dock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">domain</i>&ensp;<span>domain</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">done</i>&ensp;<span>done</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">done_all</i>&ensp;<span>done_all</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">donut_large</i>&ensp;<span>donut_large</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">donut_small</i>&ensp;<span>donut_small</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">drafts</i>&ensp;<span>drafts</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">drag_handle</i>&ensp;<span>drag_handle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">drive_eta</i>&ensp;<span>drive_eta</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">dvr</i>&ensp;<span>dvr</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">edit</i>&ensp;<span>edit</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">edit_location</i>&ensp;<span>edit_location</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">eject</i>&ensp;<span>eject</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">email</i>&ensp;<span>email</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">enhanced_encryption</i>&ensp;<span>enhanced_encryption</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">equalizer</i>&ensp;<span>equalizer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">error</i>&ensp;<span>error</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">error_outline</i>&ensp;<span>error_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">euro_symbol</i>&ensp;<span>euro_symbol</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">ev_station</i>&ensp;<span>ev_station</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">event</i>&ensp;<span>event</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">event_available</i>&ensp;<span>event_available</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">event_busy</i>&ensp;<span>event_busy</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">event_note</i>&ensp;<span>event_note</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">event_seat</i>&ensp;<span>event_seat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exit_to_app</i>&ensp;<span>exit_to_app</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">expand_less</i>&ensp;<span>expand_less</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">expand_more</i>&ensp;<span>expand_more</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">explicit</i>&ensp;<span>explicit</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">explore</i>&ensp;<span>explore</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exposure</i>&ensp;<span>exposure</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exposure_neg_1</i>&ensp;<span>exposure_neg_1</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exposure_neg_2</i>&ensp;<span>exposure_neg_2</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exposure_plus_1</i>&ensp;<span>exposure_plus_1</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exposure_plus_2</i>&ensp;<span>exposure_plus_2</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">exposure_zero</i>&ensp;<span>exposure_zero</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">extension</i>&ensp;<span>extension</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">face</i>&ensp;<span>face</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fast_forward</i>&ensp;<span>fast_forward</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fast_rewind</i>&ensp;<span>fast_rewind</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">favorite</i>&ensp;<span>favorite</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">favorite_border</i>&ensp;<span>favorite_border</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">featured_play_list</i>&ensp;<span>featured_play_list</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">featured_video</i>&ensp;<span>featured_video</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">feedback</i>&ensp;<span>feedback</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fiber_dvr</i>&ensp;<span>fiber_dvr</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fiber_manual_record</i>&ensp;<span>fiber_manual_record</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fiber_new</i>&ensp;<span>fiber_new</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fiber_pin</i>&ensp;<span>fiber_pin</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fiber_smart_record</i>&ensp;<span>fiber_smart_record</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">file_download</i>&ensp;<span>file_download</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">file_upload</i>&ensp;<span>file_upload</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter</i>&ensp;<span>filter</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_1</i>&ensp;<span>filter_1</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_2</i>&ensp;<span>filter_2</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_3</i>&ensp;<span>filter_3</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_4</i>&ensp;<span>filter_4</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_5</i>&ensp;<span>filter_5</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_6</i>&ensp;<span>filter_6</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_7</i>&ensp;<span>filter_7</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_8</i>&ensp;<span>filter_8</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_9</i>&ensp;<span>filter_9</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_9_plus</i>&ensp;<span>filter_9_plus</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_b_and_w</i>&ensp;<span>filter_b_and_w</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_center_focus</i>&ensp;<span>filter_center_focus</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_drama</i>&ensp;<span>filter_drama</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_frames</i>&ensp;<span>filter_frames</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_hdr</i>&ensp;<span>filter_hdr</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_list</i>&ensp;<span>filter_list</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_none</i>&ensp;<span>filter_none</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_tilt_shift</i>&ensp;<span>filter_tilt_shift</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">filter_vintage</i>&ensp;<span>filter_vintage</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">find_in_page</i>&ensp;<span>find_in_page</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">find_replace</i>&ensp;<span>find_replace</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fingerprint</i>&ensp;<span>fingerprint</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">first_page</i>&ensp;<span>first_page</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fitness_center</i>&ensp;<span>fitness_center</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flag</i>&ensp;<span>flag</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flare</i>&ensp;<span>flare</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flash_auto</i>&ensp;<span>flash_auto</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flash_off</i>&ensp;<span>flash_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flash_on</i>&ensp;<span>flash_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flight</i>&ensp;<span>flight</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flight_land</i>&ensp;<span>flight_land</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flight_takeoff</i>&ensp;<span>flight_takeoff</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flip</i>&ensp;<span>flip</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flip_to_back</i>&ensp;<span>flip_to_back</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">flip_to_front</i>&ensp;<span>flip_to_front</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">folder</i>&ensp;<span>folder</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">folder_open</i>&ensp;<span>folder_open</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">folder_shared</i>&ensp;<span>folder_shared</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">folder_special</i>&ensp;<span>folder_special</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">font_download</i>&ensp;<span>font_download</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_align_center</i>&ensp;<span>format_align_center</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_align_justify</i>&ensp;<span>format_align_justify</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_align_left</i>&ensp;<span>format_align_left</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_align_right</i>&ensp;<span>format_align_right</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_bold</i>&ensp;<span>format_bold</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_clear</i>&ensp;<span>format_clear</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_color_fill</i>&ensp;<span>format_color_fill</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_color_reset</i>&ensp;<span>format_color_reset</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_color_text</i>&ensp;<span>format_color_text</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_indent_decrease</i>&ensp;<span>format_indent_decrease</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_indent_increase</i>&ensp;<span>format_indent_increase</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_italic</i>&ensp;<span>format_italic</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_line_spacing</i>&ensp;<span>format_line_spacing</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_list_bulleted</i>&ensp;<span>format_list_bulleted</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_list_numbered</i>&ensp;<span>format_list_numbered</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_paint</i>&ensp;<span>format_paint</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_quote</i>&ensp;<span>format_quote</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_shapes</i>&ensp;<span>format_shapes</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_size</i>&ensp;<span>format_size</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_strikethrough</i>&ensp;<span>format_strikethrough</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_textdirection_l_to_r</i>&ensp;<span>format_textdirection_l_to_r</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_textdirection_r_to_l</i>&ensp;<span>format_textdirection_r_to_l</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">format_underlined</i>&ensp;<span>format_underlined</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">forum</i>&ensp;<span>forum</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">forward</i>&ensp;<span>forward</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">forward_10</i>&ensp;<span>forward_10</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">forward_30</i>&ensp;<span>forward_30</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">forward_5</i>&ensp;<span>forward_5</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">free_breakfast</i>&ensp;<span>free_breakfast</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fullscreen</i>&ensp;<span>fullscreen</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">fullscreen_exit</i>&ensp;<span>fullscreen_exit</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">functions</i>&ensp;<span>functions</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">g_translate</i>&ensp;<span>g_translate</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gamepad</i>&ensp;<span>gamepad</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">games</i>&ensp;<span>games</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gavel</i>&ensp;<span>gavel</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gesture</i>&ensp;<span>gesture</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">get_app</i>&ensp;<span>get_app</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gif</i>&ensp;<span>gif</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">golf_course</i>&ensp;<span>golf_course</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gps_fixed</i>&ensp;<span>gps_fixed</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gps_not_fixed</i>&ensp;<span>gps_not_fixed</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gps_off</i>&ensp;<span>gps_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">grade</i>&ensp;<span>grade</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">gradient</i>&ensp;<span>gradient</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">grain</i>&ensp;<span>grain</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">graphic_eq</i>&ensp;<span>graphic_eq</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">grid_off</i>&ensp;<span>grid_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">grid_on</i>&ensp;<span>grid_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">group</i>&ensp;<span>group</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">group_add</i>&ensp;<span>group_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">group_work</i>&ensp;<span>group_work</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hd</i>&ensp;<span>hd</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hdr_off</i>&ensp;<span>hdr_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hdr_on</i>&ensp;<span>hdr_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hdr_strong</i>&ensp;<span>hdr_strong</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hdr_weak</i>&ensp;<span>hdr_weak</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">headset</i>&ensp;<span>headset</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">headset_mic</i>&ensp;<span>headset_mic</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">healing</i>&ensp;<span>healing</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hearing</i>&ensp;<span>hearing</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">help</i>&ensp;<span>help</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">help_outline</i>&ensp;<span>help_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">high_quality</i>&ensp;<span>high_quality</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">highlight</i>&ensp;<span>highlight</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">highlight_off</i>&ensp;<span>highlight_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">history</i>&ensp;<span>history</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">home</i>&ensp;<span>home</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hot_tub</i>&ensp;<span>hot_tub</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hotel</i>&ensp;<span>hotel</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hourglass_empty</i>&ensp;<span>hourglass_empty</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">hourglass_full</i>&ensp;<span>hourglass_full</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">http</i>&ensp;<span>http</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">https</i>&ensp;<span>https</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">image</i>&ensp;<span>image</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">image_aspect_ratio</i>&ensp;<span>image_aspect_ratio</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">import_contacts</i>&ensp;<span>import_contacts</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">import_export</i>&ensp;<span>import_export</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">important_devices</i>&ensp;<span>important_devices</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">inbox</i>&ensp;<span>inbox</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">indeterminate_check_box</i>&ensp;<span>indeterminate_check_box</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">info</i>&ensp;<span>info</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">info_outline</i>&ensp;<span>info_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">input</i>&ensp;<span>input</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_chart</i>&ensp;<span>insert_chart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_comment</i>&ensp;<span>insert_comment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_drive_file</i>&ensp;<span>insert_drive_file</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_emoticon</i>&ensp;<span>insert_emoticon</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_invitation</i>&ensp;<span>insert_invitation</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_link</i>&ensp;<span>insert_link</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">insert_photo</i>&ensp;<span>insert_photo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">invert_colors</i>&ensp;<span>invert_colors</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">invert_colors_off</i>&ensp;<span>invert_colors_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">iso</i>&ensp;<span>iso</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard</i>&ensp;<span>keyboard</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_arrow_down</i>&ensp;<span>keyboard_arrow_down</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_arrow_left</i>&ensp;<span>keyboard_arrow_left</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_arrow_right</i>&ensp;<span>keyboard_arrow_right</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_arrow_up</i>&ensp;<span>keyboard_arrow_up</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_backspace</i>&ensp;<span>keyboard_backspace</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_capslock</i>&ensp;<span>keyboard_capslock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_hide</i>&ensp;<span>keyboard_hide</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_return</i>&ensp;<span>keyboard_return</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_tab</i>&ensp;<span>keyboard_tab</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">keyboard_voice</i>&ensp;<span>keyboard_voice</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">kitchen</i>&ensp;<span>kitchen</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">label</i>&ensp;<span>label</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">label_outline</i>&ensp;<span>label_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">landscape</i>&ensp;<span>landscape</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">language</i>&ensp;<span>language</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">laptop</i>&ensp;<span>laptop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">laptop_chromebook</i>&ensp;<span>laptop_chromebook</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">laptop_mac</i>&ensp;<span>laptop_mac</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">laptop_windows</i>&ensp;<span>laptop_windows</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">last_page</i>&ensp;<span>last_page</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">launch</i>&ensp;<span>launch</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">layers</i>&ensp;<span>layers</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">layers_clear</i>&ensp;<span>layers_clear</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">leak_add</i>&ensp;<span>leak_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">leak_remove</i>&ensp;<span>leak_remove</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">lens</i>&ensp;<span>lens</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">library_add</i>&ensp;<span>library_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">library_books</i>&ensp;<span>library_books</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">library_music</i>&ensp;<span>library_music</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">lightbulb_outline</i>&ensp;<span>lightbulb_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">line_style</i>&ensp;<span>line_style</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">line_weight</i>&ensp;<span>line_weight</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">linear_scale</i>&ensp;<span>linear_scale</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">link</i>&ensp;<span>link</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">linked_camera</i>&ensp;<span>linked_camera</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">list</i>&ensp;<span>list</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">live_help</i>&ensp;<span>live_help</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">live_tv</i>&ensp;<span>live_tv</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_activity</i>&ensp;<span>local_activity</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_airport</i>&ensp;<span>local_airport</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_atm</i>&ensp;<span>local_atm</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_bar</i>&ensp;<span>local_bar</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_cafe</i>&ensp;<span>local_cafe</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_car_wash</i>&ensp;<span>local_car_wash</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_convenience_store</i>&ensp;<span>local_convenience_store</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_dining</i>&ensp;<span>local_dining</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_drink</i>&ensp;<span>local_drink</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_florist</i>&ensp;<span>local_florist</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_gas_station</i>&ensp;<span>local_gas_station</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_grocery_store</i>&ensp;<span>local_grocery_store</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_hospital</i>&ensp;<span>local_hospital</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_hotel</i>&ensp;<span>local_hotel</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_laundry_service</i>&ensp;<span>local_laundry_service</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_library</i>&ensp;<span>local_library</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_mall</i>&ensp;<span>local_mall</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_movies</i>&ensp;<span>local_movies</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_offer</i>&ensp;<span>local_offer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_parking</i>&ensp;<span>local_parking</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_pharmacy</i>&ensp;<span>local_pharmacy</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_phone</i>&ensp;<span>local_phone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_pizza</i>&ensp;<span>local_pizza</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_play</i>&ensp;<span>local_play</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_post_office</i>&ensp;<span>local_post_office</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_printshop</i>&ensp;<span>local_printshop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_see</i>&ensp;<span>local_see</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_shipping</i>&ensp;<span>local_shipping</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">local_taxi</i>&ensp;<span>local_taxi</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">location_city</i>&ensp;<span>location_city</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">location_disabled</i>&ensp;<span>location_disabled</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">location_off</i>&ensp;<span>location_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">location_on</i>&ensp;<span>location_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">location_searching</i>&ensp;<span>location_searching</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">lock</i>&ensp;<span>lock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">lock_open</i>&ensp;<span>lock_open</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">lock_outline</i>&ensp;<span>lock_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks</i>&ensp;<span>looks</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks_3</i>&ensp;<span>looks_3</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks_4</i>&ensp;<span>looks_4</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks_5</i>&ensp;<span>looks_5</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks_6</i>&ensp;<span>looks_6</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks_one</i>&ensp;<span>looks_one</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">looks_two</i>&ensp;<span>looks_two</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">loop</i>&ensp;<span>loop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">loupe</i>&ensp;<span>loupe</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">low_priority</i>&ensp;<span>low_priority</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">loyalty</i>&ensp;<span>loyalty</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mail</i>&ensp;<span>mail</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mail_outline</i>&ensp;<span>mail_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">map</i>&ensp;<span>map</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">markunread</i>&ensp;<span>markunread</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">markunread_mailbox</i>&ensp;<span>markunread_mailbox</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">memory</i>&ensp;<span>memory</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">menu</i>&ensp;<span>menu</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">merge_type</i>&ensp;<span>merge_type</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">message</i>&ensp;<span>message</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mic</i>&ensp;<span>mic</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mic_none</i>&ensp;<span>mic_none</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mic_off</i>&ensp;<span>mic_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mms</i>&ensp;<span>mms</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mode_comment</i>&ensp;<span>mode_comment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mode_edit</i>&ensp;<span>mode_edit</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">monetization_on</i>&ensp;<span>monetization_on</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">money_off</i>&ensp;<span>money_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">monochrome_photos</i>&ensp;<span>monochrome_photos</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mood</i>&ensp;<span>mood</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mood_bad</i>&ensp;<span>mood_bad</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">more</i>&ensp;<span>more</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">more_horiz</i>&ensp;<span>more_horiz</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">more_vert</i>&ensp;<span>more_vert</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">motorcycle</i>&ensp;<span>motorcycle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">mouse</i>&ensp;<span>mouse</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">move_to_inbox</i>&ensp;<span>move_to_inbox</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">movie</i>&ensp;<span>movie</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">movie_creation</i>&ensp;<span>movie_creation</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">movie_filter</i>&ensp;<span>movie_filter</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">multiline_chart</i>&ensp;<span>multiline_chart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">music_note</i>&ensp;<span>music_note</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">music_video</i>&ensp;<span>music_video</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">my_location</i>&ensp;<span>my_location</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">nature</i>&ensp;<span>nature</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">nature_people</i>&ensp;<span>nature_people</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">navigate_before</i>&ensp;<span>navigate_before</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">navigate_next</i>&ensp;<span>navigate_next</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">navigation</i>&ensp;<span>navigation</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">near_me</i>&ensp;<span>near_me</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">network_cell</i>&ensp;<span>network_cell</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">network_check</i>&ensp;<span>network_check</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">network_locked</i>&ensp;<span>network_locked</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">network_wifi</i>&ensp;<span>network_wifi</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">new_releases</i>&ensp;<span>new_releases</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">next_week</i>&ensp;<span>next_week</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">nfc</i>&ensp;<span>nfc</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">no_encryption</i>&ensp;<span>no_encryption</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">no_sim</i>&ensp;<span>no_sim</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">not_interested</i>&ensp;<span>not_interested</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">note</i>&ensp;<span>note</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">note_add</i>&ensp;<span>note_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">notifications</i>&ensp;<span>notifications</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">notifications_active</i>&ensp;<span>notifications_active</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">notifications_none</i>&ensp;<span>notifications_none</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">notifications_off</i>&ensp;<span>notifications_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">notifications_paused</i>&ensp;<span>notifications_paused</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">offline_pin</i>&ensp;<span>offline_pin</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">ondemand_video</i>&ensp;<span>ondemand_video</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">opacity</i>&ensp;<span>opacity</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">open_in_browser</i>&ensp;<span>open_in_browser</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">open_in_new</i>&ensp;<span>open_in_new</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">open_with</i>&ensp;<span>open_with</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pages</i>&ensp;<span>pages</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pageview</i>&ensp;<span>pageview</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">palette</i>&ensp;<span>palette</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pan_tool</i>&ensp;<span>pan_tool</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">panorama</i>&ensp;<span>panorama</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">panorama_fish_eye</i>&ensp;<span>panorama_fish_eye</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">panorama_horizontal</i>&ensp;<span>panorama_horizontal</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">panorama_vertical</i>&ensp;<span>panorama_vertical</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">panorama_wide_angle</i>&ensp;<span>panorama_wide_angle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">party_mode</i>&ensp;<span>party_mode</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pause</i>&ensp;<span>pause</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pause_circle_filled</i>&ensp;<span>pause_circle_filled</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pause_circle_outline</i>&ensp;<span>pause_circle_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">payment</i>&ensp;<span>payment</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">people</i>&ensp;<span>people</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">people_outline</i>&ensp;<span>people_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_camera_mic</i>&ensp;<span>perm_camera_mic</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_contact_calendar</i>&ensp;<span>perm_contact_calendar</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_data_setting</i>&ensp;<span>perm_data_setting</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_device_information</i>&ensp;<span>perm_device_information</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_identity</i>&ensp;<span>perm_identity</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_media</i>&ensp;<span>perm_media</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_phone_msg</i>&ensp;<span>perm_phone_msg</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">perm_scan_wifi</i>&ensp;<span>perm_scan_wifi</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">person</i>&ensp;<span>person</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">person_add</i>&ensp;<span>person_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">person_outline</i>&ensp;<span>person_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">person_pin</i>&ensp;<span>person_pin</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">person_pin_circle</i>&ensp;<span>person_pin_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">personal_video</i>&ensp;<span>personal_video</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pets</i>&ensp;<span>pets</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone</i>&ensp;<span>phone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_android</i>&ensp;<span>phone_android</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_bluetooth_speaker</i>&ensp;<span>phone_bluetooth_speaker</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_forwarded</i>&ensp;<span>phone_forwarded</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_in_talk</i>&ensp;<span>phone_in_talk</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_iphone</i>&ensp;<span>phone_iphone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_locked</i>&ensp;<span>phone_locked</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_missed</i>&ensp;<span>phone_missed</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phone_paused</i>&ensp;<span>phone_paused</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phonelink</i>&ensp;<span>phonelink</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phonelink_erase</i>&ensp;<span>phonelink_erase</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phonelink_lock</i>&ensp;<span>phonelink_lock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phonelink_off</i>&ensp;<span>phonelink_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phonelink_ring</i>&ensp;<span>phonelink_ring</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">phonelink_setup</i>&ensp;<span>phonelink_setup</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo</i>&ensp;<span>photo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_album</i>&ensp;<span>photo_album</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_camera</i>&ensp;<span>photo_camera</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_filter</i>&ensp;<span>photo_filter</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_library</i>&ensp;<span>photo_library</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_size_select_actual</i>&ensp;<span>photo_size_select_actual</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_size_select_large</i>&ensp;<span>photo_size_select_large</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">photo_size_select_small</i>&ensp;<span>photo_size_select_small</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">picture_as_pdf</i>&ensp;<span>picture_as_pdf</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">picture_in_picture</i>&ensp;<span>picture_in_picture</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">picture_in_picture_alt</i>&ensp;<span>picture_in_picture_alt</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pie_chart</i>&ensp;<span>pie_chart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pie_chart_outlined</i>&ensp;<span>pie_chart_outlined</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pin_drop</i>&ensp;<span>pin_drop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">place</i>&ensp;<span>place</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">play_arrow</i>&ensp;<span>play_arrow</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">play_circle_filled</i>&ensp;<span>play_circle_filled</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">play_circle_outline</i>&ensp;<span>play_circle_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">play_for_work</i>&ensp;<span>play_for_work</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">playlist_add</i>&ensp;<span>playlist_add</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">playlist_add_check</i>&ensp;<span>playlist_add_check</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">playlist_play</i>&ensp;<span>playlist_play</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">plus_one</i>&ensp;<span>plus_one</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">poll</i>&ensp;<span>poll</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">polymer</i>&ensp;<span>polymer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pool</i>&ensp;<span>pool</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">portable_wifi_off</i>&ensp;<span>portable_wifi_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">portrait</i>&ensp;<span>portrait</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">power</i>&ensp;<span>power</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">power_input</i>&ensp;<span>power_input</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">power_settings_new</i>&ensp;<span>power_settings_new</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">pregnant_woman</i>&ensp;<span>pregnant_woman</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">present_to_all</i>&ensp;<span>present_to_all</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">print</i>&ensp;<span>print</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">priority_high</i>&ensp;<span>priority_high</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">public</i>&ensp;<span>public</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">publish</i>&ensp;<span>publish</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">query_builder</i>&ensp;<span>query_builder</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">question_answer</i>&ensp;<span>question_answer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">queue</i>&ensp;<span>queue</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">queue_music</i>&ensp;<span>queue_music</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">queue_play_next</i>&ensp;<span>queue_play_next</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">radio</i>&ensp;<span>radio</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">radio_button_checked</i>&ensp;<span>radio_button_checked</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">radio_button_unchecked</i>&ensp;<span>radio_button_unchecked</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rate_review</i>&ensp;<span>rate_review</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">receipt</i>&ensp;<span>receipt</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">recent_actors</i>&ensp;<span>recent_actors</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">record_voice_over</i>&ensp;<span>record_voice_over</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">redeem</i>&ensp;<span>redeem</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">redo</i>&ensp;<span>redo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">refresh</i>&ensp;<span>refresh</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">remove</i>&ensp;<span>remove</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">remove_circle</i>&ensp;<span>remove_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">remove_circle_outline</i>&ensp;<span>remove_circle_outline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">remove_from_queue</i>&ensp;<span>remove_from_queue</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">remove_red_eye</i>&ensp;<span>remove_red_eye</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">remove_shopping_cart</i>&ensp;<span>remove_shopping_cart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">reorder</i>&ensp;<span>reorder</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">repeat</i>&ensp;<span>repeat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">repeat_one</i>&ensp;<span>repeat_one</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">replay</i>&ensp;<span>replay</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">replay_10</i>&ensp;<span>replay_10</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">replay_30</i>&ensp;<span>replay_30</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">replay_5</i>&ensp;<span>replay_5</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">reply</i>&ensp;<span>reply</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">reply_all</i>&ensp;<span>reply_all</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">report</i>&ensp;<span>report</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">report_problem</i>&ensp;<span>report_problem</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">restaurant</i>&ensp;<span>restaurant</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">restaurant_menu</i>&ensp;<span>restaurant_menu</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">restore</i>&ensp;<span>restore</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">restore_page</i>&ensp;<span>restore_page</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">ring_volume</i>&ensp;<span>ring_volume</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">room</i>&ensp;<span>room</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">room_service</i>&ensp;<span>room_service</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rotate_90_degrees_ccw</i>&ensp;<span>rotate_90_degrees_ccw</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rotate_left</i>&ensp;<span>rotate_left</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rotate_right</i>&ensp;<span>rotate_right</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rounded_corner</i>&ensp;<span>rounded_corner</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">router</i>&ensp;<span>router</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rowing</i>&ensp;<span>rowing</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rss_feed</i>&ensp;<span>rss_feed</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">rv_hookup</i>&ensp;<span>rv_hookup</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">satellite</i>&ensp;<span>satellite</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">save</i>&ensp;<span>save</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">scanner</i>&ensp;<span>scanner</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">schedule</i>&ensp;<span>schedule</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">school</i>&ensp;<span>school</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">screen_lock_landscape</i>&ensp;<span>screen_lock_landscape</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">screen_lock_portrait</i>&ensp;<span>screen_lock_portrait</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">screen_lock_rotation</i>&ensp;<span>screen_lock_rotation</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">screen_rotation</i>&ensp;<span>screen_rotation</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">screen_share</i>&ensp;<span>screen_share</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sd_card</i>&ensp;<span>sd_card</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sd_storage</i>&ensp;<span>sd_storage</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">search</i>&ensp;<span>search</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">security</i>&ensp;<span>security</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">select_all</i>&ensp;<span>select_all</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">send</i>&ensp;<span>send</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sentiment_dissatisfied</i>&ensp;<span>sentiment_dissatisfied</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sentiment_neutral</i>&ensp;<span>sentiment_neutral</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sentiment_satisfied</i>&ensp;<span>sentiment_satisfied</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sentiment_very_dissatisfied</i>&ensp;<span>sentiment_very_dissatisfied</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sentiment_very_satisfied</i>&ensp;<span>sentiment_very_satisfied</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings</i>&ensp;<span>settings</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_applications</i>&ensp;<span>settings_applications</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_backup_restore</i>&ensp;<span>settings_backup_restore</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_bluetooth</i>&ensp;<span>settings_bluetooth</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_brightness</i>&ensp;<span>settings_brightness</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_cell</i>&ensp;<span>settings_cell</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_ethernet</i>&ensp;<span>settings_ethernet</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_input_antenna</i>&ensp;<span>settings_input_antenna</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_input_component</i>&ensp;<span>settings_input_component</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_input_composite</i>&ensp;<span>settings_input_composite</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_input_hdmi</i>&ensp;<span>settings_input_hdmi</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_input_svideo</i>&ensp;<span>settings_input_svideo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_overscan</i>&ensp;<span>settings_overscan</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_phone</i>&ensp;<span>settings_phone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_power</i>&ensp;<span>settings_power</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_remote</i>&ensp;<span>settings_remote</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_system_daydream</i>&ensp;<span>settings_system_daydream</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">settings_voice</i>&ensp;<span>settings_voice</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">share</i>&ensp;<span>share</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">shop</i>&ensp;<span>shop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">shop_two</i>&ensp;<span>shop_two</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">shopping_basket</i>&ensp;<span>shopping_basket</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">shopping_cart</i>&ensp;<span>shopping_cart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">short_text</i>&ensp;<span>short_text</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">show_chart</i>&ensp;<span>show_chart</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">shuffle</i>&ensp;<span>shuffle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_cellular_4_bar</i>&ensp;<span>signal_cellular_4_bar</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_cellular_connected_no_internet_4_bar</i>&ensp;<span>signal_cellular_connected_no_internet_4_bar</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_cellular_no_sim</i>&ensp;<span>signal_cellular_no_sim</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_cellular_null</i>&ensp;<span>signal_cellular_null</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_cellular_off</i>&ensp;<span>signal_cellular_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_wifi_4_bar</i>&ensp;<span>signal_wifi_4_bar</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_wifi_4_bar_lock</i>&ensp;<span>signal_wifi_4_bar_lock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">signal_wifi_off</i>&ensp;<span>signal_wifi_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sim_card</i>&ensp;<span>sim_card</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sim_card_alert</i>&ensp;<span>sim_card_alert</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">skip_next</i>&ensp;<span>skip_next</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">skip_previous</i>&ensp;<span>skip_previous</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">slideshow</i>&ensp;<span>slideshow</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">slow_motion_video</i>&ensp;<span>slow_motion_video</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">smartphone</i>&ensp;<span>smartphone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">smoke_free</i>&ensp;<span>smoke_free</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">smoking_rooms</i>&ensp;<span>smoking_rooms</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sms</i>&ensp;<span>sms</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sms_failed</i>&ensp;<span>sms_failed</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">snooze</i>&ensp;<span>snooze</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sort</i>&ensp;<span>sort</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sort_by_alpha</i>&ensp;<span>sort_by_alpha</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">spa</i>&ensp;<span>spa</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">space_bar</i>&ensp;<span>space_bar</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">speaker</i>&ensp;<span>speaker</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">speaker_group</i>&ensp;<span>speaker_group</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">speaker_notes</i>&ensp;<span>speaker_notes</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">speaker_notes_off</i>&ensp;<span>speaker_notes_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">speaker_phone</i>&ensp;<span>speaker_phone</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">spellcheck</i>&ensp;<span>spellcheck</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">star</i>&ensp;<span>star</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">star_border</i>&ensp;<span>star_border</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">star_half</i>&ensp;<span>star_half</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stars</i>&ensp;<span>stars</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stay_current_landscape</i>&ensp;<span>stay_current_landscape</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stay_current_portrait</i>&ensp;<span>stay_current_portrait</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stay_primary_landscape</i>&ensp;<span>stay_primary_landscape</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stay_primary_portrait</i>&ensp;<span>stay_primary_portrait</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stop</i>&ensp;<span>stop</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">stop_screen_share</i>&ensp;<span>stop_screen_share</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">storage</i>&ensp;<span>storage</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">store</i>&ensp;<span>store</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">store_mall_directory</i>&ensp;<span>store_mall_directory</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">straighten</i>&ensp;<span>straighten</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">streetview</i>&ensp;<span>streetview</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">strikethrough_s</i>&ensp;<span>strikethrough_s</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">style</i>&ensp;<span>style</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">subdirectory_arrow_left</i>&ensp;<span>subdirectory_arrow_left</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">subdirectory_arrow_right</i>&ensp;<span>subdirectory_arrow_right</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">subject</i>&ensp;<span>subject</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">subscriptions</i>&ensp;<span>subscriptions</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">subtitles</i>&ensp;<span>subtitles</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">subway</i>&ensp;<span>subway</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">supervisor_account</i>&ensp;<span>supervisor_account</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">surround_sound</i>&ensp;<span>surround_sound</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">swap_calls</i>&ensp;<span>swap_calls</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">swap_horiz</i>&ensp;<span>swap_horiz</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">swap_vert</i>&ensp;<span>swap_vert</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">swap_vertical_circle</i>&ensp;<span>swap_vertical_circle</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">switch_camera</i>&ensp;<span>switch_camera</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">switch_video</i>&ensp;<span>switch_video</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sync</i>&ensp;<span>sync</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sync_disabled</i>&ensp;<span>sync_disabled</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">sync_problem</i>&ensp;<span>sync_problem</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">system_update</i>&ensp;<span>system_update</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">system_update_alt</i>&ensp;<span>system_update_alt</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tab</i>&ensp;<span>tab</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tab_unselected</i>&ensp;<span>tab_unselected</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tablet</i>&ensp;<span>tablet</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tablet_android</i>&ensp;<span>tablet_android</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tablet_mac</i>&ensp;<span>tablet_mac</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tag_faces</i>&ensp;<span>tag_faces</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tap_and_play</i>&ensp;<span>tap_and_play</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">terrain</i>&ensp;<span>terrain</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">text_fields</i>&ensp;<span>text_fields</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">text_format</i>&ensp;<span>text_format</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">textsms</i>&ensp;<span>textsms</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">texture</i>&ensp;<span>texture</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">theaters</i>&ensp;<span>theaters</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">thumb_down</i>&ensp;<span>thumb_down</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">thumb_up</i>&ensp;<span>thumb_up</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">thumbs_up_down</i>&ensp;<span>thumbs_up_down</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">time_to_leave</i>&ensp;<span>time_to_leave</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">timelapse</i>&ensp;<span>timelapse</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">timeline</i>&ensp;<span>timeline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">timer</i>&ensp;<span>timer</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">timer_10</i>&ensp;<span>timer_10</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">timer_3</i>&ensp;<span>timer_3</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">timer_off</i>&ensp;<span>timer_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">title</i>&ensp;<span>title</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">toc</i>&ensp;<span>toc</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">today</i>&ensp;<span>today</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">toll</i>&ensp;<span>toll</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tonality</i>&ensp;<span>tonality</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">touch_app</i>&ensp;<span>touch_app</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">toys</i>&ensp;<span>toys</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">track_changes</i>&ensp;<span>track_changes</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">traffic</i>&ensp;<span>traffic</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">train</i>&ensp;<span>train</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tram</i>&ensp;<span>tram</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">transfer_within_a_station</i>&ensp;<span>transfer_within_a_station</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">transform</i>&ensp;<span>transform</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">translate</i>&ensp;<span>translate</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">trending_down</i>&ensp;<span>trending_down</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">trending_flat</i>&ensp;<span>trending_flat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">trending_up</i>&ensp;<span>trending_up</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tune</i>&ensp;<span>tune</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">turned_in</i>&ensp;<span>turned_in</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">turned_in_not</i>&ensp;<span>turned_in_not</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">tv</i>&ensp;<span>tv</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">unarchive</i>&ensp;<span>unarchive</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">undo</i>&ensp;<span>undo</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">unfold_less</i>&ensp;<span>unfold_less</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">unfold_more</i>&ensp;<span>unfold_more</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">update</i>&ensp;<span>update</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">usb</i>&ensp;<span>usb</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">verified_user</i>&ensp;<span>verified_user</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vertical_align_bottom</i>&ensp;<span>vertical_align_bottom</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vertical_align_center</i>&ensp;<span>vertical_align_center</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vertical_align_top</i>&ensp;<span>vertical_align_top</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vibration</i>&ensp;<span>vibration</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">video_call</i>&ensp;<span>video_call</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">video_label</i>&ensp;<span>video_label</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">video_library</i>&ensp;<span>video_library</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">videocam</i>&ensp;<span>videocam</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">videocam_off</i>&ensp;<span>videocam_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">videogame_asset</i>&ensp;<span>videogame_asset</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_agenda</i>&ensp;<span>view_agenda</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_array</i>&ensp;<span>view_array</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_carousel</i>&ensp;<span>view_carousel</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_column</i>&ensp;<span>view_column</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_comfy</i>&ensp;<span>view_comfy</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_compact</i>&ensp;<span>view_compact</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_day</i>&ensp;<span>view_day</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_headline</i>&ensp;<span>view_headline</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_list</i>&ensp;<span>view_list</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_module</i>&ensp;<span>view_module</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_quilt</i>&ensp;<span>view_quilt</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_stream</i>&ensp;<span>view_stream</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">view_week</i>&ensp;<span>view_week</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vignette</i>&ensp;<span>vignette</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">visibility</i>&ensp;<span>visibility</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">visibility_off</i>&ensp;<span>visibility_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">voice_chat</i>&ensp;<span>voice_chat</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">voicemail</i>&ensp;<span>voicemail</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">volume_down</i>&ensp;<span>volume_down</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">volume_mute</i>&ensp;<span>volume_mute</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">volume_off</i>&ensp;<span>volume_off</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">volume_up</i>&ensp;<span>volume_up</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vpn_key</i>&ensp;<span>vpn_key</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">vpn_lock</i>&ensp;<span>vpn_lock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wallpaper</i>&ensp;<span>wallpaper</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">warning</i>&ensp;<span>warning</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">watch</i>&ensp;<span>watch</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">watch_later</i>&ensp;<span>watch_later</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wb_auto</i>&ensp;<span>wb_auto</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wb_cloudy</i>&ensp;<span>wb_cloudy</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wb_incandescent</i>&ensp;<span>wb_incandescent</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wb_iridescent</i>&ensp;<span>wb_iridescent</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wb_sunny</i>&ensp;<span>wb_sunny</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wc</i>&ensp;<span>wc</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">web</i>&ensp;<span>web</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">web_asset</i>&ensp;<span>web_asset</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">weekend</i>&ensp;<span>weekend</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">whatshot</i>&ensp;<span>whatshot</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">widgets</i>&ensp;<span>widgets</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wifi</i>&ensp;<span>wifi</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wifi_lock</i>&ensp;<span>wifi_lock</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wifi_tethering</i>&ensp;<span>wifi_tethering</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">work</i>&ensp;<span>work</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">wrap_text</i>&ensp;<span>wrap_text</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">youtube_searched_for</i>&ensp;<span>youtube_searched_for</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">zoom_in</i>&ensp;<span>zoom_in</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">zoom_out</i>&ensp;<span>zoom_out</span></div>
        <div class="icon-preview col s6 m5 mb-1"><i class="material-icons dp48">zoom_out_map</i>&ensp;<span>zoom_out_map</span></div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>
  <!-- Modal Color -->
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