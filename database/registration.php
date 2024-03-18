<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['hp'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $confirmPassword = $_POST['repassword'];
    $company = $_POST['bidang'];
    $businessSector = $_POST['sectors'];

    // Validasi bahwa password dan konfirmasi password cocok
    if ($password !== $confirmPassword) {
        die("Error: Passwords tidak cocok.");
    }

    // Hash password sebelum menyimpannya ke dalam database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Periksa apakah file gambar telah diunggah
    if(isset($_FILES['paymentProof']) && $_FILES['paymentProof']['error'] === UPLOAD_ERR_OK) {
        // Direktori tempat Anda ingin menyimpan file gambar
        $uploadDir = '../uploads';

        // Mendapatkan informasi tentang file yang diunggah
        $uploadFile = $uploadDir . basename($_FILES['paymentProof']['name']);

        // Pindahkan file yang diunggah ke direktori yang ditentukan
        if (move_uploaded_file($_FILES['paymentProof']['tmp_name'], $uploadFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Error: Gagal mengunggah file.";
        }
    } else {
        echo "Error: Tidak ada file yang diunggah atau terjadi kesalahan.";
    }

    // Path file gambar untuk disimpan dalam database
    $paymentProofPath = isset($uploadFile) ? $uploadFile : '';

    // Query SQL untuk menyimpan data ke dalam tabel
    $sql = "INSERT INTO registration_user (firstName, lastName, hp, mail, pwd, repassword, bidang, sectors, payment_proof) 
            VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$hashedPassword', '$confirmPassword', '$company', '$businessSector', '$paymentProofPath')";

    // Jalankan query dan periksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman lain setelah formulir disubmit
        header("Location: registration.php"); // Ganti "sukses.php" dengan halaman tujuan
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
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-FFV0RGSW01"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-FFV0RGSW01");
    </script>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Indonesia Mice Conference And Exhibition | INAMICE 2024</title>
    <meta
      name="title"
      content="Jakarta Investment Forum | Global City And Beyond"
    />
    <meta
      name="description"
      content="Jakarta Investment Forum is an international annual forum to promote and showcase business opportunities in Jakarta Capital City"
    />
    <meta
      name="keywords"
      content="jakarta investment center, invest jakarta, penanaman modal, jakarta green investment"
    />
    <link
      rel="canonical"
      href="https://invest.jakarta.go.id/jakarta-investment-forum"
    />
    <meta
      property="og:url"
      content="https://invest.jakarta.go.id/jakarta-investment-forum"
    />
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta
      property="og:title"
      content="Jakarta Investment Forum | Global City And Beyond"
    />
    <meta
      property="og:image"
      content="https://invest.jakarta.go.id/front/img/jif/jif-fav.png"
    />
    <meta
      property="og:site_name"
      content="Jakarta Investment Forum | Global City And Beyond"
    />
    <meta
      property="og:description"
      content="Jakarta Investment Forum is an international annual forum to promote and showcase business opportunities in Jakarta Capital City"
    />
    <meta name="Rating" content="general" />
    <meta name="Robots" content="all" />
    <link
      rel="shortcut icon"
      href="../assets/LOGO INAMICE HKI 1;1.png"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800|Raleway:100,200,300,400,600,700,800"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plaster&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap"
      rel="stylesheet"
    />
    <!-- blockquote -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://invest.jakarta.go.id/front\bootstrap-4.1.3-dist\css\bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://invest.jakarta.go.id/front\css\custom.css?v=13032024155158"
      rel="stylesheet"
    />
    <link
      href="https://invest.jakarta.go.id/front\css\animate.min.css"
      rel="stylesheet"
    />
    <!--<link href="https://invest.jakarta.go.id/front\css\font-awesome.min.css" rel="stylesheet">-->
    <link
      href="https://invest.jakarta.go.id/front\fontawesome-free-5.15.3-web\css\all.css"
      rel="stylesheet"
    />
    <script
      src="https://kit-pro.fontawesome.com/releases/v5.10.1/js/pro.min.js"
      data-auto-fetch-svg=""
    ></script>
    <!-- slider -->
    <link
      href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css"
      rel="stylesheet"
    />
    <!-- slider -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.1/css/ionicons.min.css"
      rel="stylesheet"
    />
    <!-- translate -->
    <link
      href="https://invest.jakarta.go.id/front\css\gtrans.css"
      rel="stylesheet"
    />
    <script src="https://invest.jakarta.go.id/js/jquery.min.js"></script>
    <script src="https://invest.jakarta.go.id/js/client.js"></script>
    <script src="https://invest.jakarta.go.id/js/googleapis.proxy.js?onload=startup"></script>
    <!-- translate -->
    <link
      href="https://invest.jakarta.go.id/front\css\flag.css"
      rel="stylesheet"
    />
    <!-- flag -->
    <link
      href="https://invest.jakarta.go.id/front\flag-icon-css-master\css\flag-icon.css"
      rel="stylesheet"
    />
    <!-- Highchart -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="//rawgithub.com/phpepe/highcharts-regression/master/highcharts-regression.js?8"></script>
    <!-- Highchart -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://invest.jakarta.go.id/front\flipbook\deploy\css\flipbook.style.css"
    />
    <!-- flipbook-->
    <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60351c7040481b47"></script> <!-- share button -->

    <script
      type="text/javascript"
      src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"
    ></script>
    <style>
      .owl-carousel {
        position: relative;
        height: 100%;
      }
      .owl-carousel div:not(.owl-controls) {
        height: 100%;
      }
    </style>
    <style>
      /*
  .owl-carousel .exhibiz {
  position: relative;
  height: 100%;
  }
  .owl-carousel .exhibiz div:not(.owl-controls) {
  height: 100%;
  }*/
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg text-white fixed-top">
      <div class="container">
        <a
          class="navbar-brand logo" href="#top"
          ><img
            src="../assets/LOGO INAMICE HKI 1;1.png"
            height="40"
            alt=""
        /></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto menu">
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#about">About</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#registration">Registration</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#venue">Venue</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#speakers">Speakers</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#exhibition">Exhibition</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#projects">Projects</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a class="nav-link px-md-3" href="#rundown">Rundown</a>
            </li>
            <li
              class="nav-item hover-line active text-capitalize text-lg-center"
            >
              <a
                class="nav-link px-md-3"
                href="#"
                data-toggle="modal"
                data-target="#loginModal"
                >Login</a
              >
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

      $(window).scroll(function (event) {
        didScroll = true;
      });

      setInterval(function () {
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
    <link
      href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css"
      rel="stylesheet"
    />
    <link
      href="https://invest.jakarta.go.id/front\OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css"
      rel="stylesheet"
    /><!-- slider -->
    <div id="home" class="h-100">
      <div
        class="jifBanner"
        style="
          background-image: url(../assets/konten\ feeds\ 2\ row\ \(1\).png);
        "
      >
        </div>
      </div>
    <script src="https://invest.jakarta.go.id/front/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <script>
      $(document).ready(function () {
        $(".banner").owlCarousel({
          autoplay: true,
          nav: false,
          loop: true,
          //autoHeight:false,
          lazyLoad: false,
          smartSpeed: 2000,
          margin: 0,
          responsive: {
            0: { items: 1 },
            425: { items: 1 },
            426: { items: 1 },
            1000: { items: 1, mouseDrag: false },
          },
          navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>",
          ],
        });
      });

      var countDownDate = new Date("2023/08/03 09:00:00").getTime();
      var x = setInterval(function () {
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
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="loginModalLabel">
              Login
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body px-5">
            <form id="loginjif" name="loginjif">
              <input
                type="hidden"
                name="_token"
                value="8KutnrrrtXvrAWDhWnfSCzmjXKL39W24oLUo6yNB"
              />
              <div class="form-group">
                <label class="font-weight-bold" for="u">Email</label>
                <input
                  id="email"
                  type="email"
                  class="form-control"
                  name="username"
                  value=""
                  autocomplete="off"
                  autofocus=""
                  placeholder=""
                  onkeyup="validEmail('email')"
                />
                <div class="invalid-feedback">Invalid email</div>
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="p">Password</label>
                <input
                  id="password"
                  type="password"
                  class="form-control"
                  name="password"
                  autocomplete="off"
                  placeholder=""
                />
              </div>
              <div class="row mt-4 mb-0 align-items-center">
                <div class="col-md-6">
                  <div class="form-group">
                    <button
                      type="submit"
                      value="Login"
                      class="btn bg-solid-2 font-weight-bold px-5"
                    >
                      Login
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group text-md-right">
                    <a href="#" onclick="reverse()"><u>Forgot password?</u></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="resetModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body mb-4">
            <div class="text-center mb-4">
              <h5 class="modal-title font-weight-bold" id="loginModalLabel">
                Forgot Password
              </h5>
              Enter your email address
            </div>
            <form id="resetjif" name="resetjif">
              <input
                type="hidden"
                name="_token"
                value="8KutnrrrtXvrAWDhWnfSCzmjXKL39W24oLUo6yNB"
              />
              <div class="form-group">
                <input
                  id="email_recovery"
                  type="email"
                  class="form-control py-4"
                  name="email_recovery"
                  autocomplete="off"
                  autofocus=""
                  placeholder="Enter email address"
                  onkeyup="validEmail('email_recovery')"
                />
                <div class="invalid-feedback">Invalid email</div>
              </div>
              <div class="form-group mt-4 mb-0">
                <button
                  type="submit"
                  value="Send"
                  class="btn btn-block btn-primary font-weight-bold"
                >
                  Continue
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="responModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body mb-5">
            <div id="respon"></div>
          </div>
        </div>
      </div>
    </div>

<!-- Start Registration Form -->
<div id="registration" class="container py-5 clearfix">
      <div class="row justify-content-center pt-5">
        <div class="col-sm-10">
          <div class="row" style="height: 65px">
            <div
              class="col-xs-4 col-md-2 col-2 text-left d-flex align-items-end mr-3"
            >
              <h2 class="title-3 text-dark font-weight-bold">Registration</h2>
            </div>
            <div class="col-md-1 col">
              <img
                class="img-fluid"
                src="https://invest.jakarta.go.id/front/img/jif/rectangle.png"
                style="border-radius: 8px 0 8px 0; width: 30px"
              />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-3"></div>
            <div
              class="col-md-9 col-12"
              style="border-top: 1px solid #000000"
            ></div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 d-flex align-items-center py-3">
              <img
                class="img-fluid"
                src="https://invest.jakarta.go.id/front/img/jif/batik.png"
              />
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="py-3 text-grey">
                Fill in the registration data. It will take a couple of minutes.
              </div>
              <form id="registrasi" name="registrasi" method="post" action="registration.php">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="firstName"
                      name="firstName"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold" for="inputPassword4"
                      >Last Name</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="lastName"
                      name="lastName"
                      placeholder=""
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label class="font-weight-bold">Phone Number</label>
                    <input
                      type="text"
                      class="form-control"
                      id="hp"
                      name="hp"
                      placeholder=""
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label class="font-weight-bold">Email Address</label>
                    <input
                      type="email"
                      class="form-control"
                      id="mail"
                      name="mail"
                      placeholder=""
                      
                    />
                    <div class="invalid-feedback">Invalid email</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold" for="inputEmail4"
                      >Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="pwd"
                      name="pwd"
                      placeholder=""
                    />
                    <div class="invalid-feedback">
                      Passwords min 5 character
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="font-weight-bold" for="inputPassword4"
                      >Re Enter Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="repassword"
                      name="repassword"
                      placeholder=""
                    />
                    <div class="invalid-feedback">Passwords don't match</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label class="font-weight-bold">Company</label>
                    <input
                      type="text"
                      class="form-control"
                      id="bidang"
                      name="bidang"
                      placeholder=""
                      autocomplete="off"
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label class="font-weight-bold" for="inputEmail4"
                      >Business Sectors</label
                    >
                    <select
                      id="sectors"
                      name="sectors"
                      class="form-control text-truncate"
                    >
                      <option value="" disabled selected hidden="">
                        Select Business Sectors
                      </option>
                      <option class="text-truncate" value="13">
                        Chemical and Pharmaceutical Industry
                      </option>
                      <option class="text-truncate" value="9">
                        Construction
                      </option>
                      <option class="text-truncate" value="10">
                        Electricity, Gas, and Water Supply
                      </option>
                      <option class="text-truncate" value="19">Fishery</option>
                      <option class="text-truncate" value="25">
                        Food Crops, Plantations, and Livestock
                      </option>
                      <option class="text-truncate" value="29">
                        Food Industry
                      </option>
                      <option class="text-truncate" value="28">Forestry</option>
                      <option class="text-truncate" value="8">
                        Hotel and Restaurant
                      </option>
                      <option class="text-truncate" value="5">
                        Housing, Industrial Estate, and Office Building
                      </option>
                      <option class="text-truncate" value="11">
                        Leather Goods and Footwear Industry
                      </option>
                      <option class="text-truncate" value="14">
                        Machinery, Electronic, Medical Instrument, Precision,
                        Optical, and Watch Industry
                      </option>
                      <option class="text-truncate" value="31">
                        Medical Preci. & Optical Instru, Watches & Clock,
                        Machinary, and Electronic Industry
                      </option>
                      <option class="text-truncate" value="27">
                        Metal, Except Machinery and Equipment Industry
                      </option>
                      <option class="text-truncate" value="33">
                        Metal Industry not Machinery & Electronic Industry
                      </option>
                      <option class="text-truncate" value="12">Mining</option>
                      <option class="text-truncate" value="32">
                        Motor Vehicles & Other Transport Equip. Industry
                      </option>
                      <option class="text-truncate" value="24">
                        Non-Metallic Mineral Industry
                      </option>
                      <option class="text-truncate" value="15">
                        Other Industries
                      </option>
                      <option class="text-truncate" value="6">
                        Other Services
                      </option>
                      <option class="text-truncate" value="16">
                        Paper and Printing Industry
                      </option>
                      <option class="text-truncate" value="30">
                        Real Estate, Ind. Estate & Business Activities
                      </option>
                      <option class="text-truncate" value="18">
                        Rubber and Plastic Based Goods Industry
                      </option>
                      <option class="text-truncate" value="23">
                        Textile Industry
                      </option>
                      <option class="text-truncate" value="7">
                        Trade and Reparation
                      </option>
                      <option class="text-truncate" value="4">
                        Transportation, Warehouse, and Telecommunication
                      </option>
                      <option class="text-truncate" value="22">
                        Vehicle and Other Transportation Industry
                      </option>
                      <option class="text-truncate" value="26">
                        Wood Industry
                      </option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <label class="font-weight-bold">Upload Payment Proof</label>
                    <input type="file" class="form-control-file" id="paymentProof" name="paymentProof">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col text-center">
                    <br />
                    <button
                      type="submit"
                      class="btn bg-solid-2 font-weight-bold px-5"
                      role="button"
                    >
                      Register
                    </button>
                  </div>
                </div>
                <div class="bg-solid-9 py-3 px-3 px-lg-5">
                  <small
                    >We take privacy issues seriously. You can be sure that your
                    personal data is securely protected.</small
                  >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End Registration Form -->


    <div class="jumbotron m-0 footer-text bg-solid-2 rounded-0 py-0">
      <div class="container py-4">
        <footer>
          <div class="row justify-content-center">
            <div class="col-12 text-left py-4">
              <a class="navbar-brand footer" href="https://invest.jakarta.go.id"
                ><img
                  src="https://invest.jakarta.go.id/front/img/logo/support.png"
                  height="50px"
                  alt=""
              /></a>
              <a class="navbar-brand footer" href="https://invest.jakarta.go.id"
                ><img
                  src="https://invest.jakarta.go.id/front/img/jif/logo.png"
                  height="40px"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-sm-2 text-left">
              <div class="font-weight-bold pb-3 pt-5 text-footer">
                JIF Plenary
              </div>
              <div class="py-1">
                <small
                  ><a
                    class=""
                    href="https://invest.jakarta.go.id/jakarta-investment-forum"
                  >
                    Overview</a
                  ></small
                >
              </div>
              <div class="py-1">
                <small><a class="" href="#venue">Venue</a></small>
              </div>
              <div class="py-1">
                <small><a class="" href="#speakers">Speakers</a></small>
              </div>
              <div class="py-1">
                <small><a class="" href="#thematic">Thematic</a></small>
              </div>
              <div class="py-1">
                <small
                  ><a class="" href="#infrastructures"
                    >Infrastructures</a
                  ></small
                >
              </div>
              <div class="py-1">
                <small><a class="" href="#achievements">Achievements</a></small>
              </div>
            </div>
            <div class="col-12 col-sm-2 text-left">
              <div class="font-weight-bold pb-3 pt-5 text-footer">
                JIF Exhibition
              </div>
              <div class="py-1">
                <small><a class="" href="#exhibition1">Exhibition #1</a></small>
              </div>
              <div class="py-1">
                <small><a class="" href="#exhibition2">Exhibition #2</a></small>
              </div>
            </div>
            <div class="col-12 col-sm-2 text-left">
              <div class="font-weight-bold pb-3 pt-5 text-footer">
                Investment Guides
              </div>
              <div class="py-1">
                <small><a class="" href="#booklet">Project Booklet</a></small>
              </div>
              <div class="py-1">
                <small><a class="" href="#projects">Project List</a></small>
              </div>
            </div>
            <div class="col-12 col-sm-3 text-left">
              <div class="font-weight-bold pb-3 pt-5 text-footer">
                Jakarta Investment Centre
              </div>
              <div class="py-1">
                <small><a class="" href="/jic">About JIC</a></small>
              </div>
              <div class="py-1">
                <small
                  ><a class="" href="/publication-news-events"
                    >Publication</a
                  ></small
                >
              </div>
            </div>
            <div
              class="col-12 col-sm-3 text-left align-self-center mt-5 mt-sm-0"
            >
              <form id="subscribe" name="subscribe">
                <input
                  type="hidden"
                  name="_token"
                  value="8KutnrrrtXvrAWDhWnfSCzmjXKL39W24oLUo6yNB"
                />
                <div class="form-group row">
                  <div class="col-sm-10 text-left">
                    <small
                      >Do not miss Jakarta's latest business and investment
                      opportunity updates.</small
                    >
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input
                    type="email"
                    id="email_subscribe"
                    name="email_subscribe"
                    class="form-control rounded-pills"
                    placeholder=""
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2"
                  />
                  <div class="invalid-feedback text-white">Invalid email</div>
                  <div class="input-group-append">
                    <button
                      type="submit"
                      class="btn sosmed text-white btn-subscribe"
                    >
                      Subscribe
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row justify-content-center">
            <div
              class="col-12 col-sm-6 text-left text-sm-right align-self-center"
            >
              <div class="font-weight-bold py-3">Careers</div>
            </div>
            <div
              class="col-12 col-sm-2 text-left text-sm-right align-self-center"
            >
              <div class="font-weight-bold py-3">
                <a href="contact-us">Contact Us</a>
              </div>
            </div>
            <div class="col-12 col-sm-4 text-center py-3">
              <a
                target="_blank"
                href="https://www.facebook.com/jakartainvestmentcentre"
                ><span class="fa-stack fa-lg sosmed"> </span
              ></a>
               
              <a target="_blank" href="https://twitter.com/jic_jakarta"
                ><span class="fa-stack fa-lg sosmed"> </span
              ></a>
               
              <a
                target="_blank"
                href="https://www.linkedin.com/company/jakartainvestmentcentre/"
              >
                <span class="fa-stack fa-lg sosmed"> </span
              ></a>
               
              <a target="_blank" href="https://www.instagram.com/jic.jakarta/"
                ><span class="fa-stack fa-lg sosmed"> </span
              ></a>
               
            </div>
          </div>
          <hr class="bg-solid-8" />
          <div>
            <small
              >© Jakarta Investment Centre 2023<br />
              Jl. HR. Rasuna Said Kav. C22, Jakarta Selatan, DKI Jakarta
              12940</small
            >
          </div>
        </footer>
      </div>
    </div>

    <script>
    $.ajax({
    type: "post",
    url: "/registrasi",
    data: data,
    success: function (respon) {
        // Redirect ke halaman lain setelah formulir disubmit
        window.location.href = "registration.php"; // Ganti "sukses.php" dengan halaman tujuan
    },
    error: function (error) {
        console.log("error");
    },
});
    </script>
    <script>
      $(function () {
        $(".menu a[href*=#]").on("click", function (e) {
          e.preventDefault();
          $("html, body").animate(
            {
              scrollTop: $($(this).attr("href")).offset().top,
            },
            1000,
            "linear"
          );
        });
      });

      $(window).on("load", function () {
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
      (function ($) {
        var $window = $(window);
        var windowHeight = $window.height();

        $window.resize(function () {
          windowHeight = $window.height();
        });

        $.fn.parallax = function (xpos, speedFactor, outerHeight) {
          var $this = $(this);
          var getHeight;
          var firstTop;
          var paddingTop = 0;

          //get the starting position of each element to have parallax applied to it
          $this.each(function () {
            firstTop = $this.offset().top;
          });

          if (outerHeight) {
            getHeight = function (jqo) {
              return jqo.outerHeight(true);
            };
          } else {
            getHeight = function (jqo) {
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

            $this.each(function () {
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
      $("#subscribe").on("submit", function (e) {
        e.preventDefault();
        var data = $("#subscribe").serialize();
        $.ajax({
          type: "post",
          url: "/subscribe",
          data: data,
          success: function (data) {
            console.log("success");
            swal("", "Thank's for subscribe", "success");
          },
          error: function (error) {
            console.log("error");
          },
        });
      });
    </script>
  </body>
</html>