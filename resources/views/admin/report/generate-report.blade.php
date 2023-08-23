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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Generate Report</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row bg-white">
                    <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">Laporan Periode</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form action="#" class="form-valide"  method="get">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-bulan">Bulan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <select class="form-control" id="val-bulan" name="val-bulan">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="january">january</option>
                                                    <option value="february">february</option>
                                                    <option value="march">march</option>
                                                    <option value="april">april</option>
                                                    <option value="may">may</option>
                                                    <option value="junie">junie</option>
                                                    <option value="july">july</option>
                                                    <option value="agust">agust</option>
                                                    <option value="september">september</option>
                                                    <option value="october">october</option>
                                                    <option value="november">november</option>
                                                    <option value="december">december</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-tahun">Tahun
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input  class="form-control" id="val-tahun" name="val-tahun" type="year" placeholder="--pilih tahun--"></input>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-status">Pilih Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <select class="form-control" id="val-status" name="val-status">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="new">New</option>
                                                    <option value="process">Process</option>
                                                    <option value="selesai">Selesai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Add other input fields and form elements as needed for the left side -->
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-printer"></i> Cetak</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">Laporan Lengkap Periode</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form  action="#" method="get" class="form-valide-laporan-l-periode">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-tahun2">Tahun
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input  class="form-control" id="val-tahun2" name="val-tahun2" type="year" placeholder="--pilih tahun--"></input>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-bulan2">Bulan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <select class="form-control" id="val-bulan2" name="val-bulan2">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="january">january</option>
                                                    <option value="february">february</option>
                                                    <option value="march">march</option>
                                                    <option value="april">april</option>
                                                    <option value="may">may</option>
                                                    <option value="junie">junie</option>
                                                    <option value="july">july</option>
                                                    <option value="agust">agust</option>
                                                    <option value="september">september</option>
                                                    <option value="october">october</option>
                                                    <option value="november">november</option>
                                                    <option value="december">december</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <!-- Add other input fields and form elements as needed for the right side -->
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-printer"></i> Cetak</button>
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