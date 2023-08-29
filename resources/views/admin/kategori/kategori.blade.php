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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Kategori</h4>
                            <input class="search" type="text" name="search" id="seach" placeholder="search">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table student-data-table m-t-20">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataKategori as $no=>$kategori)                                            
                                            <tr>
                                                <td>{{ $no+1 }}</td>
                                                <td>{{ $kategori->kategori }}</td>
                                                <td>{!! Str::limit($kategori->deskripsi, 50) !!}</td>
                                                <td>
                                                    @php
                                                         $data_i_encrypt = Crypt::encrypt($kategori->id);
                                                    @endphp
                                                    <a href="/edit-kategori/{{ $data_i_encrypt }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="/detail-kategori/{{ $data_i_encrypt }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="/delete-kategori/{{ $data_i_encrypt }}" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="/kategori-add" class="border border-secondary btn-block text-center p-2 btn-hover-primary btn-sm rounded"><i class="bi bi-plus"></i>Add data kategori</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--Content body end-->


    <!--Footer start-->
    @include('layouts.admin.footer.footer')
    <!--Footer end-->
@endsection
