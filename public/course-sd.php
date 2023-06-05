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
    <link rel="stylesheet" href="../css/course.css">
    <title>Course SD</title>
</head>

<body>

    <!-- header -->

    <header>
        <?php require '../components/navbar-login.php' ?>
    </header>

    <!-- main -->

    <main>

        <div class="course-board">

            <div class="course-card">
                <img class="course-img" src="../assets/images/equation.png" alt="">
                <div class="course-head">
                    <div class="course-title">
                        <h1>Matematika</h1>
                    </div>
                    <div class="course-content">
                        <p>Matematika adalah cabang ilmu yang mempelajari tentang angka, hitungan, struktur, ruang, dan pola yang bertujuan untuk mengembangkan pemahaman konsep dasar matematika dan keterampilan komputasi</p>
                    </div>
                </div>
                <div class="tombol-materi">
                    <a href="../public/soal-sd.php" class="tombol">Soal</a>
                    <a href="../public/materi-sd.php" class="tombol">Materi</a>
                </div>
            </div>

            <div class="course-card">
                <img class="course-img" src="../assets/images/microscope.png" alt="">
                <div class="course-head">
                    <div class="course-title">
                        <h1>Ilmu Pengetahuan Alam</h1>
                    </div>
                    <div class="course-content">
                        <p>IPA seru dan menyenangkan untuk dipelajari.</p>
                    </div>
                </div>
                <div class="tombol-materi">
                    <a href="../public/soal-sd-ipa.php" class="tombol">Soal</a>
                    <a href="../public/materi-sd-ipa.php" class="tombol">Materi</a>
                </div>
            </div>

            <div class="course-card">
                <img class="course-img" src="../assets/images/book.png" alt="">
                <div class="course-head">
                    <div class="course-title">
                        <h1>Bahasa Indonesia</h1>
                    </div>
                    <div class="course-content">
                        <p>Menerapkan pengamalan dari Sumpah Pemuda</p>
                    </div>
                </div>
                <div class="tombol-materi">
                    <a href="../public/soal-sd-bindo.php" class="tombol">Soal</a>
                    <a href="../public/materi-sd-bindo.php" class="tombol">Materi</a>
                </div>
            </div>

        </div>

    </main>

    <!-- footer -->

    <footer>
        <?php require '../components/footer.html'; ?>
    </footer>
</body>