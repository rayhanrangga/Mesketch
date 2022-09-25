<?php
include "crudDash.php";
$koneksi = koneksiMesketch();
$id = $_GET['id'];
$delete = "delete from user where id_user = '$id'";
$data =  mysqli_query($koneksi, $delete);
if ($data) {
    header("location:user.php");
} else {
    echo "gagal hapus";
}
