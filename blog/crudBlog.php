<?php
require_once 'koneksi.php';

function bacaBlog($id)
{
    $data = array();
    $sql = "select * from blog where id_blog = $id";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idBlog'] = $baris['id_blog'];
        $data[$i]['author'] = $baris['author'];
        $data[$i]['judul'] = $baris['judul'];
        $data[$i]['isi'] = $baris['isi'];
        $data[$i]['gambar'] = $baris['gambar'];
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
    $koneksi = koneksiMesketch();
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

function hitungKomen($id)
{

    $sql = "select count(*) as jml from komen where id_blog = $id && reply = 0";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($hasil);
    mysqli_close($koneksi);
    return $data;
}

function insertKomen($nama, $email, $isi, $id)
{
    $tanggal = date('y-m-d');
    $koneksi = koneksiMesketch();
    $sql = "insert into komen (nama, isi, email, id_blog, reply, waktu) values ('$nama', '$isi', '$email', '$id', 0, '$tanggal')";
    $hasil = 0;
    echo "<script>alert('$id')
        window.location.href='blogcb.php?id=$id';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}
