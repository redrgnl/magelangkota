  <!-- menghubungkan ke master -->
@extends('/admin/master')

<!-- page main -->
@section('konten')
     <div id="main">
 <!-- Scroll - Vertical and Horizontal -->

  <div class="row">
    <div class="col s12 m12 l12">
      <div id="button-trigger" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">DataTables example</h4>
          <div class="row">
            <div class="col s12">
              <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables
                is to call the construction function.</p>
              <p>Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this
                example.</p>
            </div>
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title">Scroll - vertical And Horizontal
          </h4>
          <div class="row">
            <div class="col s12">
              <table id="scroll-vert-hor" class="display nowrap">
                <thead>
                  <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Extn.</th>
                    <th>E-mail</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Extn.</th>
                    <th>E-mail</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>5421</td>
                    <td>t.nixon@datatables.net</td>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>5421</td>
                    <td>t.nixon@datatables.net</td>
                  </tr>
                

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
    <!-- END: Page Main-->
@endsection
