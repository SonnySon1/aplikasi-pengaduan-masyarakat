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
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Profile</li>
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
                                        <img src="{{ asset('photos/profile-photo/'.auth()->user()->foto ) }}" class="img-fluid" style="min-width: 150px; min-height: 150px; max-width: 150px; max-height: 150px; border-radius: 100px" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        @if (auth()->user()->role == "admin")
                                                            <h4 class="text-primary"><b class="text-danger">Admin</b><b class="text-dark"> | </b>{{ auth()->user()->nama }}</h4>
                                                        @elseif (auth()->user()->role == "petugas")
                                                            <h4 class="text-primary"><b class="text-warning">Petugas</b><b class="text-dark"> | </b>{{ auth()->user()->nama }}</h4>
                                                        @endif
                                                        <p>Nama</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted">{{ auth()->user()->email }}</h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">{{ auth()->user()->no_telepon }}</h4>
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
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link"><i class="bi bi-gear-fill"></i></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-us" class="tab-pane fade active show">
                                                <div class="profile-about-us">
                                                    <div class="pt-4 border-bottom-1 pb-4">
                                                        <h4 class="text-primary">Tentang Kami</h4>
                                                            <p>Selamat datang di APM, aplikasi yang berdedikasi untuk memberdayakan suara masyarakat dalam mencari solusi atas permasalahan sekitar. Kami hadir sebagai jembatan antara Anda dan pihak berwenang, bertujuan untuk menciptakan perubahan positif dan lingkungan yang lebih baik.</p>
                                                    </div>
                                                </div>
                                                <div class="profile-contactus pt-2 border-bottom-1 pb-2">
                                                    <h4 class="text-primary mb-4">Hubungi Kami</h4>
                                                    <a href="" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                                                    <a href="" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10"><i class="bi bi-instagram"></i> Instagram</a>
                                                </div>
                                                <div class="profile-personal-info pt-5">
                                                    <h4 class="text-primary mb-4">Informasi Pribadi</h4>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->nama }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nik <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->nik }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Alamat <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->alamat }}</span>
                                                        </div>
                                                    </div>
                                                    @if (auth()->user()->jenis_kelamin == "L")
                                                        <div class="row mb-4">
                                                                <div class="col-3">
                                                                    <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-9"><span>Laki Laki</span ></div>
                                                        </div>
                                                    @elseif (auth()->user()->jenis_kelamin == "P")
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
                                                        <div class="col-9"><span>{{ auth()->user()->no_telepon }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Peran<span class="pull-right">:</span></h5>
                                                        </div>
                                                            @if (auth()->user()->role == "admin")
                                                                <div class="col-9"><span class="text-danger">Admin</span>
                                                            @elseif (auth()->user()->role == "petugas")
                                                                <div class="col-9"><span class="text-warning">Petugas</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Pengaturan Akun</h4>
                                                        <form action="/update-profile" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Nama</label>
                                                                    <input name="nama" type="text" placeholder="nama kamu" class="form-control" value="{{ auth()->user()->nama }}">
                                                                    <small class="text-danger">@error('nama') {{$message}} @enderror</small>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Nik</label>
                                                                    <input name="nik" type="number" placeholder="masukan nik" class="form-control" value="{{ auth()->user()->nik }}">
                                                                    <small class="text-danger">@error('nik') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label>Jenis Kelamin</label>
                                                                    <select class="form-control" name="jenis_kelamin" id="inputState">
                                                                        <option @if(auth()->user()->jenis_kelamin == NULL) selected @endif value="" >--Select Jenis Kelamin--</option>
                                                                        <option @if(auth()->user()->jenis_kelamin == "L") selected @endif value="L">Laki-Laki</option>
                                                                        <option @if(auth()->user()->jenis_kelamin == "P") selected @endif value="P">Perempuan</option>
                                                                    </select>
                                                                    <small class="text-danger">@error('jenis_kelamin') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label>No telepon</label>
                                                                    <input name="no_telepon" type="tel" placeholder="no telepon kamu" class="form-control" value="{{ auth()->user()->no_telepon }}">
                                                                    <small class="text-danger">@error('no_telepon') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label>Alamat</label>
                                                                    <input name="alamat" type="tel" placeholder="no telepon kamu" class="form-control" value="{{ auth()->user()->alamat }}">
                                                                    <small class="text-danger">@error('alamat') {{$message}} @enderror</small>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Foto Profile</label>
                                                                    <input name="foto" type="file" class="form-control">
                                                                    <small class="text-danger">@error('foto') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit"><i class="bi bi-arrow-clockwise"></i> Update</button>
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
            </div>
        </div>
        <!--Content body end-->

        <!--footer start-->
        @include('layouts.admin.footer.footer')
        <!--footer end-->
    </div>
@endsection
