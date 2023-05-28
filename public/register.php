<?php

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <link rel="web icon" href="../assets/icons/Logo.png">
        <link rel="stylesheet" href="../css/register.css">
        <script src="../js/register-validation.js"></script>
        <title>Register</title>
    </head>
    <body>
        <div class="login">
            <div class="group1">
                <img class="manusia" src="../assets/images/laptopan.png" alt="human">
                <h1 ><a class="title" href="../index.html">EDUKASI</a></h1>
            </div>
            <div class="group2">
                <h1 class="judul">REGISTER</h1>
                <form name="testForm" onsubmit="return validasi()" action="../php/register.php" method="post">
                    <label class="email" for="username">Fullname:</label>
                    <br>
                    <input class="kolom" type="text" id="fullname" name="fullname" required>
                    <br>
                    <br>
                    <label class="password" for="password">username:</label>
                    <br>
                    <input class="kolom" type="text" id="username" name="username" required>
                    <br>
                    <br>
                    <label class="email" for="username">Password:</label>
                    <br>
                    <input class="kolom" type="password" id="password" name="password" required>
                    <br>
                    <br>
                    <label class="password" for="password">E-Mail:</label>
                    <br>
                    <input class="kolom" type="text" id="email" name="email" required>
                    <br>
                    <br>
                    <input class="kotak" type="checkbox" id="myCheckbox" name="myCheckbox">
                    <label class="cek" for="myCheckbox">Saya sudah membaca syarat dan ketentuan</label>
                    <br>
                    <br>
                    <input class="tombol" type="submit" name="Register" value="Register">
                    <br>
                        <div class="kata">
                            <p style="font-weight: 200;">Already Registered? <a class="link" href="login.html">Login</a></p>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>