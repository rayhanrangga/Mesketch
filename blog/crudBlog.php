<?php
require_once 'koneksi.php';

function bacaBlog($id)
{
    $data = array();
    $sql = "select * from blog where id_blog = $id";
    $koneksi = koneksiPerpus();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idBlog'] = $baris['id_blog'];
        $data[$i]['author'] = $baris['author'];
        $data[$i]['judul'] = $baris['judul'];
        $data[$i]['isi'] = $baris['isi'];
        $data[$i]['tanggal'] = $baris['tanggal'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaKomen($id)
{
    $data = array();
    $sql = "select * from komen where id_blog = $id";
    $koneksi = koneksiPerpus();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idKomen'] = $baris['id_komen'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['isi'] = $baris['isi'];
        $data[$i]['idBlog'] = $baris['id_blog'];
        $data[$i]['tanggal'] = $baris['waktu'];
        $data[$i]['reply'] = $baris['reply'];
        $data[$i]['email'] = $baris['email'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
