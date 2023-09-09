@extends('layouts.admin.master.master')

@section('content')    
    <!--**********************************
        Main wrapper start
    ***********************************-->
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Masyarakat</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Masyarakat</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Add Data Masyarakat</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    @php
                                        $masyarakat_i_cryprt = Crypt::encrypt($dataMasyarakat->id)
                                    @endphp
                                    <form class="form-valide" action="/masyarakat-update/{{ $masyarakat_i_cryprt }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_nik">NIK
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_nik" name="val_nik" placeholder="Masukan NIK.." value="{{ $dataMasyarakat->nik }}">
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
                                                        <input type="text" class="form-control" id="val_nama" name="val_nama" placeholder="Masukan Nama.." value="{{ $dataMasyarakat->nama }}">
                                                        <small class="text-danger">@error('val_nama') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_jeniskelamin">Jenis Kelamin
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="val_jeniskelamin" name="val_jeniskelamin">
                                                            <option @if ($dataMasyarakat->jenis_kelamin == "L") selected @endif value="L">Laki-Laki</option>
                                                            <option @if ($dataMasyarakat->jenis_kelamin == "P") selected @endif value="P">Perempuan</option>
                                                        </select>
                                                        <small class="text-danger">@error('val_jeniskelamin') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_notelepon">No Telepon
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="tel" class="form-control" id="val_notelepon" name="val_notelepon" placeholder="Masukan No Telepon.." value="{{ $dataMasyarakat->no_telepon }}">
                                                        <small class="text-danger">@error('val_notelepon') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_alamat">Alamat <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_alamat" name="val_alamat" placeholder="Masukan Alamat.." value="{{ $dataMasyarakat->alamat }}">
                                                        <small class="text-danger">@error('val_alamat') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                
                                                @if (!$dataMasyarakat->is_google_user)
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_email">Email <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_email" name="val_email" placeholder="Masukan Email" value="{{ $dataMasyarakat->email }}">
                                                        <small class="text-danger">@error('val_email') {{$message}} @enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val_password">Password <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="val_password" name="val_password" placeholder="Masukan Password" value="{{ $dataMasyarakat->password }}" disabled>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val_foto">Foto <span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-12">
                                                            <input type="file" class="form-control" id="val_foto" name="val_foto">
                                                            <small class="text-danger">@error('val_foto') {{$message}} @enderror</small>
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                            </div>
                                        </div>
                                            <a href="/masyarakat" class="btn btn-outline-warning text-warning"><i class="bi bi-backspace"></i>Kembali</a>
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

        <!--footer strat-->
        @include('layouts.admin.footer.footer')
        <!--footer end-->
    </div>
@endsection

