<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <link rel="web icon" href="../assets/icons/Logo.png">
        <link rel="stylesheet" href="../css/login.css">
        <title>LOGIN</title>
    </head>
    <body>
        <div class="login">
            <div class="group1">
                <img class="manusia" src="../assets/images/laptopan.png" alt="human">
                <h1 ><a class="title" href="../index.html">EDUKASI</a></h1>
            </div>
            <div class="group2">
                <h1 class="judul">SIGN IN</h1>
                <form action="">
                    <label class="email" for="username">Email:</label>
                    <br>
                    <input class="kolom" type="text" id="username" name="username" required>
                    <br>
                    <br>
                    <label class="password" for="password">Password:</label>
                    <br>
                    <input class="kolom" type="password" id="password" name="password" required>
                    <br>
                    <input class="kotak" type="checkbox" id="myCheckbox" name="myCheckbox">
                    <label class="cek" for="myCheckbox">Ingat saya</label>
                    <br>
                    <br>
                    <input class="tombol" type="submit" value="Login">
                    <br>
                        <div class="kata">
                            <p style="font-weight: 200;">Tidak punya akun? <a class="link" href="register.html">Register</a></p>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>