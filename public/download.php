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
    


    // Check if the filename query parameter is provided
    if (isset($_GET['filename'])) {
        $filename = $_GET['filename'];
        $file = '../assets/files/' . $filename; // Path to the file

        // Check if the file exists
        if (file_exists($file)) {
            // Set headers for file download
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            header('Content-Length: ' . filesize($file));

            // Read the file and output its contents
            readfile($file);
            exit;
        } else {
            // File not found, handle the error
            echo 'File not found.';
            exit;
        }
    } else {
        // Filename not provided, handle the error
        echo 'Filename not provided.';
        exit;
    }
?>