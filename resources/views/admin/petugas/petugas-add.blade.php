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
                            <p class="mb-0">Selamat datang kembali di Aplikai APM</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Petugas</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Pata Petugas</a></li>
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
                                    <form class="form-valide" action="/petugas-store" method="post" autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_nik">NIK
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                     <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_nik" name="val_nik" placeholder="Masukan NIK.." autofocus>
                                                        <small class="text-danger">@error('val_nik') {{$message}} @enderror</small>
                                                        @if (Session('error'))                                                    
                                                            <small class="text-danger">{{Session('error')}}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_nama">Nama <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_nama" name="val_nama" placeholder="Masukan Nama..">
                                                        <small class="text-danger">@error('val_nama') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_jeniskelamin">Jenis Kelamin
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="val_jeniskelamin" name="val_jeniskelamin">
                                                            <option value="">--Pilih Jenis Kelamin--</option>
                                                            <option value="L">Laki-Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                        <small class="text-danger">@error('val_jeniskelamin') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_notelepon">No Telepon
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="tel" class="form-control" id="val_notelepon" name="val_notelepon" placeholder="Masukan No Telepon..">
                                                        <small class="text-danger">@error('val_notelepon') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_foto">Foto
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="file" class="form-control" id="val_foto" name="val_foto" placeholder="Masukan No Telepon..">
                                                        <small class="text-danger">@error('val_foto') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_alamat">Alamat <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_alamat" name="val_alamat" placeholder="Masukan Alamat..">
                                                        <small class="text-danger">@error('val_alamat') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_email">Email <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_email" name="val_email" placeholder="Masukan Email">
                                                        <small class="text-danger">@error('val_email') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_password">Password <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_password" name="val_password" placeholder="Masukan Password">
                                                        <small class="text-danger">@error('val_password') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_jabatan">Jabatan
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="val_jabatan" name="val_jabatan">
                                                            <option value="">--Pilih Jabatan--</option>
                                                            <option value="petugas">Petugas</option>
                                                            <option value="admin">Admin</option>
                                                        </select>
                                                        <small class="text-danger">@error('val_jabatan') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <a href="/petugas" class="btn btn-outline-warning text-warning"><i class="bi bi-backspace"></i>Kembali</a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>

        <!--footer start-->
        @include('layouts.admin.footer.footer')
        <!--footer end-->

    </div>
@endsection
