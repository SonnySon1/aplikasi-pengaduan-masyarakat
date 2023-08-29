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
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label font-weight-bold text-dark" for="val-nik">Judul
                                                        <span class="font-weight-bold">:</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:{{ $dataLaporan->judul_pengaduan }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label font-weight-bold text-dark" for="val-nik">Kategori Pengaduan
                                                        <span class="font-weight-bold">:</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:{{ $dataLaporan->kategori->kategori }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label font-weight-bold text-dark" for="val-nik">Tanggal Laporan
                                                        <!-- <span class="font-weight-bold">:</span> -->
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:{{ $dataLaporan->tgl_pengaduan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label text-dark font-weight-bold" for="val-alamat">Nik Pelapor</label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:{{ $dataLaporan->user->nik }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label text-dark font-weight-bold" for="val-alamat">Nama Pelapor</label>
                                                    <div class="col-lg-6">
                                                        <label for="" class="text-dark">:{{ $dataLaporan->user->nama }}</label>
                                                    </div>
                                                </div>
                                                <form action="/laporan-update/{{ $dataLaporan->id }}" method="POST">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label text-dark font-weight-bold" for="status">Status
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" id="status" name="status">
                                                                <option value="new" @if ($dataLaporan->status == "new") selected  @endif value="new">New</option>
                                                                <option value="accepted" @if ($dataLaporan->status == "accepted") selected  @endif value="Selesai">Accepted</option>
                                                                <option value="process" @if ($dataLaporan->status == "proccess") selected  @endif value="process">Process</option>
                                                                <option value="finished" @if ($dataLaporan->status == "finished") selected  @endif value="Selesai">Finished</option>
                                                                <option value="rejected" @if ($dataLaporan->status == "rejected") selected  @endif value="Selesai">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100"><i class="bi bi-arrow-clockwise"></i> Update Status</button>
                                    </form>
                                    </div>
                                    <div class="mt-5 d-flex flex-wrap">
                                        <div>
                                            <img src="{{ asset('assetsusers/img/img/air.jpg') }}" alt="" width="400">
                                        </div>
                                        <div style="width: 600px;" class="ml-5 mt-3 mt-md-0">
                                            {{ $dataLaporan->laporan_pengaduan }}
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('assetsusers/img/blog/comments-2.jpg') }}" class="rounded-circle" width="50" alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <b>Jhon Doe</b><br>
                                                    <p>Di tanggapi pada tanggal 25 oktober 2024</p>
                                                </div>
                                            </div>
                                            <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error maxime autem ut quidem consequatur aliquid animi aut itaque dolor eius! Perferendis ea quis obcaecati? Illo temporibus ullam harum error perspiciatis!</div>
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
