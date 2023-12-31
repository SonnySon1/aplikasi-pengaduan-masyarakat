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

    <!-- mycss -->
    <link rel="stylesheet" href="{{ asset('assetsusers/css/my.apm.css') }}">

</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
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
        <section id="pengaduan" class="featured-services">
            <div class="container mt-5">
                <h1>Detail Pengaduan</h1>
                <div><span class="text-primary">Pengaduanku</span> / Buat Pengaduan</div>
                <div class="mt-5 d-flex">
                    <div>
                        <img src='{{ asset("photos/pengaduan-photo/$dataPengaduan->foto") }}' width="800" class="rounded-4">
                    </div>
                    <div>
                        <div class="card ms-5 w-100" style="border: 1px solid rgba(0, 0, 0, .1); height: 350px;">
                            <div class="card-header" style="background-color: white;">{{ $dataPengaduan->judul_pengaduan }}</div>
                                <div class="card-body">
                                    <p><b>Category:</b> {{ $dataPengaduan->kategori->kategori }}</p>
                                    <p><b>Tanggal Pengaduan:</b> {{ $dataPengaduan->tgl_pengaduan }}</p>
                                    <p><b>Status:</b> <span class="btn bg-primary btn-sm color-white rounded-5 ">{{ $dataPengaduan->status }}</span></p>
                                </div>
                          </div>
                          <div class="ms-5 mt-3">
                                {{ $dataPengaduan->laporan_pengaduan }}
                          </div>
                    </div>
                </div>
                <div class="card" style="margin-top: 100px;">
                    <div class="card-body">
                      <h5 class="card-title"><b>Tanggapan</b></h5>
                      <div class="mt-5">
                        @foreach ($dataTanggapan as $tanggapan)                            
                            <div class="d-flex mt-3">
                                <div>
                                    @if ($tanggapan->user->is_google_user)
                                        <img src='{{ $tanggapan->user->foto}}' style="min-width: 35px; max-width: 35px; min-height: 35px; max-height: 35px;" class="rounded-5" alt="">
                                    @else
                                        <img src='{{ asset("photos/profile-photo/".$tanggapan->user->foto) }}' style="min-width: 35px; max-width: 35px; min-height: 35px; max-height: 35px;" class="rounded-5" alt="">
                                    @endif
                                </div>
                                <div class="ms-2">
                                    @if ($tanggapan->user->role == "admin")
                                        <p style="font-size: 12px" class="ml-2"><b class="text-danger">Admin </b><b class="text-dark">|</b> {{ $tanggapan->user->nama }}</p>
                                    @elseif ($tanggapan->user->role == "petugas")
                                        <p style="font-size: 12px" class="ml-2"><b class="text-warning">Petugas </b><b class="text-dark">|</b> {{ $tanggapan->user->nama }}</p>
                                    @elseIf( $tanggapan->user->role == "masyarakat"  )
                                        <p style="font-size: 12px" class="ml-2"><b class="text-success">Masyarakat </b><b class="text-dark">|</b> {{ $tanggapan->user->nama }}</p>
                                    @endif
                                    <div class="">
                                            <hr>
                                                <p style="font-size: 12px">{{ $tanggapan->tanggapan }}</p>
                                            <hr>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                      </div>
                        @php
                            $laporan_i_encrypt = Crypt::encrypt($dataPengaduan->id)
                        @endphp
                        @if ($dataPengaduan->status == "new")
                            <p>Tidak dapat melakukan tanggapan sebelum laporan kamu di lihat <b><i class="text-danger">admin</i></b> atau <b><i class="text-warning">petugas</i></b></p>
                        @else
                            <form action="/tanggapi-pengaduan/{{ $laporan_i_encrypt }}" method="POST" autocomplete="off">
                                @csrf
                                <small class="text-danger">@error('tanggapan') {{$message}} @enderror</small>
                                <div class="input-group mb-3">
                                        <input type="text" name="tanggapan" class="form-control " placeholder="reply">
                                    <button class="btn bg-primary text-white"><i class="bi bi-send-fill "></i></button>
                                </div>
                            </form>
                        @endif
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

</body>

</html>