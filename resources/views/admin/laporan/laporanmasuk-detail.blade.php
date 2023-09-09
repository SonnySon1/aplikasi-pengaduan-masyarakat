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
                            <h4 class="text-dark">Laporan Detail /</h4>
                            <h4 class="text-dark font-weight-bold">Detail</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detail Data Laporan</h4>
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
                                                                <option value="process" @if ($dataLaporan->status == "process") selected  @endif value="process">Process</option>
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
                                            <img src='{{ asset("photos/pengaduan-photo/$dataLaporan->foto") }}' alt="" width="400">
                                        </div>
                                        <div style="width: 600px;" class="ml-5 mt-3 mt-md-0">
                                            {{ $dataLaporan->laporan_pengaduan }}
                                        </div>
                                    </div>
                                     
                                    <div class="mt-5">
                                        <h2 class="mb-3">Tanggapan</h2>
                                        <hr>
                                        <div class="mt-1">
                                            @foreach ($dataTanggapan as $tanggapan)
                                            <div class="d-flex mt-2">
                                                @if ($tanggapan->user->is_google_user)
                                                    <img src='{{ $tanggapan->user->foto }}' class="rounded-circle" style="min-width: 35px; max-width: 35px; min-height: 35px; max-height: 35px;" alt="">  
                                                @else
                                                    <img src='{{ asset("photos/profile-photo/".$tanggapan->user->foto) }}' class="rounded-circle" style="min-width: 35px; max-width: 35px; min-height: 35px; max-height: 35px;" alt="">  
                                                @endif
                                                <div class="d-block">
                                                    @if ($tanggapan->user->role == "admin")
                                                        <p class="ml-2"><b class="text-danger">Admin </b><b class="text-dark">|</b> {{ $tanggapan->user->nama }}</p>
                                                    @elseif ($tanggapan->user->role == "petugas")
                                                        <p class="ml-2"><b class="text-warning">Petugas </b><b class="text-dark">|</b> {{ $tanggapan->user->nama }}</p>
                                                    @elseIf( $tanggapan->user->role == "masyarakat"  )
                                                        <p class="ml-2"><b class="text-success">Masyarakat </b><b class="text-dark">|</b> {{ $tanggapan->user->nama }}</p>
                                                    @endif
                                                    <hr style="font-size: 11px" class="ml-2">
                                                        <p style="font-size: 11px" class="ml-2 mt-2" style="margin-top: -15px;">{{ $tanggapan->tanggapan }}</p>     
                                                    <hr style="font-size: 11px" class="ml-2">
                                                </div>
                                            </div>
                                            @endforeach
                                            @php
                                                $datalaporan_i_encrypt = Crypt::encrypt($dataLaporan->id)
                                            @endphp
                                            @if ($dataLaporan->status == "new")
                                                <p><i class="text-danger" style="font-size: 12px">Update Status Untuk Membuat Tanggapan</i></p>
                                                <p style="font-size: 12px">Setelah melakukan sebuah <i class="text-danger">update status</i>,  kamu dapat memberikan tanggapan terkait laporan yang di kirim. Jika laporan di <i class="text-danger">accepted</i>  atau <i class="text-danger">process</i>, akan masuk ke halaman <b class="text-dark">Laporan Proses</b>. Akan tetapi jika laporan <i class="text-danger">finished</i> atau di <i class="text-danger">rejected</i> akan masuk ke halaman<b class="text-dark"> Laporan Selesai</b></p>
                                            @else
                                                <form action="/tanggapan-store/{{ $datalaporan_i_encrypt }}" method="POST" class="mt-2">
                                                    @csrf
                                                    <div class="d-flex">
                                                        <input type="text" name="tanggapan" class="w-100">
                                                        <button class="btn btn-danger">Submit</button>
                                                    </div>
                                                </form>
                                            @endif
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
