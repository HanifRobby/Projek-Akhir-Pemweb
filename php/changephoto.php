<?php
session_start();
require 'function.php';
if( isset($_POST["edit-profile-img"]) ) {
    if( changepicture($_FILES) > 0 ) {
        
    } 
    else {
    echo mysqli_error($conn);
    }
}
?>