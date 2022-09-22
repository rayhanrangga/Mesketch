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

if (array_key_exists('editTesti', $_POST)) {
    $isi = $_POST['isi'];
    if (!empty($isi)) {
        $nama = $_POST['nama'];
        $id = $_POST['id'];
        updateTesti($id, $nama, $isi);
    }
    // header('location: blogcb.php?id='$id);
}

if (array_key_exists('TambahArti', $_POST)) {
    $isi = $_POST['isi'];
    print_r($_FILES['img']);
    if (!empty($isi)) {
        $judul = $_POST['judul'];
        $author = $_POST['author'];
        $tanggal = $_POST['tanggal'];
        $namaFile = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_tmp, '../img/blog/' . $namaFile);

        insertArtikel($author, $judul,  $isi, $namaFile, $tanggal);
    }
    // header('location: blogcb.php?id='$id);
}
