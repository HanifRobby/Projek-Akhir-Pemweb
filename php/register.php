<?php
require 'function.php';

    if( isset($_POST["Register"]) ){
        if( registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                  </script>";
            header("Location: ../public/login.php");
            exit;
            
        } else {
            echo mysqli_error($conn);
        }
    }

?>
