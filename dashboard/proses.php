<?php
session_start();
include('crudDash.php');

if (array_key_exists('Tambah', $_POST)) {
    $isi = $_POST['isi'];
    if (!empty($isi)) {
        $nama = $_POST['nama'];
        insertTesti($nama, $isi);
    }
    // header('location: blogcb.php?id='$id);
}
