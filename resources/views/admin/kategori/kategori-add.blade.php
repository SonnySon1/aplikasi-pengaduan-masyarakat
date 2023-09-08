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
                        <p class="mb-0">Selemat datang kembali di Aplikai APM</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Data Kategori</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Add Data Kategori</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="/kategori-store" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="w-100">
                                            <div class="form-group">
                                                <label class="col-lg-4 col-form-label" for="val_kategori">Kategori
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <div class="col-lg-12">
                                                    <input type="text" class="form-control" id="val_kategori" name="val_kategori" placeholder="Masukan Kategori" style="width: 100%;">
                                                    <small class="text-danger">@error('val_kategori') {{$message}} @enderror</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 col-form-label" for="val_deskripsi">Deskripsi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <div class="col-lg-12">
                                                    <textarea class="form-control" id="val_deskripsi" name="val_deskripsi" placeholder="Masukan deskripsi" style="width: 100%;"></textarea>
                                                    <small class="text-danger">@error('val_deskripsi') {{$message}} @enderror</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <a href="/kategori" class="btn btn-outline-warning text-warning"><i class="bi bi-backspace"></i>Kembali</a>
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
    <!--Content body end-->

    <!--footer start-->
    @include('layouts.admin.footer.footer')
    <!--footer end-->
</div>
@endsection
