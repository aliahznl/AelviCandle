<?php

$serverNama = "localhost"; //hostname
$dBusername = "root"; //database username
$dBpassword = ""; //database password
$db_nama = "aelvicandledatabase"; //nama database anda

//create connection (Kaedah : MySQLi Procedural)
$connection = mysqli_connect($serverNama, $dBusername, $dBpassword, $db_nama );

//mesej dirujukkan jika connection gagal
    if (!$connection) {
        die("Your order was not accepted: " . mysqli_connect_error());
    }
echo "Your order has been accepted <br> ";