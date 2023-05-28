<?php


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
        <?php
        require '../components/navbar-login.html';
        ?>
    </header>

    <!-- main -->

    <main>

        <div class="profil">
            <div class="profile-wrap1">
                <img class="profile-img" src="../assets/images/user-img.png" alt="">
            </div>
            <div class="profile-wrap2">
                <div class="profile-info">
                    <div class="profile-head">
                        <h1>Profile</h1>
                        <a class="edit-button" href="" style="height:fit-content;">Edit</a>
                    </div>
                    <div class="name">
                        <label for="">
                            <h2>Nama Lengkap</h2>
                        </label>
                        Hanif Robby
                    </div>
                    <div class="school">
                        <label for="">
                            <h2>Sekolah</h2>
                        </label>
                        Sekolah Dasar
                    </div>
                    <div class="jenjang">
                        <label for="">
                            <h2>Jenjang</h2>
                        </label>
                    </div>
                </div>
                <div class="profile-opt">
                    <a class="premium-button" href="">Get Premium Plan</a>
                    <a class="logout-button" href="">Log Out</a>
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



</body>