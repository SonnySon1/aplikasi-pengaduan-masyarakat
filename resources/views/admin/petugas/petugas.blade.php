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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Petugas</h4>
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
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>3207172222000000</td>
                                                <td>Fery</td>
                                                <td>Petugas</td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>3207172222000000</td>
                                                <td>Dimas</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>3207172222000000</td>
                                                <td>Samsul</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>3207172222000000</td>
                                                <td>Diky</td>
                                                <td>Petugas</td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>3207172222000000</td>
                                                <td>Rizal</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>3207172222000000</td>
                                                <td>Reza</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>3207172222000000</td>
                                                <td>Danang</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="" style="z-index: 6;" class="btn btn-warning btn-sm"><i class="bi bi-pencil text-white"></i></a>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="/petugas-add" class="border border-secondary btn-block text-center p-2 btn-hover-primary btn-sm rounded"><i class="bi bi-plus"></i>Add data Petugas</a>
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
    </div>
@endsection
 
