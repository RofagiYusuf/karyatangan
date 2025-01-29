@extends('layouts.owner')
@section('content')
      <!-- Main Content -->
      <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-900">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
          <!-- Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div
                      class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                    >
                      Products
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href="/product" id="product"
                        ><i class="fas fa-link"></i> 60</a
                      >
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-heart fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div
                      class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                    >
                      Events
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href="/produk" id="produk"
                        ><i class="fas fa-link"></i>
                        2</a
                      >
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-check-square fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div
                      class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                    >
                      Employees
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <a href="/produk" id="produk"
                        ><i class="fas fa-link"></i>
                        10</a
                      >
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Other cards can be repeated similarly -->
        </div>
      </div>
    </div>
@endsection