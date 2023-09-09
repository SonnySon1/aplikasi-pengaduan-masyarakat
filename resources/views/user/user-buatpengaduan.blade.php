<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APM | Buat-pengaduan</title>
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
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="plugins/aos/aos.css" rel="stylesheet">
    <link href="plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="plugins/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assetsusers/css/variables.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assetsusers/css/main.css" rel="stylesheet">
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
        <section id="buatpengaduan" class="featured-services">
            <div class="container mt-5">
                <h1>Buat Pengaduan</h1>
                <div><span class="text-primary">PengaduanKu</span> / Buat Pengaduan</div>
            
                @if (auth()->user()->nik == NULL || auth()->user()->alamat == NULL || auth()->user()->jenis_kelamin == NULL || auth()->user()->no_telepon == NULL)
                    <p class="mt-5"><i class="bi bi-exclamation-circle-fill text-danger"></i> Harap lengkapi <b><a href="/profile-user#profile" class="text-danger">Biodata</a></b> untuk membuat sebuah pengaduan atau laporan</p>
                @endif

                <form action="/storepengaduan" class="mt-5" method="POST" enctype="multipart/form-data" autocomplete="off"> 
                    @csrf
                    <div class="input-group "> 
                        <input type="text"  name="judul_pengaduan" class="form-control" placeholder="Judul Pengaduan" value="{{ old('judul_pengaduan') }}">
                    </div>
                    <p><small class="text-danger">@error('judul_pengaduan') {{ $message }} @enderror</small></p>
                    <div class="input-group mb-3">
                        <select class="form-select" name="kategori" id="inputGroupSelect02" >
                          <option selected value="">--Pilih Kategori Pengaduan--</option>      
                            @foreach ($kategoriPengaduan as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>  
                            @endforeach
                        </select>
                      </div>
                      <p><small class="text-danger">@error('kategori') {{ $message }} @enderror</small></p>
                    <div class="input-group mb-3"> 
                        <textarea name="isi_pengaduan" id=""  placeholder="Isi Pengaduan" class="form-control "cols="30" rows="8">{{ old('isi_pengaduan') }}</textarea>
                    </div>
                    <p><small class="text-danger">@error('isi_pengaduan') {{ $message }} @enderror</small></p>

                    <div class="input-group mb-3"> 
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <p><small class="text-danger">@error('foto') {{ $message }} @enderror</small></p>

                    @if (auth()->user()->nik == NULL || auth()->user()->alamat == NULL || auth()->user()->jenis_kelamin == NULL || auth()->user()->no_telepon == NULL)
                        <div class="input-group mb-3"> 
                            <button class="btn bg-primary color-white  rounded-5 opacity-50" disabled>Kirim Pengaduan <i class="bi bi-lock-fill"></i></button>
                        </div>
                        @else
                        <div class="input-group mb-3"> 
                            <button class="btn bg-primary color-white  rounded-5">Kirim Pengaduan</button>
                        </div>
                    @endif
                     


                </form>
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
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/aos/aos.js"></script>
    <script src="plugins/glightbox/js/glightbox.min.js"></script>
    <script src="plugins/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="plugins/swiper/swiper-bundle.min.js"></script>
    <script src="plugins/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsusers/js/main.js"></script>

</body>

</html>