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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Kategori</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table student-data-table m-t-20 text-dark">
                                        <tr>
                                            <th>{{ $dataKategori->kategori }}</th>
                                            <td>{!! $dataKategori->deskripsi !!}</td>
                                        </tr>
                                </table>
                                <a href="/kategori" class="  btn-block text-center p-2 btn btn-outline-warning text-warning  btn-sm rounded"><i class="bi bi-backspace"></i> Kembali</a>
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
