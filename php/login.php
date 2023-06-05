<?php 
require 'function.php';
session_start();

if( isset($_POST["Login"]) ) {

	$username = $_POST["username"];

	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);

	// cek username
	if( mysqli_num_rows($result) === 1 ) {
		// cek password
		if(password_verify($password, $row["password"]) ) {
			$_SESSION["login"] = true;
			$_SESSION["row"] = $row;
			
			echo "<script>
                    alert('Anda berhasil login!');
                  </script>";            
			header("Location: ../public/home.php");
			exit;
		}
		else{
			echo "<script>
					alert('Username atau password salah!');
		  		</script>";
			header("Location: ../public/login.php");
			exit;
			
			
		} 
	}
	else{
		echo "<script>
                alert('username anda salah');
              </script>";
	
		header("Location: ../public/login.php");
		exit;
		
	}
	$error = true;
}