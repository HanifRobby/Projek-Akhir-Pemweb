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
    <link rel="stylesheet" href="../css/soal.css">
    <title>Soal SD</title>
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
                        <h1>SEKOLAH MENENGAH PERTAMA</h1>
                    </div>
                    <div class="course-content">
                        <h1 class="judul">MATEMATIKA</h1>
                        <p class="latihan">Latihan 1</p>
                    </div>
                </div>
                <a class="tombol" href="download.php?filename=soal-smp.pdf" download>Download</a>
            </div>

            <div class="soal-card">
                <div class="soal">
                    <h2>1. Hitunglah hasil dari penjumlahan dua aljabar berikut ini!</h2>
                    <h2>-3a - b + 7 dan 13a - (-2b) + 4</h2>
                </div>
                <div class="pilihan">
                    <label class="chosee" for="option1">
                        <input type="radio" id="option1" name="option" value="option1"> 10a + b + 11
                    </label>
                    <label class="chosee" for="option2">
                        <input type="radio" id="option2" name="option" value="option2"> 11a + b + 12
                    </label>
                    <label class="chosee" for="option3">
                        <input type="radio" id="option3" name="option" value="option3"> 12a + b + 13
                    </label>
                    <label class="chosee" for="option4">
                        <input type="radio" id="option3" name="option" value="option3"> 13a + b + 14
                    </label>
                    </form>
                </div>
            </div>

        </div>

    </main>

    <!-- footer -->

    <footer>
        <?php require '../components/footer.html'; ?>
    </footer>

</body>