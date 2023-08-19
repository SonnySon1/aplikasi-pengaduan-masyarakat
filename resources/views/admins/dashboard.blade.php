<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicon.png">
    <link href="dist/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="dist/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">

    <!-- bs icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
 
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="dist/images/logo.png" alt="">
                <img class="logo-compact" src="dist/images/logo-text.png" alt="">
                <img class="brand-title" src="dist/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Master Data</li>
                        <li>
                            <a  href="dashboard.html"><i class="bi bi-display"></i><span class="nav-text">Dashboard</span></a>
                        </li>    
                        <li>
                            <a href="masyarakat.html"><i class="bi bi-people-fill"></i></i><span class="nav-text active">Masyarakat</span></a>
                        </li>
                        <li>
                            <a href="petugas.html"><i class="bi bi-person"></i><span class="nav-text">Petugas</span></a>
                        </li>
                        <li>
                            <a href="kategori.html"><i class="fa-solid fa-book"></i><span class="nav-text">Kategori</span></a>
                        </li>
                    </li>
                    <li class="nav-label first">Laporan</li>
                        <li>
                            <a  href="laporanmasuk.html"><i class="bi bi-envelope"></i><span class="nav-text">Laporan Masuk</span></a>
                        </li>
                    </li>
                    <li class="nav-label first">Report</li>
                        <li>
                            <a  href="report.html"><i class="bi bi-printer"></i><span class="nav-text">Generate Report</span></a>
                        </li>
                    </li>
                    <li class="nav-label first">Account</li>
                        <li>
                            <a  href="profile.html"><i class="bi bi-person-circle"></i><span class="nav-text">Profile</span></a>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                                <div class="stat-icon d-inline-block">
                                    <i class="bi bi-people-fill text-success"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text font-weight-bold">Masyarakat</div>
                                    <div class="stat-digit">1,012</div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                                <div class="stat-icon d-inline-block">
                                    <i class="fa-solid fa-book text-warning"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text font-weight-bold">Kategoti</div>
                                    <div class="stat-digit">112</div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                                <div class="stat-icon d-inline-block">
                                    <i class="bi bi-envelope-check text-danger"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text font-weight-bold">Laporan</div>
                                    <div class="stat-digit">1,321</div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                                <div class="stat-icon d-inline-block">
                                    <i class="bi bi-envelope-exclamation text-success"></i>
                                </div>
                                <div class="stat-content d-inline-block">
                                    <div class="stat-text font-weight-bold">Laporan Baru</div>
                                    <div class="stat-digit">1,012</div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Laporan Masuk</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tgl Pengaduan</th>
                                                <th>Judul Pengaduan</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                 <td>20/04/2017</td>
                                                <td>Banjir Karena Tanah Longsor</td>
                                                <td>Bencana</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                 <td>20/04/2017</td>
                                                <td>Air Sungai Mampet Karena Sampah</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                 <td>20/04/2017</td>
                                                <td>Sampah</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                 <td>20/04/2017</td>
                                                <td>Limbah Pabrik ABCD</td>
                                                <td>Pencemaran</td>
                                                <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="dist/vendor/global/global.min.js"></script>
    <script src="dist/js/quixnav-init.js"></script>
    <script src="dist/js/custom.min.js"></script>

    <script src="dist/vendor/chartist/js/chartist.min.js"></script>

    <script src="dist/vendor/moment/moment.min.js"></script>
    <script src="dist/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="dist/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>