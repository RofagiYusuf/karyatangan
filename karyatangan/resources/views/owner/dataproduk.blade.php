@extends('layouts.owner')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4 mt-3">
    
    <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
        <tr>
            <th>NO</th>
            <th>Produk</th>
            <th>Status</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <!-- <?php
            // $no = 1;
            // foreach ($kategori as $value) : ?> 
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Bag Charm</td>
                    <td class="text-center">Tersedia</td>
                    <td class="text-center"><img src="/img/<?php // esc($value['foto']); ?>" alt="Foto Kategori" style="width: 100px; height: auto;"></td>
                </tr>
        <?php // endforeach; ?> -->

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
@endsection