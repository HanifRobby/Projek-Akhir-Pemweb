<?php
    $conn = mysqli_connect("localhost", "root", "", "projekakhirpemweb");
    $conn_materi = mysqli_connect("localhost", "root", "", "materi");

    function registrasi($data){

        global $conn;
        $fullname = $data['fullname'];
        $username = strtolower(stripslashes($data['username']));
        $password = mysqli_real_escape_string($conn, $data['password']);
        $email = $data['email'];
        
        
        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('username sudah terdaftar!')
                  </script>";
            header("Location: ../public/register.php");
            exit;
            return false;
            
        }
    
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambah userbaru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('','$fullname','$username', '$password', '$email')");

        return mysqli_affected_rows($conn);
    }
    
    
?>