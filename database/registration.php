<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil nilai dari formulir
  $fullName = $_POST['nama_lengkap'];
  $gender = $_POST['gender'];
  $phoneNumber = $_POST['hp'];
  $email = $_POST['mail'];
  $alamat = $_POST['alamat'];
  $pekerjaan = $_POST['pekerjaan'];
  $namaOrganisasi = $_POST['nama_organisasi'];

  // Query SQL untuk menyimpan data ke dalam tabel
  $sql = "INSERT INTO registration_user (nama_lengkap, gender, hp, mail, alamat, pekerjaan, nama_organisasi) 
            VALUES ('$fullName', '$gender', '$phoneNumber', '$email', '$alamat', '$pekerjaan', '$namaOrganisasi')";

  // Jalankan query dan periksa apakah berhasil
  if ($conn->query($sql) === TRUE) {
    // Ambil user_id setelah operasi INSERT berhasil
    $user_id = $conn->insert_id;

    // Redirect ke halaman lain setelah formulir disubmit
    header("Location: alergic.php?user_id=$user_id#registration"); // Ganti "sukses.php" dengan halaman tujuan
    exit; // Pastikan tidak ada output lain sebelum redirect
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Tutup koneksi ke database
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FFV0RGSW01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-FFV0RGSW01");
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Indonesia Mice Conference And Exhibition | INAMICE 2024</title>
  <meta name="title" content="Jakarta Investment Forum | Global City And Beyond" />
  <meta name="description" content="Jakarta Investment Forum is an international annual forum to promote and showcase business opportunities in Jakarta Capital City" />
  <meta name="keywords" content="jakarta investment center, invest jakarta, penanaman modal, jakarta green investment" />
  <link rel="canonical" href="https://invest.jakarta.go.id/jakarta-investment-forum" />
  <meta property="og:url" content="https://invest.jakarta.go.id/jakarta-investment-forum" />
  <meta property="og:locale" content="en_EN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Jakarta Investment Forum | Global City And Beyond" />
  <meta property="og:image" content="https://invest.jakarta.go.id/front/img/jif/jif-fav.png" />
  <meta property="og:site_name" content="Jakarta Investment Forum | Global City And Beyond" />
  <meta property="og:description" content="Jakarta Investment Forum is an international annual forum to promote and showcase business opportunities in Jakarta Capital City" />
  <meta name="Rating" content="general" />
  <meta name="Robots" content="all" />
  <link rel="shortcut icon" href="../assets/LOGO INAMICE HKI 1;1.png" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800|Raleway:100,200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Plaster&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet" />
  <!-- blockquote -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet" />
  <link href="https://invest.jakarta.go.id/front\bootstrap-4.1.3-dist\css\bootstrap.min.css" rel="stylesheet" />
  <link href="https://invest.jakarta.go.id/front\css\custom.css?v=13032024155158" rel="stylesheet" />
  <link href="https://invest.jakarta.go.id/front\css\animate.min.css" rel="stylesheet" />
  <!--<link href="https://invest.jakarta.go.id/front\css\font-awesome.min.css" rel="stylesheet">-->
  <link href="https://invest.jakarta.go.id/front\fontawesome-free-5.15.3-web\css\all.css" rel="stylesheet" />
  <script src="https://kit-pro.fontawesome.com/releases/v5.10.1/js/pro.min.js" data-auto-fetch-svg=""></script>
  <!-- slider -->
  <link href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css" rel="stylesheet" />
  <link href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css" rel="stylesheet" />
  <!-- slider -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.1/css/ionicons.min.css" rel="stylesheet" />
  <!-- translate -->
  <link href="https://invest.jakarta.go.id/front\css\gtrans.css" rel="stylesheet" />
  <script src="https://invest.jakarta.go.id/js/jquery.min.js"></script>
  <script src="https://invest.jakarta.go.id/js/client.js"></script>
  <script src="https://invest.jakarta.go.id/js/googleapis.proxy.js?onload=startup"></script>
  <!-- translate -->
  <link href="https://invest.jakarta.go.id/front\css\flag.css" rel="stylesheet" />
  <!-- flag -->
  <link href="https://invest.jakarta.go.id/front\flag-icon-css-master\css\flag-icon.css" rel="stylesheet" />

  <!-- style -->
  <link rel="stylesheet" href="../public/style/style.css">

  <!-- Highchart -->

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script src="//rawgithub.com/phpepe/highcharts-regression/master/highcharts-regression.js?8"></script>
  <!-- Highchart -->

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" type="text/css" href="https://invest.jakarta.go.id/front\flipbook\deploy\css\flipbook.style.css" />
  <!-- flipbook-->
  <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60351c7040481b47"></script> <!-- share button -->

  <!-- CSS Fancybox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

  <!-- JavaScript Fancybox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <style>
    .owl-carousel {
      position: relative;
      height: 100%;
    }

    .owl-carousel div:not(.owl-controls) {
      height: 100%;
    }

    /* CSS untuk gambar siluet */
    .silhouette {
      filter: grayscale(10%) brightness(0%);
      opacity: 0.1;
    }

    /* CSS untuk gambar burung kecil */
    .bird-small {
      position: absolute;
      bottom: 30px;
      /* Sesuaikan dengan posisi yang diinginkan */
      right: 30px;
      /* Sesuaikan dengan posisi yang diinginkan */
    }
  </style>
  <style>
    .swal2-popup {
      font-size: 0.875rem;
      /* Ubah sesuai kebutuhan */
    }

    .custom-popup-class {
      font-size: 0.875rem;
      /* Ubah sesuai kebutuhan */
    }

    @media (min-width: 768px) {

      .img-responsive {
        margin-top: -50px;
        width: auto;
        height: 500px;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }

      .img-container {
        text-align: center;
      }

      .img-container img {
        max-width: 70%;
        display: inline-block;
      }
    }

    @media (max-width: 767px) {
      .img-container img {
        max-width: 100%;
      }
    }

    @media only screen and (max-width: 576px) {
      .jifBanner {
        height: 35vh;
        /* Mengatur ketinggian gambar agar lebih kecil */
        margin-top: 65px;
      }

      #ticket {
        margin-top: -680px;
      }

      #registration {
        margin-top: -290px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg text-white fixed-top">
    <div class="container">
      <a class="navbar-brand logo" href="#top"><img src="../assets/IMG_5581.PNG" height="40" alt="" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="../assets/elements/burger-menu-svgrepo-com.svg" alt="" width="30px" height="30px"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto menu">
          <li class="nav-item hover-line active text-capitalize text-lg-center">
            <a class="nav-link px-md-3" href="../landing_page.php">About</a>
          </li>
          <li class="nav-item hover-line active text-capitalize text-lg-center">
            <a class="nav-link px-md-3" href="database/registration.php">Registration</a>
          </li>
          <li class="nav-item hover-line active text-capitalize text-lg-center">
            <a class="nav-link px-md-3" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item hover-line active text-capitalize text-lg-center">
            <a class="nav-link px-md-3" href="#speakers">Speakers</a>
          </li>
          <li class="nav-item dropdown hover-line active text-capitalize text-lg-center">
            <a class="nav-link dropdown-toggle px-md-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Language
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" onclick="translateTo('id')"><img src="../assets/indonesia.png" alt="ID flag" width="20"> Bahasa Indonesia </a>
              <a class="dropdown-item" href="#" onclick="translateTo('en')"><img src="../assets/united-states.png" alt="EN flag" width="20"> English</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $(".navbar").outerHeight();

    $(window).scroll(function(event) {
      didScroll = true;
    });

    setInterval(function() {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 250);

    function hasScrolled() {
      var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if (Math.abs(lastScrollTop - st) <= delta) return;

      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st <= 5 && window.innerWidth >= 1024) {
        // Scroll 0 position
        $(".navbar")
          .addClass("nav-nol")
          .removeClass("nav-show")
          .removeClass("nav-hide");
        $(".navbar").removeClass("shadow");
      } else if (
        st > lastScrollTop &&
        st > navbarHeight &&
        window.innerWidth >= 1024
      ) {
        // Scroll Down
        //$('.navbar').addClass('nav-hide').removeClass('nav-show').removeClass('nav-nol');
        $(".navbar")
          .addClass("nav-show")
          .removeClass("nav-hide")
          .removeClass("nav-nol");
      } else {
        // Scroll Up
        if (
          st + $(window).height() < $(document).height() &&
          window.innerWidth >= 1024
        ) {
          $(".navbar")
            .addClass("nav-show")
            .removeClass("nav-hide")
            .removeClass("nav-nol");
          $(".navbar").addClass("shadow");
        }
      }

      lastScrollTop = st;
    }
  </script>

  <!-- slider -->
  <link href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css" rel="stylesheet" />
  <link href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css" rel="stylesheet" /><!-- slider -->
  <div id="loader-wrapper">
    <div class="circle justify-content-center d-flex align-items-center h-100">
      <img src="assets/LOGO INAMICE HKI 1;1.png" class="img-item" alt="" style="max-width: 250px; width: 100%" />
    </div>
  </div>
  <div id="home" class="h-100">
    <div class="jifBanner" style="
          background-image: url(../assets/konten-feeds.png);
        ">
    </div>
  </div>
  <script src="https://invest.jakarta.go.id/front/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".banner").owlCarousel({
        autoplay: true,
        nav: false,
        loop: true,
        //autoHeight:false,
        lazyLoad: false,
        smartSpeed: 2000,
        margin: 0,
        responsive: {
          0: {
            items: 1
          },
          425: {
            items: 1
          },
          426: {
            items: 1
          },
          1000: {
            items: 1,
            mouseDrag: false
          },
        },
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>",
        ],
      });
    });

    var countDownDate = new Date("2023/08/03 09:00:00").getTime();
    var x = setInterval(function() {
      var now = new Date().getTime();
      var distance = countDownDate - now;
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      if (days < 10) {
        days_time = "0" + days;
      } else {
        days_time = days;
      }
      if (hours < 10) {
        hours_time = "0" + hours;
      } else {
        hours_time = hours;
      }
      if (minutes < 10) {
        minutes_time = "0" + minutes;
      } else {
        minutes_time = minutes;
      }
      if (seconds < 10) {
        second_time = "0" + seconds;
      } else {
        second_time = seconds;
      }

      document.getElementById("hari").innerHTML = days_time;
      document.getElementById("jam").innerHTML = hours_time;
      document.getElementById("menit").innerHTML = minutes_time;
      document.getElementById("detik").innerHTML = second_time;

      if (distance < 0) {
        clearInterval(x);
        document.getElementsByClassName("timer")[0].innerHTML = "";
        document.getElementsByClassName("countdown")[0].innerHTML = "";
        document.getElementsByClassName("greetings")[0].innerHTML =
          "HAPPENING NOW";
        document.getElementsByClassName("greetings")[0].classList.add("pb-5");
      }

      //document.getElementsByClassName('greetings')[0].innerHTML = days;       exit();
      /*if(days==0 && distance < 0){
        clearInterval(x);
        document.getElementsByClassName('timer')[0].innerHTML = '';
        document.getElementsByClassName('countdown')[0].innerHTML = '';            
        document.getElementsByClassName('greetings')[0].innerHTML = 'HAPPENING NOW';            
        document.getElementsByClassName('greetings')[0].classList.add('pb-5');
    }else if(days < 0 && distance < 0){
        clearInterval(x);
        document.getElementsByClassName('timer')[0].innerHTML = '';
        document.getElementsByClassName('countdown')[0].innerHTML = '';            
        document.getElementsByClassName('greetings')[0].innerHTML = '';
    }*/
    }, 1000);
  </script>

  <div class="container py-5 mt-5">
    <div class="row">
      <div class="col">
        <div class="img-container">
          <a href="../assets/ticket.PNG" data-fancybox>
              <img src="../assets/ticket.PNG" alt="" id="ticket" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Registration Form -->
  <div id="registration" class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row align-items-center mb-4">
          <div class="col-md-3 col-6 d-flex align-items-center">
            <h2 class="title-3 text-dark font-weight-bold" id="Title">Registration</h2>
            <img class="img-fluid ml-2" src="../assets/elements/small_iconTittle_2.png" style="border-radius: 8px 0 8px 0; width: 30px; transform: rotate(90deg)" />
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6 d-none d-md-block position-relative">
            <!-- Gambar Burung Besar (Siluet) -->
            <img class="img-fluid silhouette" src="../assets/elements/iconBurung.png" style="max-width: 100%; height: auto; " />

            <!-- Gambar Burung Kecil (Warna Asli) -->
            <img class="img-fluid bird-small" src="../assets/elements/iconBurung.png" alt="Small Bird" style="max-width: 40%; height: auto;" />
          </div>
          <div class="col-md-6">
            <div class="py-4 text-black text-center">
              <p id="Title">Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.</p>
            </div>
            <form id="registrasi" name="registrasi" method="post" action="registration.php">
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required />
              </div>
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="gender">Jenis Kelamin</label>
                <select id="gender" name="gender" class="form-control">
                  <option value="" disabled selected hidden>Pilih Jenis Kelamin Anda</option>
                  <option>Pria</option>
                  <option>Wanita</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="hp">Nomor Telepon</label>
                <input type="text" class="form-control" id="hp" name="hp" required />
              </div>
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="mail">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" required />
                <div class="invalid-feedback">Invalid email</div>
              </div>
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required />
              </div>
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" autocomplete="off" />
              </div>
              <div class="mb-3">
                <label class="font-weight-bold" id="fieldTitle" for="nama_organisasi">Organisasi/Perusahaan/Institusi</label>
                <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" autocomplete="off" />
              </div>
              <div class="mb-3 text-center">
                <button type="submit" class="btn bg-solid-2 font-weight-bold px-5" id="btnTitle">Selanjutnya</button>
              </div>
            </form>
            <div class="bg-solid-9 py-3 px-5 text-center">
              <p id="Title"><small><strong>Kami menangani masalah privasi dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.</strong></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Registration Form -->

  <div class="jumbotron m-0 bg-solid-2 rounded-0 py-0">
    <div class="container py-4">
      <footer>
        <div class="row justify-content-center">
          <div class="col-12 text-left py-4">
            <a class="navbar-brand footer"><img src="../assets/IMG_5581.PNG" height="150px" alt="" /></a>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-2 text-left">
            <div class="font-weight-bold pb-3 pt-5 text-footer">
              INAMICE 2024
            </div>
            <div class="py-1">
              <small><a class="" href="#about">
                  About</a></small>
            </div>
            <div class="py-1">
              <small><a class="" href="#speakers">Speakers</a></small>
            </div>
            <div class="py-1">
              <small><a class="" href="#schedule">Schedule</a></small>
            </div>
          </div>
          <div class="col-12 col-sm-2 text-left">
            <div class="font-weight-bold pb-3 pt-5 text-footer">
              Register
            </div>
            <div class="py-1">
              <small><a class="" href="#exhibition1">How to Register</a></small>
            </div>
            <div class="py-1">
              <small><a class="" href="#exhibition2">Food and Allergy Form</a></small>
            </div>
            <div class="py-1">
              <small><a class="" href="#exhibition2">CHSE</a></small>
            </div>
            <div class="py-1">
              <small><a class="" href="#exhibition2">Cancellation</a></small>
            </div>
          </div>
          <div class="col-12 col-sm-2 text-left">
            <div class="font-weight-bold pb-3 pt-5 text-footer">
            </div>
          </div>
          <div class="col-12 col-sm-3 text-left">
            <div class="font-weight-bold pb-3 pt-5 text-footer">
            </div>
          </div>
          <div class="col-12 col-sm-3 text-left align-self-center mt-5 mt-sm-0">
            <form id="subscribe" name="subscribe">
              <input type="hidden" name="_token" value="8KutnrrrtXvrAWDhWnfSCzmjXKL39W24oLUo6yNB" />
              <div class="form-group row">
                <div class="col-sm-10 text-left">
                  <small>Do not miss our latest business
                    opportunity updates.</small>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" id="email_subscribe" name="email_subscribe" class="form-control rounded-pills" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                <div class="invalid-feedback text-white">Invalid email</div>
                <div class="input-group-append">
                  <button type="submit" class="btn sosmed text-white btn-subscribe">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 text-left text-sm-right align-self-center">
          </div>
          <div class="col-12 col-sm-2 text-left text-sm-right align-self-center">
            <div class="font-weight-bold py-3">
              <a>Contact Us</a>
            </div>
          </div>
          <div class="col-12 col-sm-4 text-center py-3">
            <a target="" href="https://www.instagram.com/inamice2024/"><span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/instagram.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px; border-radius: 10px;"> </span></a>
             
            <a target="_blank" href="https://twitter.com/jic_jakarta"><span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/twitter.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px; border-radius: 10px;"> </span></a>
             
            <a target="_blank" href="https://www.linkedin.com/company/jakartainvestmentcentre/">
              <span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/linkedin.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px; border-radius: 10px;"> </span></a>
             
            <a target="_blank" href="mailto:info.inamice@bisnis.pnj.ac.id"><span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/mail.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px; border-radius: 10px;"> </span></a>
             
          </div>
        </div>
        <hr class="bg-solid-8" />
        <div>
          <small>© Indonesia Mice Conference And Exhibition 2024<br />
            Jl. Prof. DR. G.A. Siwabessy, Kampus Universitas Indonesia Depok 16425</small>
        </div>
      </footer>
    </div>
  </div>

  <script>
    $.ajax({
      type: "post",
      url: "/registrasi",
      data: data,
      success: function(respon) {
        // Redirect ke halaman lain setelah formulir disubmit
        window.location.href = "registration.php"; // Ganti "sukses.php" dengan halaman tujuan
      },
      error: function(error) {
        console.log("error");
      },
    });
  </script>
  <script>
    $(function() {
      $(".menu a[href*=#]").on("click", function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top,
          },
          1000,
          "linear"
        );
      });
    });

    $(window).on("load", function() {
      $("#loader-wrapper").delay(100).fadeOut(500);
    });
  </script>
  <script src="https://invest.jakarta.go.id/front/js/helper.js"></script>
  <script src="https://invest.jakarta.go.id/front/bootstrap-4.1.3-dist/js/bootstrap.bundle.js"></script>

  <script src="https://invest.jakarta.go.id/front/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <!-- Slide Images -->

  <script src="https://invest.jakarta.go.id/front/flipbook/deploy/js/flipbook.min.js"></script>
  <!-- flipbook-->
  <!--parallax-->
  <script>
    (function($) {
      var $window = $(window);
      var windowHeight = $window.height();

      $window.resize(function() {
        windowHeight = $window.height();
      });

      $.fn.parallax = function(xpos, speedFactor, outerHeight) {
        var $this = $(this);
        var getHeight;
        var firstTop;
        var paddingTop = 0;

        //get the starting position of each element to have parallax applied to it
        $this.each(function() {
          firstTop = $this.offset().top;
        });

        if (outerHeight) {
          getHeight = function(jqo) {
            return jqo.outerHeight(true);
          };
        } else {
          getHeight = function(jqo) {
            return jqo.height();
          };
        }

        // setup defaults if arguments aren't specified
        if (arguments.length < 1 || xpos === null) xpos = "50%";
        if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
        if (arguments.length < 3 || outerHeight === null) outerHeight = true;

        // function to be called whenever the window is scrolled or resized
        function update() {
          var pos = $window.scrollTop();

          $this.each(function() {
            var $element = $(this);
            var top = $element.offset().top;
            var height = getHeight($element);

            // Check if totally above or totally below viewport
            if (top + height < pos || top > pos + windowHeight) {
              return;
            }

            $this.css(
              "backgroundPosition",
              xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px"
            );
          });
        }

        $window.bind("scroll", update).resize(update);
        update();
      };
    })(jQuery);
  </script>
  <script type="text/javascript">
    $("#subscribe").on("submit", function(e) {
      e.preventDefault();
      var data = $("#subscribe").serialize();
      $.ajax({
        type: "post",
        url: "/subscribe",
        data: data,
        success: function(data) {
          console.log("success");
          swal("", "Thank's for subscribe", "success");
        },
        error: function(error) {
          console.log("error");
        },
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Periksa apakah parameter query string success diatur
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.has('success') && urlParams.get('success') === 'true') {
        // Tampilkan popup notifikasi SweetAlert2
        Swal.fire({
          title: 'Congratulations! You Have Successfully Registered for this Event',
          icon: 'success',
          showCloseButton: true,
          showConfirmButton: false,
          customClass: {
            popup: 'custom-popup-class' // Nama kelas CSS khusus untuk notifikasi
          }
        });
      }
    });
  </script>


  <script src="../public/js/id_eng1.js"></script>
</body>

</html>