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

if (array_key_exists('EditArti', $_POST)) {
    $id = $_POST['id'];
    $isi = $_POST['isi'];
    $image = $_POST['img'];
    if (!empty($isi)) {
        $judul = $_POST['judul'];
        $author = $_POST['author'];
        $tanggal = $_POST['tanggal'];
        $namaFile = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        unlink('../img/blog/' . $image);
        move_uploaded_file($file_tmp, '../img/blog/' . $namaFile);

        updateArtikel($id, $author, $judul,  $isi, $namaFile, $tanggal);
    }
    // header('location: blogcb.php?id='$id);
}

if (array_key_exists('TambahUser', $_POST)) {
    $nama = $_POST['nama'];
    if (!empty($nama)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $namaFile = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_tmp, '../img/profile/' . $namaFile);

        insertUser($nama, $username, $password, $role, $namaFile);
    }
    // header('location: blogcb.php?id='$id);
}

if (array_key_exists('EditUser', $_POST)) {
    $id = $_POST['id'];
    $image = $_POST['img'];
    if (!empty($id)) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $namaFile = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        unlink('../img/profile/' . $image);
        move_uploaded_file($file_tmp, '../img/profile/' . $namaFile);

        updateUser($id, $nama, $username, $password, $role, $namaFile);
    }
    // header('location: blogcb.php?id='$id);
}
