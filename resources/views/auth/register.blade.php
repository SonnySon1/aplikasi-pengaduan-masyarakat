<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APM</title>
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
        <div class="d-flex align-items-center" style="height: 100vh;">
            <div data-aos="fade-right" data-aos-duration="1000" class="card bg-white rounded-0" style="width:500px; height: 100%;">
                <div class="card-body">
                <h5 class="card-title fw-bold mb-3">Register</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary mb-5">Satu langkah, perubahan nyata</h6>
                    <form action="{{route('auth.user.register')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input name="nama" id="nama" type="text" class="w-100 text-field-shadow" autocomplete="off" placeholder="Nama">
                            <small class="text-danger text-small">@error('nama'){{$message}}@enderror</small>
                        </div>
                        <div class="mb-4">
                            <input name="nik" id="nik" type="number" class="w-100 text-field-shadow" autocomplete="off" placeholder="Nik" inputmode="numeric" min="1">
                            <small class="text-danger text-small">@error('nik'){{$message}}@enderror</small>
                        </div>
                        <div class="mb-4">
                            <input name="alamat" id="alamat" type="text" class="w-100 text-field-shadow" autocomplete="off" placeholder="Alamat">
                            <small class="text-danger text-small">@error('alamat'){{$message}}@enderror</small>
                        </div>
                        <div class="mb-4">
                            <input name="no_telepon" id="no_telepon" type="text" class="w-100 text-field-shadow" autocomplete="off" placeholder="No Telepon">
                            <small class="text-danger text-small">@error('no_telepon'){{$message}}@enderror</small>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex">
                                <input name="email" id="email" type="text" class="w-100 flex-grow-1 text-field-shadow mr-5" autocomplete="off" placeholder="Email">
                                <div class="distance-em-p"></div>
                                <input name="password" id="password" type="password" class="w-100 flex-grow-1 text-field-shadow " autocomplete="off" placeholder="Password">
                            </div>
                            <small class="text-danger text-small">@error('email'){{$message}}@enderror</small>
                            <small class="text-danger text-small">@error('password'){{$message}}@enderror</small>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" name="" type="checkbox" value="" id="menyetujui" required>
                            <label class="form-check-label " style="font-size: 12px;" for="menyetujui">
                                Saya setuju dengan syarat dan kebijakan privasi
                            </label>
                          </div>
                        <div class="mb-4">
                            <button type="text" class="w-100 btn bg-primary fw-bold  text-white" id="registerButton">Register</button>
                        </div>
                    </form>
                    <div>
                        <hr>
                        <div class="text-center or-text">OR</div>
                    </div>
                    <div class="mb-4">
                        <img src="assetsusers/img//au/google.png" class="logo-google-login" width="20" alt="">
                        <a href="" class="fs-6 w-100 btn btn-login-google">Continue with Google</a>
                    </div>
                    <div class="text-center" style="font-size: 12px;">
                        <p>already have an account? <a href="{{route('auth.login')}}"><strong> login </strong></a></p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="fw-bold text-primary" data-aos="fade-right" data-aos-duration="900">Suara Anda Berarti Bagi Kami - Ayo Wujudkan Perubahan Positif!</h1>
                        <p data-aos="fade-left" data-aos-duration="900">"Jadi bagian dari Kami dan bersama-sama kita akan menjadikan setiap keluhan menjadi langkah maju menuju perubahan yang lebih baik. Ayo daftar sekarang!</p>
                    </div>
                </div>
            </div>
    </div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

{{-- <script>
    // dapatakan elemet yan di butuhakan
        const namaInput = document.getElementById('nama');
        const nikInput = document.getElementById('nik');
        const alamatInput = document.getElementById('alamat');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const menyetujuiCheck = document.getElementById('menyetujui');
        const registerButton = document.getElementById('registerButton');
        
    // baut fungsi untuk pengecekan input
        function cekInput(){
            namaFilled = namaInput.value.trim() !== '';
            nikFilled = nikInput.value.trim() !== '';
            alamatFilled = alamatInput.value.trim() !== '';
            emailFilled = emailInput.value.trim() !== '';
            passwordFiled = passwordInput.value.trim() !== '';
            menyetujuiCheckFiled = menyetujuiCheck.value.trim() !== '';

            registerButton.disabled = !(namaFilled && nikFilled && alamatFilled && emailFilled && isPasswordFilled && menyetujuiCheckFiled);
        }

        namaInput.addEventListener('input', cekInputs);
        nikInput.addEventListener('input', cekInputs);
        alamatInput.addEventListener('input', cekInputs);
        emailInput.addEventListener('input', cekInputs);
        passwordInput.addEventListener('input', cekInputs);
        menyetujuiCheck.addEventListener('change', cekInputs);
    
    

</script> --}}

<script>

</script>



</body>
</html>