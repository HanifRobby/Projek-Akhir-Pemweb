<?php
require 'function.php';

if( isset($_POST["Simpan"]) ){
    if( editprofile($_POST) > 0 ) {
        echo "<script>
                alert('Biodata berhasil diubah');
              </script>";
        header("Location: ../public/profile.php");
        exit;
    
    } else {
        echo mysqli_error($conn);
    }
    
}


?>