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
    <link rel="stylesheet" href="../css/subscribe-page.css">
    <title>Subscribe</title>
</head>

<body>

    <!-- header -->

    <?php
    require '../components/navbar-login.php';
    ?>

    <!-- main -->

    <div class="subscribe-page">
        <div class="subscribe-head">

        </div>
        <div class="subscribe-plan">
            <div class="basic-plan">
                <div class="basic-title">
                    <h2>Basic</h2>
                </div>
                <div class="basic-content">
                    <ul class="basic-ul">
                        <li>
                            <div class="list">Modul Materi
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Video Materi (Terbatas)
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Tanya langsung dengan ahli
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Bisa download
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Multiple devices
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="" class="basic-button">Free</a>
            </div>
            <div class="basic-plan">
                <div class="basic-title">
                    <h2>Basic</h2>
                </div>
                <div class="basic-content">
                    <ul class="basic-ul">
                        <li>
                            <div class="list">Modul Materi
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Video Materi (Terbatas)
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Tanya langsung dengan ahli
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Bisa download
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Multiple devices
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="" class="basic-button">Free</a>
            </div>
            <div class="basic-plan">
                <div class="basic-title">
                    <h2>Basic</h2>
                </div>
                <div class="basic-content">
                    <ul class="basic-ul">
                        <li>
                            <div class="list">Modul Materi
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Video Materi (Terbatas)
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Tanya langsung dengan ahli
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Bisa download
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="list">Multiple devices
                                <img class="plan-img" src="../assets/icons/centang.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="" class="basic-button">Free</a>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
    require '../components/footer.html';
    ?>


</body>