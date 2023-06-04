<?php
    require '../components/materi-card.php';
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
    <link rel="stylesheet" href="../css/materi.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Edukasi</title>
</head>

<body>

    <!-- header -->

    <header>
        <?php
        require '../components/navbar-login.html';
        ?>
    </header>


    <main>

        <div class="materi-head-container">
            <img class="materi-img" src="../assets/images/book.png" alt="">
            <div class="materi-head">
                <h1>Sekolah Dasar</h1>
                <h1>Matematika</h1>
            </div>
            <h2>Kelas 6</h2>
        </div>

        <?php

        ?>

        <div class="materi-board">
            <div class="materi-card">
                <img class="materi-img" src="../assets/images/book.png" alt="">
                <div class="materi-content">
                    <h1>Penjumlahan</h1>
                    <p>Pada materi kali ini kalian bakal belajar materi di atas jadi jangan lupa dibaca ya</p>
                </div>
                <div class="materi-right">
                    <a class="download-button" href="download.php?filename=materi-sd.pdf" download>
                        Download
                    </a>
                    <div class="img-share">
                        <a href="">
                            <img class="mtr-img" src="../assets/images/love.png" alt="">
                        </a>
                        <a href="">
                            <img class="mtr-img" src="../assets/images/share.png" alt="">
                        </a>
                        <a href="">
                            <img class="mtr-img" src="../assets/images/save.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <!-- footer -->

    <footer>

        <?php
        require '../components/footer.html';
        ?>

    </footer>

    <script>
        function toggleDropdown() {
            var dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        }
    </script>

</body>