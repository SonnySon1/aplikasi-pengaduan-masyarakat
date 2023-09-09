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
                                    <form action="/generate-report-periode" class="form-valide"  method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val_bulan">Bulan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <select class="form-control" id="val_bulan" name="val_bulan">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">january</option>
                                                    <option value="02">february</option>
                                                    <option value="03">march</option>
                                                    <option value="04">april</option>
                                                    <option value="05">may</option>
                                                    <option value="06">junie</option>
                                                    <option value="07">july</option>
                                                    <option value="08">agust</option>
                                                    <option value="09">september</option>
                                                    <option value="10">october</option>
                                                    <option value="11">november</option>
                                                    <option value="12">december</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val_tahun">Tahun
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input  class="form-control" id="val_tahun" name="val_tahun" type="year" placeholder="--pilih tahun--"></input>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val_status">Pilih Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <select class="form-control" id="val_status" name="val_status">
                                                    <option value="">--Filter Status--</option>
                                                            <option value="new">New</option>
                                                            <option value="accepted">Accepted</option>
                                                            <option value="rejected">Rejected</option>
                                                            <option value="rejected">Process</option>
                                                            <option value="finished">Finished</option>
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
                                    <form  action="/generate-report-rekap" method="POST" class="form-valide-laporan-l-periode">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val_tahun2">Tahun
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <input  class="form-control" id="val_tahun2" name="val_tahun2" type="year" placeholder="--pilih tahun--"></input>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val_bulan2">Bulan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <select class="form-control" id="val_bulan2" name="val_bulan2">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">january</option>
                                                    <option value="02">february</option>
                                                    <option value="03">march</option>
                                                    <option value="04">april</option>
                                                    <option value="05">may</option>
                                                    <option value="06">junie</option>
                                                    <option value="07">july</option>
                                                    <option value="08">agust</option>
                                                    <option value="09">september</option>
                                                    <option value="10">october</option>
                                                    <option value="11">november</option>
                                                    <option value="12">december</option>
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