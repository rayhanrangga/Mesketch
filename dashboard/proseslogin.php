<?php
session_start();
include 'crudDash.php';
$username = $_POST['username'];
$password = $_POST['password'];
if (otentikasi($username, $password)) {
    //set variable session
    $_SESSION['username'] = $username;
    $dataUser = array(); // deklarasi array
    $dataUser = cariUserDariUsername($username);
    $_SESSION['namauser'] = $dataUser['nama'];
    $_SESSION['role'] = $dataUser['role'];
    header("location:index.php");
} else {
    header("location:login.php?error");
}
