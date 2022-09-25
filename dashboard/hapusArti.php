<?php
include "crudDash.php";
$koneksi = koneksiMesketch();
$id = $_GET['id'];
$delete = "delete from blog where id_blog = '$id'";
$data =  mysqli_query($koneksi, $delete);
if ($data) {
    header("location:artikel.php");
} else {
    echo "gagal hapus";
}
