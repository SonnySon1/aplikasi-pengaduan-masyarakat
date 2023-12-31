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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $dataShow['title'] }}</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $dataShow['page'] }}</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ $dataShow['title'] }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="filter-by-status" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="filter-by-status">Filter Berdasarkan Status</label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="filter-by-status" name="filter">
                                                            <option value="">--Filter Status--</option>
                                                            <option value="new">New</option>
                                                            <option value="accepted">Accepted</option>
                                                            <option value="process">Process</option>
                                                            <option value="finished">Finished</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="filter-by-category">Filter Berdasarkan Kategori</label>
                                                    <div class="col-lg-12">
                                                        <select class="form-control" id="filter-by-category" name="filter-category">
                                                            <option value="">--Pilih Kategori--</option>
                                                            @foreach ($dataKategori as $kategori)
                                                                <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option> 
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table student-data-table m-t-20" id="laporan-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tgl Pengaduan</th>
                                                <th>Nama Pengadu</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataLaporan as $no => $laporan)                                                        
                                                <tr>
                                                    <td>{{ $no + 1 }}</td>
                                                    <td>{{ $laporan->tgl_pengaduan }}</td>
                                                    <td>{{ $laporan->user->nama }}</td>
                                                    <td id="kategori">{{ $laporan->kategori->kategori }}</td>
                                                    <td id="status">
                                                        @if ($laporan->status == "new")
                                                            <span class="btn btn-primary btn-sm" style="border-radius: 50px;">{{ $laporan->status }}</span>
                                                        @elseif ($laporan->status == "accepted")
                                                            <span class="btn btn-success btn-sm" style="border-radius: 50px;">{{ $laporan->status }}</span>
                                                        @elseif ($laporan->status == "process")
                                                            <span class="btn btn-warning btn-sm" style="border-radius: 50px;">{{ $laporan->status }}</span>
                                                        @elseif ($laporan->status == "finished")
                                                            <span class="btn btn-secondary btn-sm" style="border-radius: 50px;">{{ $laporan->status }}</span>
                                                        @else
                                                            <span class="btn btn-danger btn-sm" style="border-radius: 50px;">{{ $laporan->status }}</span>
                                                        @endif
                                                    </td>
                                                    @php
                                                        $laporan_i_crypt = Crypt::encrypt($laporan->id);
                                                    @endphp
                                                    <td><a href="/laporan-detail/{{ $laporan_i_crypt }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
