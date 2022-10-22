
<!-- SCRIPT KONEKSI DATABASE -->

<!-- INCLUDE di SEMUA PHP yang mainan database -->
<?php

                                          // Sesuaikan nama database-nya
    $conn = mysqli_connect("localhost","root","","bukutamu");


    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>
