<!-- menghubungkan ke master -->
@extends('/admin/master')

<!-- page main -->
@section('konten')
     <div id="main">
  <div class="row">
    <div class="col s12">
      <div id="validations" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Jquery Validation Example</h4>
              </div>

            </div>
          </div>
          <div id="view-validations">
            <form class="formValidate" id="formValidate" method="get">
              <div class="row">
                <div class="input-field col s12">
                  <label for="uname">Username*</label>
                  <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                  <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cemail">E-Mail *</label>
                  <input id="cemail" type="email" name="cemail" data-error=".errorTxt2">
                  <div class="errorTxt2"></div>
                </div>
                <div class="input-field col s12">
                  <label for="password">Password *</label>
                  <input id="password" type="password" name="password" data-error=".errorTxt3">
                  <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                  <label for="cpassword">Confirm Password *</label>
                  <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
                  <div class="errorTxt4"></div>
                </div>
<!--                 <div class="input-field col s12">
                  <label for="curl">URL *</label>
                  <input id="curl" type="url" name="curl" data-error=".errorTxt5">
                  <div class="errorTxt5"></div>
                </div> -->
                <div class="col s12">
                  <label for="crole">Role *</label>
                  <select class="error browser-default" id="crole" name="crole" data-error=".errorTxt6">
                    <option value="" disabled selected>Choose your profile</option>
                    <option value="1">Manager</option>
                    <option value="2">Developer</option>
                    <option value="3">Business</option>
                  </select>
                  <div class="input-field">
                    <div class="errorTxt6"></div>
                  </div>
                </div>
<!--                 <div class="input-field col s12">
                  <textarea id="ccomment" name="ccomment" class="materialize-textarea validate" data-error=".errorTxt7"></textarea>
                  <label for="ccomment">Your comment *</label>
                  <div class="errorTxt7"></div>
                </div> -->
<!--                 <div class="col s12">
                  <p>Gender </p>
                  <p>
                    <label>
                      <input name="gender" type="radio" checked />
                      <span>Male</span>
                    </label>
                  </p>

                  <label>
                    <input name="gender" type="radio" />
                    <span>Female</span>
                  </label>
                  <div class="input-field">
                    <div class="errorTxt8"></div>
                  </div>
                </div> -->
<!--                 <div class="col s12">
                  <label for="tnc_select">T&C *</label>
                  <p>
                    <label>
                      <input type="checkbox" id="tnc_select" />
                      <span>Please agree to our policies</span>
                    </label>
                  </p>
                  <div class="input-field">
                    <div class="errorTxt6"></div>
                  </div>
                </div> -->
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
    <!-- END: Page Main-->
@endsection