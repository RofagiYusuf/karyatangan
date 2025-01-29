@extends('layouts.owner')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Card Header - Dropdown -->
    <div style="background-color: pink;" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 style="color: white;" class="m-0 font-weight-bold">Form Pegawai</h6>
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <div class="container">
            <form action="{{ route('update_pegawai', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value={{ old('pegawai', $pegawai->nama_pegawai) }}>
                    <div id="error_nama_pegawai" class="invalid-feedback"></div>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan" required>
                            <option value="casir" {{ old('jabatan', $pegawai->jabatan) == "casir" ? 'selected' : ''}}>Casir</option>
                            <option value="crafter" {{ old('jabatan', $pegawai->jabatan) == "crafter" ? 'selected' : ''}}>Crafter</option>
                            <option value="content-creator" {{ old('jabatan', $pegawai->jabatan) == "content-creator" ? 'selected' : ''}}>Content Creator</option>
                            <option value="freelancer" {{ old('jabatan', $pegawai->jabatan) == "freelancer" ? 'selected' : ''}}>Freelancer</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="foto_pegawai">Foto</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_pegawai" name="foto_pegawai" accept="image/*">
                            <label class="custom-file-label" for="foto_pegawai">Pilih gambar..</label>
                        </div>
                        <div id="error_foto" class="invalid-feedback"></div>
                        <br>
                        <label for="foto_old">Foto Pegawai Sebelumnya</label><br>
                        <img src="{{ asset('storage/'. $pegawai->foto_pegawai) }}" name="foto_old" alt="Foto Pegawai" style="max-width: 150px;">
                    </div>


                <div>
                    <button type="submit" class="btn btn-primary">Tambah pegawai</button>
                    <button type="button" class="btn btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Main Content -->
@endsection