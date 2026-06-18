<?php

// dekorasi variable mysql
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kampusq";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    echo '
    <script>
        alert("Koneksi dengan database berhasil");
    </script>';
} else {
    echo '
    <script>
        alert("Koneksi dengan database gagal: ' . mysqli_connect_error() . '");
    </script>';
}


?>