<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <title>Dashboard</title>
    <style>
      .navbar {
        position: fixed;
        width: calc(100% - 225px);
        top: 0;
        z-index: 1000;
      }

      body {
        padding-top: 0;
      }

      #accordionSidebar {
        z-index: 1;
        position: fixed;
        top: 0;
        height: 100%;
      }

      #content-wrapper {
        margin-left: 225px;
        padding-top: 80px;
      }

      .sidebar .nav-item:hover {
        background-color: rgba(255, 255, 255, 0.2);
      }

      .sidebar .nav-link {
        white-space: nowrap;
      }

      .sidebar .nav-link .fas {
        margin-right: 1rem;
      }

      .sidebar-brand {
        text-align: center;
      }
    </style>
  </head>

  <body>
    <!-- Sidebar -->
    <ul
      style="background-color: #e6a4b4"
      class="navbar-nav sidebar sidebar-dark accordion"
      id="accordionSidebar"
    >
      <!-- Sidebar - Brand -->
      <a
        style="background-color: #f5eee6"
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="index.html"
      >
        <div class="sidebar-brand-icon">
          <img
            style="width: 90px"
            src="../../assets/img/logo.png"
            alt="Catering Rosita"
          />
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/dasboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">Interface</div>

      <!-- Nav Items -->
      <li class="nav-item">
        <a class="nav-link" href="/akun">
          <i class="fas fa-fw fa-heart"></i>
          <span style="font-weight: bold"> Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/pegawai">
          <i class="fas fa-fw fa-check-square"></i>
          <span style="font-weight: bold;">Events</span>
        </a>
      </li>
    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Topbar -->
      <nav
        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
      >
        <div class="input-group">
          <h5>Selamat Datang Admin!</h5>
        </div>
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
          <li class="nav-item dropdown no-arrow">
            <a class="dropdown-item" href="#" onclick="logout()">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </li>
        </ul>
      </nav>

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
                      <a href="#produk.html" id="produk"
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
                      <a href="/events" id="event"
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

          <!-- Other cards can be repeated similarly -->
        </div>
      </div>
    </div>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scripts -->
    <script src="/asset/vendor/jquery/jquery.min.js"></script>
    <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/asset/js/sb-admin-2.min.js"></script>
    <script src="/asset/vendor/chart.js/Chart.min.js"></script>
    <script src="/asset/js/demo/chart-area-demo.js"></script>
    <script src="/asset/js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function logout() {
        Swal.fire({
          text: "Apakah Anda yakin ingin logout?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Logout",
        }).then((result) => {
          if (result.isConfirmed) {
            fetch(`/auth/proses_logout`, {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
            })
              .then((response) => {
                if (response.ok) {
                  window.location.href = "/login";
                } else {
                  Swal.fire({
                    text: "Logout gagal!",
                    icon: "error",
                  });
                }
              })
              .catch((error) => {
                Swal.fire({
                  text: "Terjadi kesalahan!",
                  icon: "error",
                });
              });
          }
        });
      }
    </script>
  </body>
</html>
