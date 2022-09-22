<?php
include "crudDash.php";
$koneksi = koneksiMesketch();
$id = $_GET['id'];
$delete = "delete from testi where idTesti = '$id'";
$data =  mysqli_query($koneksi, $delete);
if ($data) {
    header("location:testimoni.php");
} else {
    echo "gagal hapus";
}
