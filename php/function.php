<?php
session_start();


    $conn = mysqli_connect("localhost", "root", "", "projekakhirpemweb");

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
        mysqli_query($conn, "INSERT INTO user VALUES('','$fullname','$username', '$password', '$email', NULL, NULL, NULL)");

        return mysqli_affected_rows($conn);
    } 
    
    function editprofile($data){
        $row = $_SESSION["row"];
        $id = $row["id"];

        global $conn;
        $fullname = $data['fullname'];
        $jenjang = $data['jenjang'];
        $kelas = $data['kelas'];
        
        mysqli_query($conn, "UPDATE user SET jenjang = '$jenjang' WHERE id = $id;");  
        mysqli_query($conn, "UPDATE user SET kelas = '$kelas' WHERE id = $id;");  
        mysqli_query($conn, "UPDATE user SET fullname = '$fullname' WHERE id = $id;");  
        return mysqli_affected_rows($conn);

    }

    function changepicture($data) {
        global $conn;
        $row = $_SESSION["row"];
        $id = $row["id"];
    
        $img = $data['profile-picture'];
        
    
        $img = $data["profile-picture"]["tmp_name"];
        $img_name = $data['profile-picture']['name'];
        $img_type = $data['profile-picture']['type'];
        $img_size = $data['profile-picture']['size'];
        $img_content = addslashes(file_get_contents($img));
        mysqli_query($conn, "UPDATE user SET image = '$img' WHERE id = $id");

        
        $sql = "INSERT INTO profilepict (nama, tipe, ukuran, konten) VALUES ('$img_name', '$img_type', '$img_size', '$img_content')";
        if ($conn->query($sql) === TRUE) {
            echo "Gambar berhasil disimpan di database.";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        return mysqli_affected_rows($conn);
        
    }
    
    
?>