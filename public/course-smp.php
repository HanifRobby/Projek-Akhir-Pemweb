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
    <title>Course SMP</title>
</head>

<body>

    <!-- header -->

    <header>
        <?php require '../components/navbar-login.html' ?>
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
                    <a href="../public/soal-smp.php" class="tombol">Soal</a>
                    <a href="../public/materi-smp.php" class="tombol">Materi</a>
                </div>
            </div>

            <div class="course-card">

                <img class="course-img" src="../assets/images/microscope.png" alt="">

                <div class="course-head">
                    <div class="course-title">
                        <h1>Ilmu Pengetahuan Alam</h1>
                    </div>
                    <div class="course-content">
                        <p>IPA mencakup berbagai topik seperti fisika, kimia, biologi, dan lingkungan hidup. Tujuan dari pembelajaran IPA adalah untuk mengembangkan pemahaman anak tentang prinsip-prinsip ilmiah, fenomena alam, dan hubungannya dengan kehidupan sehari-hari.</p>
                    </div>
                </div>
                <div class="tombol-materi">
                    <a href="" class="tombol">Soal</a>
                    <a href="" class="tombol">Materi</a>
                </div>
            </div>

            <div class="course-card">

                <img class="course-img" src="../assets/images/book.png" alt="">

                <div class="course-head">
                    <div class="course-title">
                        <h1>Bahasa Indonesia</h1>
                    </div>
                    <div class="course-content">
                        <p>Pembelajaran Bahasa Indonesia bertujuan untuk mengembangkan kemampuan anak dalam berbahasa Indonesia dengan baik dan benar, serta meningkatkan pemahaman mereka tentang struktur bahasa, kosa kata, tata bahasa, dan kemampuan berkomunikasi secara efektif.</p>
                    </div>
                </div>
                <div class="tombol-materi">
                    <a href="" class="tombol">Soal</a>
                    <a href="" class="tombol">Materi</a>
                </div>
            </div>

            <div class="course-card">

                <img class="course-img" src="../assets/images/notebook.png" alt="">

                <div class="course-head">
                    <div class="course-title">
                        <h1>Bahasa Inggris</h1>
                    </div>
                    <div class="course-content">
                        <p>Pelajaran Bahasa Inggris bertujuan untuk mengembangkan kemampuan komunikasi yang lebih baik, meningkatkan pemahaman teks dalam bahasa Inggris, dan memperluas kosa kata serta tata bahasa yang lebih kompleks.</p>
                    </div>
                </div>
                <div class="tombol-materi">
                    <a href="" class="tombol">Soal</a>
                    <a href="" class="tombol">Materi</a>
                </div>
            </div>

        </div>

    </main>

    <!-- footer -->

    <footer>
        <?php require '../components/footer.html'; ?>
    </footer>
</body>