<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APM | Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="assetsusers/img/favicon.png" rel="icon">
  <link href="assetsusers/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

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

  <!-- my-css -->
  <link rel="stylesheet" href="assetsusers/css/my.apm.css">



</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div>
                <h1 class="text-primary fw-bold" data-aos="fade-left" data-aos-duration="900">Ungkapkan & Dapatkan Solusi!</h1>
                <p class="w-75" data-aos="fade-right" data-aos-duration="900">Ungkapkan Keluhan, Dapatkan Solusi - Bersama kami Menuju Perubahan. "Kami Dengar, Kami Peduli, Aplikasi APM Siap Membantu Anda!".</p>
            </div>
            <div class="card bg-white" data-aos="fade-up" data-aos-duration="2000" style="width: 23.44rem;">
                <div class="card-body">
                <h5 class="card-title fw-bold">Login</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary mb-5">Login dan ajukan pengaduan atau keluhanmu</h6>
                    <form action="{{route('auth.user.login')}}" method="post" >
                        @csrf
                        <div class="mb-4">
                            <input name="email" type="email" class="w-100 text-field-shadow" placeholder="Email" value="{{ Session('email') }}">
                            <small class="text-danger">@error('email') {{$message}} @enderror</small>
                        </div>
                        <div class="mb-4">
                            <input name="password" type="password" class="w-100 text-field-shadow" placeholder="Password" value="{{ Session('password') }}">
                            <small class="text-danger">@error('password') {{$message}} @enderror</small>
                        </div>
                        <div class="mb-3">
                            @if (session('error'))
                                <small class="my-2 text-danger">{{session('error')}}</small>
                            @endif
                        </div>
                        <div class="mb-4">
                            <button type="text" class="w-100 btn bg-primary fw-bold  text-white">Login</button>
                        </div>
                    </form>
                    <div>
                        <hr>
                        <div class="text-center or-text">OR</div>
                    </div>
                    <div class="mb-4">
                        <img src="assetsusers/img//au/google.png" class="logo-google-login" width="20" alt="">
                        <a href="/auth/google" class="fs-6 w-100 btn btn-login-google">Continue with Google</a>
                    </div>
                    <div class="text-center" style="font-size: 12px;">
                        <p>don't have account? <a href="{{route('auth.register')}}"><strong>create</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>