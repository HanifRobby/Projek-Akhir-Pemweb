<?php
    $file = '../assets/files/materi.pdf'; // Path to your PDF file
    $filename = 'materi.pdf'; // Name of the file to be downloaded

    // Set headers for file download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($file));

    // Read the file and output its contents
    readfile($file);
    exit;
?>