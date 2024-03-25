<?php
include 'connection.php';

// Periksa apakah user_id telah diterima dari URL
if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari formulir
        $question1 = $_POST['question_1'];
        $question2 = $_POST['question_2'];
        $question3 = $_POST['question_3'];
        $question4 = $_POST['question_4'];
        $question5 = $_POST['question_5'];
        $question6 = $_POST['question_6'];
        $question7 = $_POST['question_7'];

        // Query SQL untuk menyimpan data ke dalam tabel
        $sql = "INSERT INTO user_alergic (user_id, question_1, question_2, question_3, question_4, question_5, question_6, question_7) 
                VALUES ('$user_id', '$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7')";

        // Jalankan query dan periksa apakah berhasil
        if ($conn->query($sql) === TRUE) {
            // Redirect ke halaman lain setelah formulir disubmit
            header("Location: chse.php?user_id=$user_id#registration"); // Ganti "sukses.php" dengan halaman tujuan
            exit; // Pastikan tidak ada output lain sebelum redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Error: user_id not found in URL.";
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
    <!-- Highchart -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="//rawgithub.com/phpepe/highcharts-regression/master/highcharts-regression.js?8"></script>
    <!-- Highchart -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://invest.jakarta.go.id/front\flipbook\deploy\css\flipbook.style.css" />
    <!-- flipbook-->
    <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60351c7040481b47"></script> <!-- share button -->

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
            <a class="navbar-brand logo" href="../landing_page.php"><img src="../assets/IMG_5581.PNG" height="40" alt="" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="nav-item hover-line active text-capitalize text-lg-center">
                        <a class="nav-link px-md-3" href="../landing_page.php">About</a>
                    </li>
                    <li class="nav-item hover-line active text-capitalize text-lg-center">
                        <a class="nav-link px-md-3" href="#registration">Registration</a>
                    </li>
                    <li class="nav-item hover-line active text-capitalize text-lg-center">
                        <a class="nav-link px-md-3" href="../landing_page.php">Schedule</a>
                    </li>
                    <li class="nav-item hover-line active text-capitalize text-lg-center">
                        <a class="nav-link px-md-3" href="../landing_page.php">Speakers</a>
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
    <div id="home" class="h-100">
        <div class="jifBanner" style="
          background-image: url(../assets/konten\ feeds\ 2\ row\ \(1\).png);
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
                <div class="alert alert-warning p-4">
                    <h4 class="alert-heading custom-text">Pembayaran dapat melalui :</h4>
                    <p class="mb-0 custom-text"><strong>Bank BCA Digital 007189959247 - Fitriyani Oktiana</strong></p>
                    <br>
                    <h4 class="alert-heading"><strong>Perhatian!</strong></h4>
                    <p><strong>Pembatalan registrasi pada H-7</strong> acara maka dana akan <strong>dikembalikan sebesar 25%</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Registration Form -->
    <div id="registration" class="container py-5 clearfix">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="row" style="height: 65px">
                    <div class="col-xs-4 col-md-2 col-2 text-left d-flex align-items-end mr-3">
                        <h2 class="title-3 text-dark font-weight-bold">Registration</h2>
                    </div>
                    <div class="col-md-1 col">
                        <img class="img-fluid" src="assets/elements/iconBurung.png" style="border-radius: 8px 0 8px 0; width: 30px" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-3"></div>
                    <div class="col-md-9 col-12" style="border-top: 1px solid #000000"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 d-flex align-items-center py-3">
                        <img class="img-fluid" src="assets/elements/iconBurung.png" />
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="py-4 text-black">
                            Fill in the registration data. It will take a couple of minutes.
                        </div>
                        <form id="registrasi" name="registrasi" method="post" action="alergic.php?user_id=<?php echo $user_id; ?>">
                            <div class="form-group">
                                <label class="font-weight-bold">Do you have allergies to certain foods?</label>
                                <div class="yes-no-options">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question_1" id="question_1" value="yes">
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question_1" id="question_1" value="no">
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold">If so, what food items trigger your allergy?</label>
                                    <input type="text" class="form-control" id="question_2" name="question_2" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Are you allergic to certain food additives or preservatives?</label>
                                <div class="yes-no-options">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_3" value="yes">
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_3" value="no">
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold">If so, what preservative triggered your allergy?</label>
                                    <input type="text" class="form-control" id="question_4" name="question_4" placeholder="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold">Is there a history of allergic reactions or health problems related to certain foods?</label>
                                    <input type="text" class="form-control" id="question_5" name="question_5" placeholder="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold">Are there any special instructions you would like to share regarding the preparation or handling of your food?</label>
                                    <input type="text" class="form-control" id="question_6" name="question_6" placeholder="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold">Are you a vegetarian or a vegan?</label>
                                    <input type="text" class="form-control" id="question_7" name="question_7" placeholder="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col text-center">
                                    <br />
                                    <button type="submit" class="btn bg-solid-2 font-weight-bold px-5" role="button">
                                        Next
                                    </button>
                                </div>
                            </div>
                            <div class="bg-solid-9 py-3 px-3 px-lg-5">
                                <small>We take privacy issues seriously. You can be sure that your
                                    personal data is securely protected.</small>
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
                        <a target="" href="https://www.instagram.com/inamice2024/"><span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/instagram.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px;"> </span></a>
                         
                        <a target="_blank" href="https://twitter.com/jic_jakarta"><span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/twitter.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px;"> </span></a>
                         
                        <a target="_blank" href="https://www.linkedin.com/company/jakartainvestmentcentre/">
                            <span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/linkedin.svg'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px;"> </span></a>
                         
                        <a target="_blank" href="mailto:info.inamice@bisnis.pnj.ac.id"><span class="fa-stack fa-lg sosmed" style="background-image: url('../assets/mail.png'); background-size: contain; background-repeat: no-repeat; width: 45px; height: 45px;"> </span></a>
                         
                    </div>
                </div>
                <hr class="bg-solid-8" />
                <div>
                    <small>© Indonesia Mice Conference And Exhibition 2024<br />
                        Jl. TB Simatupang No.30, Cilandak Bar., Kec.
                        Cilandak, Kota Jakarta Selatan, 12430</small>
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
</body>

</html>