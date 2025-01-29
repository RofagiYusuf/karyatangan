@extends('layouts.owner')
@section('content')
        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                  <h1 class="h3 mb-0 text-gray-800">Kelola Data Pegawai</h1>
              </div>

              <!-- Content Row -->
              <div class="card shadow mb-4 mt-3">
              <div class="card-header py-3">
                  <a class="btn mx-3 my-1" style="width: 220px; background-color: #e6a4b4; color: white;" href="{{ route('tambah_pegawai') }}">
                      (+) Tambah Pegawai
                  </a>
              </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($pegawai as $p => $pegawai)
                                  <tr>
                                    <td>{{ $p + 1 }}</td>
                                    <td>{{ $pegawai->nama_pegawai }}</td>
                                    <td>{{ $pegawai->jabatan }}</td>
                                    <td><img src="{{ asset('storage/'. $pegawai->foto_pegawai) }}" alt="Foto Pegawai" style="max-width:250px"></td>
                                    <td>
                                        <div style="display: flex; justify-content: center; gap: 10px;">
                                          <a href="{{ route('edit_pegawai', $pegawai->id) }}">
                                            <button class="btn btn-warning" title="Edit" data-toggle="modal">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                          </a>
                                          <form action="{{ route('delete_pegawai', $pegawai->id) }}" method="POST" onsubmit="return confirmDelete()">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">
                                                  <i class="fas fa-trash-alt"></i>
                                              </button>
                                          </form>
                                        </div>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
            </div>
            <!-- End of Container Fluid -->
        </div>
        <!-- End of Main Content -->
@endsection