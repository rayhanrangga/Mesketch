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

if (array_key_exists('Reply', $_POST)) {
    $isi = $_POST['isi'];
    if (!empty($isi)) {
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $id = $_POST['id'];
        $id_blog = $_POST['id_blog'];
        insertReply($nama, $email, $isi, $id, $id_blog);
    }
    // header('location: blogcb.php?id='$id);
}
