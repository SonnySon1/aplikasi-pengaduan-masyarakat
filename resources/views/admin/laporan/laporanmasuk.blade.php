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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Genearte Laporan</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Add Data Petugas</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="get">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="">Filter Berdasarkan Status</label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="" name="">
                                                            <option value="">--Filter Status--</option>
                                                            <option value="new">New</option>
                                                            <option value="perocess">Process</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="">Filter Berdasarkan Kategor</label>
                                                        <div class="col-lg-12">
                                                            <select class="form-control" id="" name="">
                                                                <option value="">--Pilih Kategori--</option>
                                                                <option value="pencemaran">Pencemaran</option>
                                                                <option value="bencanaalam">Bencana Alam</option>
                                                            </select>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-5">
                                            <table class="table student-data-table m-t-20">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tgl Pengaduan</th>
                                                        <th>Nama Pengadu</th>
                                                        <th>Kategori</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                            <td>20/04/2017</td>
                                                        <td>Agus</td>
                                                        <td>Pencemaran</td>
                                                        <td><span class="btn btn-primary btn-sm">New</span></td>
                                                        <td><a href="/laporanmasuk-detail" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                            <td>20/04/2017</td>
                                                        <td>Dimas</td>
                                                        <td>Pencemaran</td>
                                                        <td><span class="btn btn-warning btn-sm text-white">Process</span></td>
                                                        <td><a href="/laporanmasuk-detail" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                            <td>20/04/2017</td>
                                                        <td>Saipudin</td>
                                                        <td>Bancana alam</td>
                                                        <td><span class="btn btn-success btn-sm text-white">Selesai</span></td>
                                                        <td><a href="/laporanmasuk-detail" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                            <td>20/04/2017</td>
                                                        <td>Jamil</td>
                                                        <td>Pencemaran</td>
                                                        <td><span class="btn btn-primary btn-sm">New</span></td>
                                                        <td><a href="/laporanmasuk-detail" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                            <td>20/04/2017</td>
                                                        <td>Bagas</td>
                                                        <td>Pencemaran</td>
                                                        <td><span class="btn btn-success btn-sm text-white">Selesai</span></td>
                                                        <td><a href="/laporanmasuk-detail" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                            <td>20/04/2017</td>
                                                        <td>Rijal</td>
                                                        <td>Pencemaran</td>
                                                        <td><span class="btn btn-primary btn-sm">New</span></td>
                                                        <td><a href="/laporanmasuk-detail" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                            <td>20/04/2017</td>
                                                        <td>Riki</td>
                                                        <td>Pencemaran</td>
                                                        <td><span class="btn btn-primary btn-sm">New</span></td>
                                                        <td><a href="/laporanmasuk" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>=
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
