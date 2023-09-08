<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APM | Semua-PengaduanKu</title>
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
                    <li><a class="nav-link scrollto" href="#pengaduanku">Pengaduanku</a></li>
                    <li><a class="nav-link scrollto" href="/buat-pengaduan#buatpengaduan">Buat Pengaduan</a></li>
                    <li><a class="nav-link scrollto" href="/profile-user#contact">Profile</a></li>
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
        <section id="pengaduanku" class="featured-services">
            <div class="container mt-5">
                <h1>PengaduanKu</h1>
                <div><span class="text-primary">Pengaduanku</span> / Buat Pengaduan</div>
                <table class="table table-hover mt-5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Pengaduan</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPengaduan as $pengaduan)                            
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pengaduan->judul_pengaduan }}</td>
                                <td>{{ $pengaduan->kategori->kategori }}</td>
                                <td>{{ $pengaduan->status }}</td>
                                @php
                                    $pengaduan_i_encrypt = Crypt::encrypt($pengaduan->id)
                                @endphp
                                <td>
                                    <a href="show/{{ $pengaduan_i_encrypt }}" class="btn bg-primary btn-sm"><i class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
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