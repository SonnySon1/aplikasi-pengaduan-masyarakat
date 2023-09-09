<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APM | {{ $dataShow['title'] }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetsusers/img/favicon.png" rel="icon">
    <link href="assetsusers/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- plugins CSS Files -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('assetsusers/css/variables.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsusers/css/main.css') }}" rel="stylesheet">

    <link href="{{ asset('assetsusers/css/my.apm.css') }}" rel="stylesheet">
</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assetsusers/img/logo.png" alt=""> -->
                <h1>APM<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/pengaduanku#pengaduanku">Pengaduanku</a></li>
                    <li><a class="nav-link scrollto" href="/buat-pengaduan#buatpengaduan">Buat Pengaduan</a></li>
                    <li><a class="nav-link scrollto" href="/profile-user#profile">Profile</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
            <ul class="list-unstyled">
                <li>
                    <a class="btn-getstarted scrollto rounded-5" href="/signoput">Sign-out</a>
                </li>
            </ul>

        </div>
    </header>
    <!-- End Header -->


    <!-- ======== main ======== -->
    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="profile" class="featured-services">
            <div class="container mt-5">
                <h1>Profile</h1>
                <div><span class="text-primary">PengaduanKu</span> / Profile</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="{{ asset('photos/profile-photo/'.auth()->user()->foto ) }}"  class="img-fluid rounded-circle profile-img-user" class="img-fluid" style="min-width: 150px; min-height: 150px; max-width: 150px; max-height: 150px; border-radius: 100px"  alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                            <h4 class="text-primary"><b class="text-warning" style="font-size: 20px">Masyarakat</b><b style="font-size: 20px" class="text-dark"> | </b>{{ auth()->user()->nama }}</h4>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted" style="font-size: 20px">{{ auth()->user()->email }}</h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted" style="font-size: 20px">{{ auth()->user()->no_telepon }}</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 60px">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-us" data-toggle="tab" class="nav-link active show"><i class="bi bi-people-fill"></i></a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link"><i class="bi bi-gear-fill"></i></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-us" class="tab-pane fade active show">
                                                <div class="profile-about-us">
                                                    <div class="pt-4 border-bottom-1 pb-4">
                                                        <h4 class="text-primary">Tentang Kami</h4>
                                                            <p>Selamat datang di APM, aplikasi yang berdedikasi untuk memberdayakan suara masyarakat dalam mencari solusi atas permasalahan sekitar. Kami hadir sebagai jembatan antara Anda dan pihak berwenang, bertujuan untuk menciptakan perubahan positif dan lingkungan yang lebih baik.</p>
                                                    </div>
                                                </div>
                                                <div class="profile-contactus pt-2 border-bottom-1 pb-2">
                                                    <h4 class="text-primary mb-4">Hubungi Kami</h4>
                                                    <a href="" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                                                    <a href="" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10"><i class="bi bi-instagram"></i> Instagram</a>
                                                    
                                                </div>
                                                <div class="profile-personal-info pt-5">
                                                    <h4 class="text-primary mb-4">Informasi Pribadi</h4>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->nama }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nik <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->nik }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Alamat <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->alamat }}</span>
                                                        </div>
                                                    </div>
                                                    @if (auth()->user()->jenis_kelamin == "L")
                                                        <div class="row mb-4">
                                                                <div class="col-3">
                                                                    <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-9"><span>Laki Laki</span ></div>
                                                        </div>
                                                    @elseif (auth()->user()->jenis_kelamin == "P")
                                                        <div class="row mb-4">
                                                            <div class="col-3">
                                                                <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-9"><span>Perempuan</span ></div>
                                                        </div>        
                                                    @endif
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">No Telepon <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->no_telepon }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ auth()->user()->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Peran<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span class="text-success"><b>Masyarakat</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Pengaturan Akun</h4>
                                                        <form action="/user-update-profile" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-row mb-3 d-flex gap-2">
                                                                <div class="form-group col-md-6 mb-3">
                                                                    <label>Nama</label>
                                                                    <input name="nama" type="text" placeholder="nama kamu" class="form-control" value="{{ auth()->user()->nama }}">
                                                                    <small class="text-danger">@error('nama') {{$message}} @enderror</small>
                                                                </div>
                                                                <div class="form-group col-md-6 mb-3">
                                                                    <label>Nik</label>
                                                                    <input name="nik" type="number" placeholder="masukan nik" class="form-control" value="{{ auth()->user()->nik }}">
                                                                    <small class="text-danger">@error('nik') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-3">
                                                                <div class="form-group col-md-12">
                                                                    <label>Jenis Kelamin</label>
                                                                    <select class="form-control" name="jenis_kelamin" id="inputState">
                                                                        <option @if(auth()->user()->jenis_kelamin == NULL) selected @endif value="" >--Select Jenis Kelamin--</option>
                                                                        <option @if(auth()->user()->jenis_kelamin == "L") selected @endif value="L">Laki-Laki</option>
                                                                        <option @if(auth()->user()->jenis_kelamin == "P") selected @endif value="P">Perempuan</option>
                                                                    </select>
                                                                    <small class="text-danger">@error('jenis_kelamin') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-3">
                                                                <div class="form-group col-md-12">
                                                                    <label>No telepon</label>
                                                                    <input name="no_telepon" type="tel" placeholder="no telepon kamu" class="form-control" value="{{ auth()->user()->no_telepon }}">
                                                                    <small class="text-danger">@error('no_telepon') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-row mb-3">
                                                                <div class="form-group col-md-12">
                                                                    <label>Alamat</label>
                                                                    <input name="alamat" type="tel" placeholder="no telepon kamu" class="form-control" value="{{ auth()->user()->alamat }}">
                                                                    <small class="text-danger">@error('alamat') {{$message}} @enderror</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Foto Profile</label>
                                                                <input name="foto" type="file" class="form-control">
                                                                <small class="text-danger">@error('foto') {{$message}} @enderror</small>
                                                            </div>
                                                            <button class="btn bg-primary text-white" type="submit"><i class="bi bi-arrow-clockwise"></i> Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <!-- End Featured Services Section -->

    </main>
    <!-- End #main -->



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- plugins JS Files -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('plugins/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetsusers/js/main.js') }}"></script>


    
    <script src="{{ asset('dist/vendor/global/global.min.js') }}"></script>
    
</body>

</html>