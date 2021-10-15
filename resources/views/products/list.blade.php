@extends('layouts.master')

@section('content')

  <div class="main-content p-4">
    <section class="section">
      <!-- <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
          <h4 class="page-title m-b-0">Advance Table</h4>
        </li>
        <li class="breadcrumb-item">
          <a href="index.html">
            <i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active">Table</li>
        <li class="breadcrumb-item active">Advance</li>
      </ul> -->
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Advanced Table</h4>
                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                      <th class="text-center">ID</th>
                      <th>Name</th>
                      <th>Catagory</th>
                      <th>Price</th>
                      <th>Product</th>
                      <!-- <th>Status</th> -->
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">01</td>
                      <td>A</td>
                      <td>1</td>
                      <td>0.00</td>
                      <td>
                        <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle" width="35"
                          data-toggle="tooltip" title="Wildan Ahdian">
                      </td>
                      <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr>
                    <!-- <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                            id="checkbox-2">
                          <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Redesign homepage</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="40%">
                          <div class="progress-bar" data-width="40"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle" width="35"
                          data-toggle="tooltip" title="Nur Alpiana">
                      </td>
                      <td>2018-04-10</td>
                      <td>
                        <div class="badge badge-info">Todo</div>
                      </td>
                      <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                            id="checkbox-3">
                          <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Backup database</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                          <div class="progress-bar bg-warning" data-width="70"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle" width="35"
                          data-toggle="tooltip" title="Rizal Fakhri">
                      </td>
                      <td>2018-01-29</td>
                      <td>
                        <div class="badge badge-warning">In Progress</div>
                      </td>
                      <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                            id="checkbox-4">
                          <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Input data</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                          <div class="progress-bar bg-success" data-width="100"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                          data-toggle="tooltip" title="Rizal Fakhri">
                      </td>
                      <td>2018-01-16</td>
                      <td>
                        <div class="badge badge-success">Completed</div>
                      </td>
                      <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr> -->
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('page_script')
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <!-- <script src="assets/js/page/advance-table.js"></script> -->

  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/page/advance-table.js') }}"></script>


@endsection