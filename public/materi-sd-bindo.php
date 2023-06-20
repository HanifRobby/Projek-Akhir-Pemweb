<?php
    require '../components/materi-card.php';
    // ngecek kalo udah login apa belom
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
        require '../components/navbar-login.php';
        ?>
    </header>


    <main>

        <div class="materi-head-container">
            <img class="materi-img" src="../assets/images/book.png" alt="">
            <div class="materi-head">
                <h1>Sekolah Dasar</h1>
                <h1>Bahasa Indonesia</h1>
            </div>
            <h2>Kelas 6</h2>
        </div>

        <div class="materi-board">
            <?php
                require_once '../php/function.php';
                $result = mysqli_query($conn, "SELECT * FROM materi3");
                $resultyutub = mysqli_query($conn, "SELECT * FROM yutubbindo");
                $mergearray = array();
                $mergearray2 = array();

                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $imagePath = $row["imagePath"];                       
                        $title =  $row["title"];                       
                        $content = $row["content"];
                        $downloadPath = $row["downloadPath"];
                        $arr = array($imagePath, $title, $content, $downloadPath);
                        $mergearray[] = $arr;
                    }
                }
                if (mysqli_num_rows($resultyutub) > 0){
                    while ($row = mysqli_fetch_assoc($resultyutub)) {
                        $id = $row["id"];
                        $link = $row["link"];
                        $arr2 = array($id, $link);
                        $mergearray2[] = $arr2;
                        // $imagePath = $row["imagePath"];                       
                        // $title =  $row["title"];                       
                        // $content = $row["content"];
                        // $downloadPath = $row["downloadPath"];
                        // $arr = array($imagePath, $title, $content, $downloadPath);
                        // $mergearray[] = $arr;
                    }
                }
                $num_rows = mysqli_num_rows($result);
                $num_rows_yutub = mysqli_num_rows($resultyutub);

                for ($x = 0; $x <= $num_rows-1; $x++) {
                    echo materi_card($mergearray[$x][0], $mergearray[$x][1], $mergearray[$x][2], $mergearray[$x][3], $mergearray2[$x][1]);
                }    
            ?>
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