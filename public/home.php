<?php
    session_start();
    // ngecek kalo udah login apa belom
    require '../components/info-card.php';
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }
    else{
        $row = $_SESSION["row"];
        $fullname = $row['fullname'];
        $username = $row['username'];
        $email = $row['email'];

    }
    
   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="web icon" href="../assets/icons/Logo.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Edukasi</title>
</head>
<body>

    <!-- header -->

    <header>
        <?php require '../components/navbar-login.html'?>
    </header>

    <!-- main -->

    <main>
        <section class="dashboard">
            <div class="dashboard-content">
                <div class="dashboard-head">
                    <p style="font-size: 3rem;">
                        The beautiful thing about <span style="color: #146C94;"> learning </span> is that no one can
                        take it away from you
                    </p>
                </div>
                <div class="dashboard-p" style="font-size: 1.5rem">
                    <p>Perluas wawasan dan keterampilan Anda. Jelajahi topik yang Anda minati dan raih keunggulan dalam
                        karir Anda</p>
                </div>
                <div>

                </div>
            </div>
            <div class="dashboard-background">
                <img id="dash-img1" src="../assets/images/landingpage-image1.png" style="width: 50%;" alt="">
                <img id="dash-img2" src="../assets/images/landingpage-image2.png" style="width: 50%" alt="">
            </div>
        </section>
        <section class="information">
            <div class="info-head">
                <h1 style="font-size: 2rem; font-weight: 1000;">Informasi Terkini</h1>
                <p style="font-size: 1.2rem;">Dapatkan informasi terkini mengenai lomba, beasiswa, webinar, dan
                    bootcamp. Berita akan update secara
                    berkala</p>
            </div>
            <div class="info-cards">

                <?php
                    for ($x = 0; $x <4; $x++) {
                        echo info_card('../assets/images/card.png', 'Beasiswa PUSBINDIKLATREN BAPPENAS');
                    }
                ?>
            </div>
        </section>
        <section class="about">
            <div class="about-head">
                <h1 style="font-size: 2rem;">About This Course</h1>
                <p style="font-size: 1.2rem;">EDUKASI kali ini mempunyai beberapa keunggulan diantaranya seperti berikut</p>
            </div>
            <div class="advantages">
                <div class="adv-card">
                    <img class="adv-image" src="../assets/icons/cardswiper.png" alt="">
                    <h2>Easy in Payment</h2>
                    <p>Cara pembayaran yang sangat mudah untuk mendapatkan materi tambahan atau soal tambahan yang
                        terbaru</p>
                </div>
                <div class="adv-card">
                    <img class="adv-image" src="../assets/icons/certificate.png" alt="">
                    <h2>Many Course Available</h2>
                    <p>Tersedia beberapa materi mulai dari bangku SD hingga persiapan ujian penerimaan mahasiswa</p>
                </div>
                <div class="adv-card">
                    <img class="adv-image" src="../assets/icons/laptop.png" alt="">
                    <h2>Easy to Access</h2>
                    <p>Mudah diakses dimanapun dan kapanmu baik di rumah, sekolah, dan lain-lain</p>
                </div>

            </div>


        </section>

    </main>

    <!-- footer -->

    <footer>
        <?php require '../components/footer.html'; ?>
    </footer>

</body>