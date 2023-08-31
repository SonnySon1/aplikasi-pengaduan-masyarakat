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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Petugas</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Pata Petugas</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Edit Data Petugas</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    @php
                                        $petugas_i_cryprt = Crypt::encrypt($dataPetugas->id)
                                    @endphp
                                    <form class="form-valide" action="/petugas-update/{{ $petugas_i_cryprt }}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_nik">NIK
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                     <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_nik" name="val_nik" placeholder="Masukan NIK.." autofocus value="{{ $dataPetugas->nik }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_nama">Nama <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_nama" name="val_nama" placeholder="Masukan Nama.." value="{{ $dataPetugas->nama }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_jeniskelamin">Jenis Kelamin
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="val_jeniskelamin" name="val_jeniskelamin">
                                                            <option value="">--Pilih Jenis Kelamin--</option>
                                                            <option value="L" @if ($dataPetugas->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                                                            <option value="P" @if ($dataPetugas->jenis_kelamin == "P") selected @endif>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_notelepon">No Telepon
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="tel" class="form-control" id="val_notelepon" name="val_notelepon" placeholder="Masukan No Telepon.." value="{{ $dataPetugas->no_telepon }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_alamat">Alamat <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_alamat" name="val_alamat" placeholder="Masukan Alamat.." value="{{ $dataPetugas->alamat }}">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_email">Email <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_email" name="val_email" placeholder="Masukan Email" value="{{ $dataPetugas->email }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_password">Password <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_password" name="val_password" placeholder="Masukan Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_jabatan">Jabatan
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="val_jabatan" name="val_jabatan">
                                                            <option value="">--Pilih Jabatan--</option>
                                                            <option value="masyarakat" @if ($dataPetugas->role == "masyarakat") selected @endif>Masyarakat</option>
                                                            <option value="petugas" @if ($dataPetugas->role == "petugas") selected @endif>Petugas</option>
                                                            <option value="admin" @if ($dataPetugas->role == "admin") selected @endif>Admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <a href="/petugas" class="btn btn-outline-warning text-warning"><i class="bi bi-backspace"></i>Kembali</a>
                                            <button type="submit" class="btn btn-primary">Update</button>
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
