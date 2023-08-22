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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <a href="masyarakat.html">
                            <div class="card text-center">
                                    <div class="stat-icon d-inline-block">
                                        <i class="bi bi-people-fill text-success"></i>
                                    </div>
                                    <div class="stat-content d-inline-block">
                                        <div class="stat-text font-weight-bold">Masyarakat</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="kategori.html">
                            <div class="card text-center">
                                    <div class="stat-icon d-inline-block">
                                        <i class="fa-solid fa-book text-warning"></i>
                                    </div>
                                    <div class="stat-content d-inline-block">
                                        <div class="stat-text font-weight-bold">Kategoti</div>
                                        <div class="stat-digit">112</div>
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="laporanmasuk.html">
                            <div class="card text-center">
                                <div class="stat-icon d-inline-block">
                                    <i class="bi bi-envelope-check text-danger"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text font-weight-bold">Laporan</div>
                                    <div class="stat-digit">1,321</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="laporanmasuk.html">
                        <div class="card text-center">
                                <div class="stat-icon d-inline-block">
                                    <i class="bi bi-envelope-exclamation text-success"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text font-weight-bold">Laporan Baru</div>
                                    <div class="stat-digit">1,012</div>
                                </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Laporan Masuk</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tgl Pengaduan</th>
                                                <th>Judul Pengaduan</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="detail-pengaduan.html" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                 <td>20/04/2017</td>
                                                <td>Banjir Karena Tanah Longsor</td>
                                                <td>Bencana</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                 <td>20/04/2017</td>
                                                <td>Air Sungai Mampet Karena Sampah</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                 <td>20/04/2017</td>
                                                <td>Sampah</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
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
        <!--Content body end-->


        <!--Footer start-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--Footer end-->
    </div>
@endsection
   
  