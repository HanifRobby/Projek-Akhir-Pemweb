<?php


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="web icon" href="../assets/icons/Logo.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/profile.css">
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

                <!-- php buat ganti profile img -->

                <form class="profil-pict" action="" method="post" enctype="multipart/form-data">
                    <label for="profile-img">Ganti Foto Profil</label>
                    <input type="file" name="profile-picture" id="profile-picture">
                    <button type="submit" name="edit-profile-img" id="edit-profile-img">Change profile image</button>
                </form>
            </div>
            <div class="profile-wrap2">
                <div class="profile-info">

                    <!-- buat action edit.php buat ngedit data dari database -->

                    <form class="form-container" action="edit.php">
                        <div class="profile-head">
                            <h1>Profile</h1>
                            <!-- <a class="edit-button" href="" style="height:fit-content;">Edit</a> -->
                            <button type="submit" value="edit" id="edit-button">Edit</button>
                        </div>
                        <div class="nama">
                            <label for="">
                                <h2>Nama Lengkap</h2>
                            </label>

                            <!-- placehoder ambil data dari database -->

                            <input type="text" name="nama" id="nama" placeholder="">
                        </div>
                        <div class="school">
                            <label for="">
                                <h2>Sekolah</h2>
                            </label>
                            <input type="text" name="sekolah" id="sekolah" placeholder="">
                        </div>
                        <div class="jenjang">
                            <label for="">
                                <h2>Jenjang</h2>
                            </label>
                            <input type="text" name="jenjang" id="jenjang" placeholder="">
                        </div>
                    </form>
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