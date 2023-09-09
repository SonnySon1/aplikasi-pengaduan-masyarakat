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
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Selamat datang kembali di Aplikai APM</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Masyarakat</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        @if ($dataMasyarakat->is_google_user)
                                            <img src="{{ $dataMasyarakat->foto }}" class="img-fluid rounded-circle" alt="">
                                        @else
                                            <img src="{{ asset('photos/profile-photo/'.$dataMasyarakat->foto ) }}" class="img-fluid rounded-circle" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        @if ($dataMasyarakat->role == "admin")
                                                            <h4 class="text-primary"><b class="text-danger">Admin</b><b class="text-dark"> | </b>{{ $dataMasyarakat->nama }}</h4>
                                                        @elseif ($dataMasyarakat->role == "petugas")
                                                            <h4 class="text-primary"><b class="text-warning">Petugas</b><b class="text-dark"> | </b>{{ $dataMasyarakat->nama }}</h4>
                                                        @else
                                                             <h4 class="text-primary"><b class="text-success">Masyarakat</b><b class="text-dark"> | </b>{{ $dataMasyarakat->nama }}</h4>

                                                        @endif
                                                        <p>Nama</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted">{{ $dataMasyarakat->email }}</h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">{{ $dataMasyarakat->no_telepon }}</h4>
                                                        <p>Phone No.</p>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-us" data-toggle="tab" class="nav-link active show"><i class="bi bi-people-fill"></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-us" class="tab-pane fade active show">
                                                <div class="profile-personal-info pt-5">
                                                    <h4 class="text-primary mb-4">Detail Informasi Masyarakat</h4>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $dataMasyarakat->nama }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nik <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>  
                                                        <div class="col-9"><span>{{ $dataMasyarakat->nik }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Alamat <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $dataMasyarakat->alamat }}</span>
                                                        </div>
                                                    </div>
                                                    @if ($dataMasyarakat->jenis_kelamin == "L")
                                                        <div class="row mb-4">
                                                                <div class="col-3">
                                                                    <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-9"><span>Laki Laki</span ></div>
                                                        </div>
                                                    @elseif ($dataMasyarakat->jenis_kelamin == "P")
                                                        <div class="row mb-4">
                                                            <div class="col-3">
                                                                <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-9"><span>Perempuan</span ></div>
                                                        </div>        
                                                    @endif
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">No Telepon <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $dataMasyarakat->no_telepon }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $dataMasyarakat->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Peran<span class="pull-right">:</span></h5>
                                                        </div>
                                                            <div class="col-9"><span class="text-success">Masyarakat</span>
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
                </div>
            </div>
        </div>
        <!--Content body end-->

        <!--footer start-->
        @include('layouts.admin.footer.footer')
        <!--footer end-->
    </div>
@endsection
