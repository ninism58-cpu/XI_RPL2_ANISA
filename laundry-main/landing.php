<!DOCTYPE html>
<html>

<head>

    <title>Fresh Laundry</title>

    <link rel="stylesheet"
          type="text/css"
          href="assets/css/bootstrap.css">

    <script type="text/javascript"
            src="assets/js/jquery.js"></script>

    <script type="text/javascript"
            src="assets/js/bootstrap.js"></script>


    <style>

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fffafd;
            color: #5f5660;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar-custom {
            background: #f7c8dc;
            border: none;
            border-radius: 0;
            margin-bottom: 0;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .navbar-custom .navbar-brand {
            color: #704c5d;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-custom .navbar-nav > li > a {
            color: #704c5d;
            font-weight: bold;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .navbar-custom .navbar-nav > li > a:hover {
            background: #e9aec8;
            color: white;
        }

        .navbar-custom .navbar-toggle {
            border-color: #704c5d;
        }

        .navbar-custom .navbar-toggle .icon-bar {
            background-color: #704c5d;
        }


        /* =========================
           HOME
        ========================= */

        .home {
            min-height: 680px;
            padding-top: 155px;
            padding-bottom: 100px;
            position: relative;
            overflow: hidden;

            background:
                radial-gradient(circle at 85% 20%, rgba(255,255,255,.75) 0 70px, transparent 71px),
                radial-gradient(circle at 10% 85%, rgba(255,255,255,.55) 0 90px, transparent 91px),
                linear-gradient(135deg, #ffe0eb 0%, #e7f8f3 52%, #eee7fa 100%);
        }

        .home:before,
        .home:after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,.35);
        }

        .home:before {
            width: 180px;
            height: 180px;
            right: -50px;
            top: 120px;
        }

        .home:after {
            width: 120px;
            height: 120px;
            left: -35px;
            bottom: 80px;
        }

        .home-text {
            padding-top: 35px;
            position: relative;
            z-index: 2;
        }

        .mini-badge {
            display: inline-block;
            background: rgba(255,255,255,.75);
            color: #9b6682;
            padding: 9px 18px;
            border-radius: 30px;
            font-weight: bold;
            margin-bottom: 18px;
            box-shadow: 0 5px 15px rgba(0,0,0,.05);
        }

        .home h1 {
            font-size: 52px;
            font-weight: 800;
            color: #704c5d;
            line-height: 1.15;
            letter-spacing: -1px;
        }

        .home h1 span {
            color: #c17f9f;
        }

        .home p {
            font-size: 18px;
            line-height: 1.8;
            margin-top: 25px;
            color: #655d64;
        }

        .btn-home {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 32px;
            background: linear-gradient(135deg, #c990b0, #ad789b);
            color: white;
            border-radius: 30px;
            font-size: 17px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 10px 22px rgba(173,120,155,.28);
            transition: .3s;
        }

        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 25px rgba(173,120,155,.35);
        }

        .btn-login-outline {
            display: inline-block;
            margin: 20px 0 0 10px;
            padding: 13px 28px;
            color: #8f6079;
            border: 2px solid #c990b0;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
            background: rgba(255,255,255,.45);
        }

        .btn-login-outline:hover {
            color: white;
            background: #c990b0;
            text-decoration: none;
        }

        .btn-home:hover {
            background: #b77899;
            color: white;
            text-decoration: none;
        }


        /* =========================
           ILUSTRASI LAUNDRY
        ========================= */

        .laundry-card {
            background: rgba(255,255,255,.72);
            border: 1px solid rgba(255,255,255,.85);
            border-radius: 40px;
            padding: 35px 30px 30px;
            text-align: center;
            box-shadow: 0 20px 45px rgba(112,76,93,.12);
            position: relative;
            z-index: 2;
            backdrop-filter: blur(8px);
        }

        .machine {
            width: 190px;
            height: 220px;
            margin: 0 auto 25px;
            padding: 16px;
            border-radius: 25px;
            background: #f7d8e5;
            box-shadow: inset 0 -8px 0 rgba(112,76,93,.08), 0 12px 25px rgba(112,76,93,.12);
            position: relative;
        }

        .machine-panel {
            height: 42px;
            border-radius: 14px;
            background: #fff8fb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 14px;
            color: #9b6682;
            font-weight: bold;
            margin-bottom: 13px;
        }

        .machine-dots {
            letter-spacing: 4px;
        }

        .machine-door {
            width: 126px;
            height: 126px;
            margin: auto;
            border-radius: 50%;
            border: 9px solid #b99fb3;
            background: #dff1f2;
            box-shadow: inset 0 0 0 8px rgba(255,255,255,.45);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            position: relative;
            overflow: hidden;
        }

        .machine-door:after {
            content: "✦";
            position: absolute;
            right: 22px;
            top: 15px;
            font-size: 20px;
            color: white;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,.85);
            box-shadow: 0 4px 12px rgba(150,200,200,.15);
        }

        .bubble.one { width: 18px; height: 18px; top: 70px; right: 42px; }
        .bubble.two { width: 11px; height: 11px; top: 125px; left: 42px; }
        .bubble.three { width: 25px; height: 25px; top: 190px; right: 55px; }

        .laundry-icon {
            display: none;
        }

        .laundry-card h2 {
            color: #704c5d;
            font-weight: bold;
        }

        .laundry-card p {
            line-height: 1.7;
        }


        /* =========================
           UMUM
        ========================= */

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            color: #704c5d;
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 50px;
        }


        /* =========================
           TENTANG
        ========================= */

        .about {
            background: #e9f7f3;
        }

        .about-box {
            background: rgba(255,255,255,0.80);
            padding: 40px;
            border-radius: 25px;
            text-align: center;
        }

        .about-box p {
            font-size: 17px;
            line-height: 1.9;
        }


        /* =========================
           LAYANAN
        ========================= */

        .service-box {
            background: rgba(255,255,255,.92);
            border: 1px solid #f6e5ed;
            border-radius: 28px;
            padding: 35px 25px;
            text-align: center;
            min-height: 250px;
            margin-bottom: 25px;
            box-shadow: 0 10px 28px rgba(112,76,93,.07);
            transition: .3s;
        }

        .service-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .service-icon {
            font-size: 55px;
        }

        .service-box h3 {
            color: #9d6682;
            font-weight: bold;
        }

        .service-box p {
            line-height: 1.7;
            color: #777;
        }

        .service-price {
            display: inline-block;
            margin-top: 15px;
            padding: 9px 18px;
            background: #f7d8e5;
            color: #704c5d;
            border-radius: 20px;
            font-size: 17px;
            font-weight: bold;
            box-shadow: 0 5px 12px rgba(112,76,93,.08);
        }



        /* =========================
           KEUNGGULAN
        ========================= */

        .advantages {
            background: #fff4f8;
        }

        .advantage-box {
            text-align: center;
            padding: 25px;
        }

        .advantage-icon {
            font-size: 50px;
        }

        .advantage-box h3 {
            color: #8e6278;
            font-weight: bold;
        }


        /* =========================
           PROSES
        ========================= */

        .process-box {
            text-align: center;
            padding: 25px;
        }

        .number {
            width: 65px;
            height: 65px;
            line-height: 65px;
            margin: auto;
            border-radius: 50%;
            background: #f4c1d6;
            color: #704c5d;
            font-size: 24px;
            font-weight: bold;
        }

        .process-box h3 {
            color: #8e6278;
            font-weight: bold;
        }


        /* =========================
           KONTAK
        ========================= */

        .contact {
            background: #e9f2fb;
        }

        .contact-box {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;

            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        }

        .contact-box h3 {
            color: #8e6278;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: linear-gradient(135deg, #c5a6ba, #b792aa);
            color: white;
            text-align: center;
            padding: 30px;
        }

        footer p {
            margin: 5px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .home {
                padding-top: 120px;
            }

            .home h1 {
                font-size: 38px;
            }

            .btn-login-outline {
                margin-left: 0;
            }

            .laundry-card {
                margin-top: 50px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-custom navbar-fixed-top">

    <div class="container">


        <div class="navbar-header">

            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#menuNavbar">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>


            <a class="navbar-brand"
               href="#home">

                🧺 Fresh Laundry

            </a>

        </div>


        <div class="collapse navbar-collapse"
             id="menuNavbar">


            <ul class="nav navbar-nav navbar-right">


                <li>
                    <a href="#home">
                        Home
                    </a>
                </li>


                <li>
                    <a href="#tentang">
                        Tentang
                    </a>
                </li>


                <li>
                    <a href="#layanan">
                        Layanan
                    </a>
                </li>


                <li>
                    <a href="#proses">
                        Proses
                    </a>
                </li>


                <li>
                    <a href="#kontak">
                        Kontak
                    </a>
                </li>


                <li>
                    <a href="login.php">
                        🔐 Login
                    </a>
                </li>


            </ul>

        </div>

    </div>

</nav>



<!-- =========================
     HOME
========================= -->

<section class="home" id="home">

    <div class="container">

        <div class="row">


            <div class="col-md-7 home-text">


                <div class="mini-badge">
                    ✨ Laundry Modern & Terpercaya
                </div>

                <h1>
                    Laundry Bersih,
                    <br>
                    <span>Wangi & Praktis ✨</span>
                </h1>


                <p>

                    Serahkan urusan cucianmu kepada kami.

                    Nikmati pakaian yang bersih, wangi,

                    dan rapi tanpa perlu repot mencucinya sendiri.

                </p>


                <a href="#layanan"
                   class="btn-home">

                    Lihat Layanan →

                </a>

                <a href="login.php"
                   class="btn-login-outline">

                    🔐 Login

                </a>


            </div>



            <div class="col-md-5">


                <div class="laundry-card">

                    <div class="bubble one"></div>
                    <div class="bubble two"></div>
                    <div class="bubble three"></div>

                    <div class="machine">

                        <div class="machine-panel">
                            <span>FRESH</span>
                            <span class="machine-dots">•••</span>
                        </div>

                        <div class="machine-door">
                            👕
                        </div>

                    </div>

                    <h2>
                        Fresh & Clean ✨
                    </h2>


                    <p>

                        Bersih, wangi, rapi,

                        dan siap digunakan.

                    </p>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =========================
     TENTANG
========================= -->

<section class="section about"
         id="tentang">


    <div class="container">


        <h2 class="section-title">

            💗 Tentang Kami

        </h2>


        <div class="row">


            <div class="col-md-10 col-md-offset-1">


                <div class="about-box">


                    <p>

                        Fresh Laundry adalah layanan laundry

                        yang hadir untuk membantu membuat

                        aktivitas mencuci menjadi lebih mudah

                        dan praktis.

                    </p>


                    <p>

                        Kami mengutamakan kebersihan,

                        kerapian, dan kenyamanan sehingga

                        pakaian dapat kembali dalam kondisi

                        bersih dan wangi.

                    </p>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =========================
     LAYANAN
========================= -->

<section class="section"
         id="layanan">


    <div class="container">


        <h2 class="section-title">

            🧼 Layanan Kami

        </h2>


        <div class="row">


            <div class="col-md-4">


                <div class="service-box">


                    <div class="service-icon">

                        👕
                        
                    </div>


                    <h3>

                        Cuci Kering

                    </h3>


                    <p>

                        Pakaian dicuci dan dikeringkan

                        sehingga bersih dan siap digunakan.

                    </p>

                    <div class="service-price">Rp8.000 / kg</div>


                </div>


            </div>



            <div class="col-md-4">


                <div class="service-box">


                    <div class="service-icon">

                        👔

                    </div>


                    <h3>

                        Cuci & Setrika

                    </h3>


                    <p>

                        Pakaian dicuci hingga bersih

                        kemudian disetrika sampai rapi.

                    </p>

                    <div class="service-price">Rp10.000 / kg</div>


                </div>


            </div>



            <div class="col-md-4">


                <div class="service-box">


                    <div class="service-icon">

                        🌸

                    </div>


                    <h3>

                        Laundry Wangi

                    </h3>


                    <p>

                        Pakaian diberikan aroma harum

                        yang menyegarkan dan nyaman.

                    </p>

                    <div class="service-price">Rp12.000 / kg</div>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =========================
     KEUNGGULAN
========================= -->

<section class="section advantages">


    <div class="container">


        <h2 class="section-title">

            ✨ Kenapa Memilih Kami?

        </h2>


        <div class="row">


            <div class="col-md-4">


                <div class="advantage-box">


                    <div class="advantage-icon">
                        ⚡
                    </div>


                    <h3>
                        Cepat
                    </h3>


                    <p>

                        Proses laundry dilakukan

                        secara praktis dan efisien.

                    </p>


                </div>


            </div>



            <div class="col-md-4">


                <div class="advantage-box">


                    <div class="advantage-icon">
                        ✨
                    </div>


                    <h3>
                        Bersih & Wangi
                    </h3>


                    <p>

                        Kami menjaga kebersihan

                        dan aroma pakaian.

                    </p>


                </div>


            </div>



            <div class="col-md-4">


                <div class="advantage-box">


                    <div class="advantage-icon">
                        💕
                    </div>


                    <h3>
                        Praktis
                    </h3>


                    <p>

                        Membantu menghemat waktu

                        dan tenaga untuk mencuci.

                    </p>


                </div>


            </div>


        </div>

    </div>

</section>



<!-- =========================
     PROSES
========================= -->

<section class="section"
         id="proses">


    <div class="container">


        <h2 class="section-title">

            🌷 Proses Laundry

        </h2>


        <div class="row">


            <div class="col-md-3">


                <div class="process-box">


                    <div class="number">
                        1
                    </div>


                    <h3>
                        Terima
                    </h3>


                    <p>
                        Pakaian diterima
                        oleh petugas.
                    </p>


                </div>


            </div>



            <div class="col-md-3">


                <div class="process-box">


                    <div class="number">
                        2
                    </div>


                    <h3>
                        Cuci
                    </h3>


                    <p>
                        Pakaian dicuci
                        hingga bersih.
                    </p>


                </div>


            </div>



            <div class="col-md-3">


                <div class="process-box">


                    <div class="number">
                        3
                    </div>


                    <h3>
                        Setrika
                    </h3>


                    <p>
                        Pakaian dirapikan
                        dan disetrika.
                    </p>


                </div>


            </div>



            <div class="col-md-3">


                <div class="process-box">


                    <div class="number">
                        4
                    </div>


                    <h3>
                        Selesai
                    </h3>


                    <p>
                        Pakaian siap
                        diambil pelanggan.
                    </p>


                </div>


            </div>


        </div>

    </div>

</section>

<!-- =========================
     FOOTER
========================= -->

<footer>


    <p>
        🧺 Fresh Laundry
    </p>


    <p>
        Bersih • Wangi • Rapi
    </p>


    <p>
        © 2026 Sistem Informasi Laundry
    </p>


</footer>


</body>

</html>