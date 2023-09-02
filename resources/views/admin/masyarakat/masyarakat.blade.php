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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Masyarakat</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Masyarakat</h4>
                                <input class="search" type="text" name="search" id="seach" placeholder="search">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataMasyarakat as $no=>$masyarakat)                                                
                                                <tr>
                                                    <td>{{ $no+1 }}</td>
                                                    <td>{{ $masyarakat->nik }}</td>
                                                    <td>{{ $masyarakat->nama }}</td>
                                                    <td>{{ $masyarakat->alamat }}</td>
                                                    <td>
                                                        @php
                                                            $masyarakat_i_encrypt = Crypt::encrypt($masyarakat->id);
                                                        @endphp
                                                        <a href="/masyarakat-edit/{{ $masyarakat_i_encrypt }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                        <a href="/masyarakat-detail/{{ $masyarakat_i_encrypt }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="/masyarakat-add" class="border border-secondary btn-block text-center p-2 btn-hover-primary btn-sm rounded"><i class="bi bi-plus"></i> Add data Masyarakat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!--Content body end-->


        <!--footer strat-->
        @include('layouts.admin.footer.footer')
        <!--footer end-->

    </div>
@endsection

  