<?php
$tanggal = date('d/m/y');
session_start();
include('crudBlog.php');

if (array_key_exists('Tambah', $_POST)) {
    $isi = $_POST['isi'];
    if (!empty($isi)) {
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $id = $_POST['id'];
        insertKomen($nama, $email, $isi, $id);
    }
    // header('location: blogcb.php?id='$id);
}
