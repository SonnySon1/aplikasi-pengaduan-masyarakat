@extends('layouts.admin.master.master')

@section('content')    
    <!-- wrapper start-->
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
                <div class="">
                    <div class="col-sm-6 p-md-0">
                        <div class="d-flex">
                            <h4 class="text-dark">Laporan Masuk /</h4>
                            <h4 class="text-dark font-weight-bold">Detail</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Add Data Masyarakat</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="get">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label font-weight-bold text-dark" for="val-nik">Judul
                                                        <span class="font-weight-bold">:</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:Limbah Pabrik ABCD</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label font-weight-bold text-dark" for="val-nik">Kategori Pengaduan
                                                        <span class="font-weight-bold">:</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:Pencemaran</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label font-weight-bold text-dark" for="val-nik">Tanggal Laporan
                                                        <!-- <span class="font-weight-bold">:</span> -->
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:22 Oktober 2024</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label text-dark font-weight-bold" for="val-alamat">Nik Pelapor</label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:3207172222000000</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label text-dark font-weight-bold" for="val-alamat">Nama Pelapor</label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:Lukman</label>
                                                    </div>
                                                </div>
                                                <form action="">
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label text-dark font-weight-bold" for="val-bulan2">Status
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" id="val-bulan2" name="val-bulan2">
                                                                <option value="new">New</option>
                                                                <option value="process">Process</option>
                                                                <option value="Selesai">Selesai</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-arrow-clockwise"></i> Update Status</button>
                                        </div>
                                    </form>
                                    <div class="mt-5 d-flex flex-wrap">
                                        <div>
                                            <img src="assetsusers/img/img/air.jpg" alt="" width="400">
                                        </div>
                                        <div style="width: 600px;" class="ml-5 mt-3 mt-md-0">
                                            Ipsum dolor sit amet consectetur adipiscing elit ut. Libero justo laoreet sit amet cursus. Massa vitae tortor condimentum lacinia quis vel eros donec. Auctor augue mauris augue neque gravida. Pharetra et ultrices neque ornare aenean euismod elementum. Mattis aliquam faucibus purus in massa tempor. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Nulla aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Nisl condimentum id venenatis a condimentum vitae sapien. Magna ac placerat vestibulum lectus mauris ultrices eros in.
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="assetsusers/img/blog/comments-2.jpg" class="rounded-circle" width="50" alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <b>Jhon Doe</b><br>
                                                    Di tanggapi pada tanggal 25 oktober 2024</p>
                                                </div>
                                            </div>
                                            <div>
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error maxime autem ut quidem consequatur aliquid animi aut itaque dolor eius! Perferendis ea quis obcaecati? Illo temporibus ullam harum error perspiciatis!
                                            </div>
                                            <div class="mt-3">
                                                <form action="" class="d-flex">
                                                    <input type="text" name="tanggapan" class="w-100 p-1" id="" placeholder="Isi Tanggapan">
                                                    <button class="btn btn-danger p-1 w-15 rounded-0">Kirm Tanggapan</button>
                                                </form>
                                            </div>
                                        </div>
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
