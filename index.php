<?php
include 'include/koneksi.php';
include 'include/app.php';

$skr = date('d M Y');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
    <meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
    <title>Aplikasi Sistem Informasi Daftar Kehadiran Pekerja NON ASN di Kantor Samsat Kota Mataram </title>
    <link rel="stylesheet" href="assets/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" href="assets/css/stisla.css">

    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<style>
    .clock {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        color: #17D4FE;
        font-size: 60px;
        font-family: Orbitron;
        letter-spacing: 7px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg main-navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/samsat2.jpeg" style="width: 140%;" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="ion-navicon"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link py-1 mb-2 smooth-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn smooth-link align-middle btn-dark" style="padding-left: 20px;" href="app">Login Administrator</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <a href="login_izin" class="btn smooth-link align-middle btn-primary">Login Izin Pegawai Via Online</a>
                </form>
                <form class="form-inline">
                    <a href="#contact" class="btn smooth-link align-middle btn-primary">Butuh Bantuan ?</a>
                </form>
            </div>
        </div>
    </nav>
    <section class="hero bg-overlay" id="hero" data-bg="images/kantorsamsat.jpg">
        <div class="text py-5">
            <p class="lead"></p>
            <h4><span class="bold">Absensi Pekerja NON ASN di Kantor Samsat Kota Mataram</span><span class="bold"></span>.</h4>
            <div class="projects-cta">
                <a href="masuk" class="btn btn-success btn-lg">
                    Masuk <svg width="24" height="24" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom;">
                        <path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm6.56 4.5l1.97-1.97a.75.75 0 10-1.06-1.06L6.22 7.47a.75.75 0 000 1.06l3.25 3.25a.75.75 0 101.06-1.06L8.56 8.75h5.69a.75.75 0 000-1.5H8.56z"></path>
                    </svg>
                </a>
                <a href="pulang" class="btn btn-danger btn-lg">
                    Pulang <svg width="24" height="24" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom;">
                        <path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path>
                    </svg>
                </a>
            </div>
            <br>
            <br>
            <h1 id="MyClockDisplay" class="clock text-center" onload="showTime()"></h1>
            <h4 align="center"><?php $tanggal = date('d M Y');
                                $day = date('D', strtotime($tanggal));
                                $dayList = array(
                                    'Sun' => 'Minggu',
                                    'Mon' => 'Senin',
                                    'Tue' => 'Selasa',
                                    'Wed' => 'Rabu',
                                    'Thu' => 'Kamis',
                                    'Fri' => 'Jumat',
                                    'Sat' => 'Sabtu'
                                );
                                echo $dayList[$day] . ", " . $tanggal; ?></h4>
        </div>
    </section>

    <section class="padding bg-grey" id="contact">
        <div class="container">
            <h2 class="section-title text-center">Kontak Kami</h2>
            <p class="section-lead text-center text-muted">Kirimkan pertanyaan Anda kepada kami, kami akan membantu Anda dan membalasnya sesegera mungkin</p>
            <div class="section-body">
                <div class="row col-spacing">
                    <div class="col-12 col-md-5">
                        <p class="contact-text">Pelayanan samsat 24 jam nonstop tersebar di 10 UPTB-UPPD masing-masing Kabupaten/Kota di Provinsi NTBt </p>
                        <ul class="contact-icon">
                            <li><i class="ion ion-ios-telephone"></i>
                                <div>: (0370) 631-502</div>
                            </li>
                            <li><i class="ion ion-ios-email"></i>
                                <div>: bappenda@ntbprov.go.id</div>
                            </li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.016362256473!2d116.09985549999998!3d-8.594424499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7b289129af%3A0xba2c378dedadb55c!2sJl.%20Majapahit%20No.17%2C%20Pagesangan%2C%20Kec.%20Mataram%2C%20Kota%20Mataram%2C%20Nusa%20Tenggara%20Bar.%2083127!5e0!3m2!1sen!2sid!4v1663851971462!5m2!1sen!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-12 col-md-7">
                        <form class="contact row" id="contact-form">
                            <div class="form-group col-6">
                                <input type="text" class="form-control" placeholder="Name" name="name" required="">
                            </div>
                            <div class="form-group col-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required="">
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" placeholder="Message" name="message" required=""></textarea>
                            </div>
                            <div class="form-group col-12 mt-2">
                                <button class="btn btn-primary">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-primary">
        <div class="container">
            <figure>
                <img src="images/samsat2.jpeg" style="width: 130%; padding-right: 30px;" style="position:absolute;">
            </figure>
            <p class="text-white">
                Copyright &copy; 2022
            </p>
            <p class="text-white">
                Made By Putri Fahmi Ramadhani
            </p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easeScroll.js"></script>
    <script src="assets/weetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/stisla.js"></script>
    <script type="text/javascript">
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "";

            if (h == 0) {
                h = 00;
            }

            if (h > 24) {
                h = h - 24;
                session = "";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();
    </script>
</body>

</html>
