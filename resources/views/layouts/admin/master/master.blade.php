<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicon.png">
    <link href="{{ asset('dist/vendor/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">

    <!-- bs icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assetsusers/css/my.apm.css') }}">
    

</head>
 <body>

    
@yield('content')
  
  
  
  
<!--Scripts-->
 <!-- Required vendors -->
 <script src="{{ asset('dist/vendor/global/global.min.js') }}"></script>
 <script src="{{ asset('dist/js/quixnav-init.js') }}"></script>
 <script src="{{ asset('dist/js/custom.min.js') }}"></script>

 <script src="{{ asset('dist/vendor/chartist/js/chartist.min.js') }}"></script>

 <script src="{{ asset('dist/vendor/moment/moment.min.js') }}"></script>
 <script src="{{ asset('dist/vendor/pg-calendar/js/pignose.calendar.min.js') }}"></script>


 <script src="dist/js/dashboard/dashboard-2.js"></script>
 <!-- Circle progress -->


  <!-- Jquery Validation -->
  <script src="dist/vendor/jquery-validation/jquery.validate.min.js"></script>
  <!-- -------- -->

  <!-- Form validate init -->
  <script src="dist/js/plugins-init/jquery.validate-init.js"></script>

</body>

</html>