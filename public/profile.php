<?php
session_start();
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
    <link rel="stylesheet" href="../css/profile.css">
    <title>Edukasi</title>
</head>

<body>

    <!-- header -->

    <header>
        <?php
        require '../components/navbar-login.php';
        ?>
    </header>

    <!-- main -->

    <main>

        <div class="profil">
            <div class="profile-wrap1">
                <img class="profile-img" src="../assets/images/user-img.png" alt="">

                <!-- php buat ganti profile img -->

                <form class="profil-pict" action="../php/changephoto.php" method="post" enctype="multipart/form-data">
                    <label for="profile-img">Ganti Foto Profil</label>
                    <input type="file" name="profile-picture" id="profile-picture">
                    <button type="submit" name="edit-profile-img" id="edit-profile-img">Change profile image</button>
                </form>
            </div>
            <div class="profile-wrap2">
                <div class="profile-info">

                    <!-- buat action edit.php buat ngedit data dari database -->

                    <form class="form-container" action="../php/profile.php" method="post">
                        <div class="profile-head">
                            <h1>Profile</h1>
                            <!-- <a class="edit-button" href="" style="height:fit-content;">Edit</a> -->
                            <input class="tombol" type="submit" value="Simpans" name = "Simpan" id="Simpan" >
                        </div>
                        <div class="nama">
                            <label for="">
                                <h2>Nama Lengkap</h2>
                            </label>

                            <!-- placehoder ambil data dari database -->

                            <input type="text" name="fullname" id="fullname" placeholder="">
                        </div>
                        <div class="school">
                            <label for="">
                                <h2>Jenjang</h2>
                            </label>
                            <input type="text" name="jenjang" id="jenjang" placeholder="">
                        </div>
                        <div class="jenjang">
                            <label for="">
                                <h2>Kelas</h2>
                            </label>
                            <input type="text" name="kelas" id="kelas" placeholder="">
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