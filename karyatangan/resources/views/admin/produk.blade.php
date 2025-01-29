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
    <title>Produk</title>
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
        <!-- <div class="sidebar-brand-text mx-3">Catering Rosita</div> -->
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
          <span style="font-weight: bold">Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/pegawai">
          <i class="fas fa-fw fa-check-square"></i>
          <span style="font-weight: bold;">Events</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/pegawai">
          <i class="fas fa-fw fa-user"></i>
          <span style="font-weight: bold;">Employees</span>
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
          <!-- <h5>Selamat Datang Owner!</h5> -->
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
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                    <h1 class="h3 mb-0 text-gray-800">Kelola Data Produk</h1>
                </div>

                <!-- Content Row -->
                <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <a class="btn mx-3 my-1" style="width: 220px; background-color: #e6a4b4; color: white;" href="/tambahkategori">
                        (+) Tambah Produk
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Produk</th>
                        <th>Status</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php
                        $no = 1;
                        foreach ($kategori as $value) : ?> -->
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Bag Charm</td>
                                <td class="text-center">Tersedia</td>
                                <td class="text-center"><img src="/img/<?= esc($value['foto']); ?>" alt="Foto" style="width: 100px; height: auto;"></td>
                                <td class="text-center">
                                    <div style="display: flex; justify-content: center; gap: 10px;">
                                        <button class="btn btn-warning" title="Edit" onclick="editKategori()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger" title="Hapus" onclick="hapusKategori()">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        </div>
        <!-- End of Main Content -->

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