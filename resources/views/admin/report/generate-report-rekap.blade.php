@extends('layouts.admin.master.master')
  
@section('content')    
  <!--Main wrapper start-->
    <div id="main-wrapper">

        <!--Nav start-->
       @include('layouts.admin.navbar.navbar')
       <!--Nav end-->

       <!--Sidebar start-->
       @include('layouts.admin.sidebar.sidebar')
       <!--Sidebar end-->


        <!--Content body start-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Seleat datang kembali di Aplikai APM</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Generate Report</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <div class="p-3">

                    <div class="container mt-3">
                        <div class="card">
                            <div class="card-header">
                                <a href="#">
                                    <i class="bi bi-printer-fill size-1 position-absolute text-dark"></i>
                                </a>
                            </div>
                            <div class="card-body report">
                                <div class="row align-items-center"> <!-- Menggunakan 'align-items-center' untuk teks tengah dan gambar di sisi kiri -->
                                    <div class="col-md-2">
                                        <img src="assetsusers/img/print/jawabarat.png" width="100px" alt="">
                                    </div>
                                    <div class="col-md-9 col-lg-8">
                                        <h3 class="text-center font-weight-bold">PEMERINTAH DAERAH PROVINSI JAWA BARAT</h3>
                                        <h3 class="text-center font-weight-bold">KOTA BANJAR</h3>
                                        <div class="text-center">
                                            <li class="fa fa-bars"></li> Jl. Banyu Mengalir No. 123 Jawa Barat KP. 12345 <li
                                                class="fa fa-phone"></li> +1 1233456788
                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="assetsusers/img/print/kotabanjar.png" width="140px" alt="">
                                    </div>
                                </div>
                                <hr class="mt-5" style="height: 4px;  background-color: black;">
                                <div class="col-md-12 col-lg-12 mt-5">
                                    Laporan Pengaduan Bulan : Januari 2024
                                </div>
                                <div class="container-responsive mt-3">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20 mt-5">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Jenis Pengaduan</th>
                                                    <th>Jumlah</th>
                                                    <th>Ketegringan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach ($kategoriCounts as $no => $kategoriCount)
                                                    <tr>
                                                        <td>{{ $no + 1 }}</td>
                                                        <td>{{ $kategoriCount->kategori->kategori }}
                                                        </td>
                                                        <td>{{ $kategoriCount->count }}</td>
                                                        <td></td> <!-- Keterangan jika ada -->
                                                    </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4 text-right"> <!-- Menggunakan 'text-right' untuk teks di sebelah kanan -->
                                        Banjar, Februari 2024 <br>
                                        Petugas
                                        <br><br><br><br>
                                        <b> Nama Petugas</b>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--Content body end-->

        <!--footer start-->
        @include('layouts.admin.footer.footer')
        <!--footer end-->
    </div>
@endsection