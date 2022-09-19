<?php
function koneksiPerpus()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mesketch";
    //menciptakan koneksi
    $koneksi = new mysqli($servername, $username, $password, $database);
    //cek koneksi
    if (!$koneksi) {
        die("koneksi gagal!! " . mysqli_connect_error());
    }
    return $koneksi;
}
