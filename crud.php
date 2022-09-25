<?php
require_once 'koneksi.php';

function bacaTesti()
{
    $data = array();
    $sql = "select * from testi";
    $koneksi = koneksiPerpus();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idTesti'] = $baris['idTesti'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['isi'] = $baris['isi'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaBlog()
{
    $data = array();
    $sql = "select * from blog";
    $koneksi = koneksiPerpus();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idBlog'] = $baris['id_blog'];
        $data[$i]['author'] = $baris['author'];
        $data[$i]['judul'] = $baris['judul'];
        $data[$i]['isi'] = $baris['isi'];
        $data[$i]['excerpt'] = $baris['excerpt'];
        $data[$i]['gambar'] = $baris['gambar'];
        $data[$i]['tanggal'] = $baris['tanggal'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaKomen()
{
    $data = array();
    $sql = "select * from komen";
    $koneksi = koneksiPerpus();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idKomen'] = $baris['id_komen'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['isi'] = $baris['isi'];
        $data[$i]['email'] = $baris['email'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
