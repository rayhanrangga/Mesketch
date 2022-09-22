<?php
require_once 'koneksi.php';

function bacaTesti()
{
    $data = array();
    $sql = "select * from testi";
    $koneksi = koneksiMesketch();
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

function bacaEditTesti($id)
{
    $data = array();
    $sql = "select * from testi where idTesti = $id";
    $koneksi = koneksiMesketch();
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

function bacaArtikel()
{
    $data = array();
    $sql = "select * from blog";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['id_blog'] = $baris['id_blog'];
        $data[$i]['judul'] = $baris['judul'];
        $data[$i]['isi'] = $baris['isi'];
        $data[$i]['author'] = $baris['author'];
        $data[$i]['gambar'] = $baris['gambar'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function insertTesti($nama, $isi)
{
    $koneksi = koneksiMesketch();
    $sql = "insert into testi (nama, isi) values ('$nama', '$isi')";
    $hasil = 0;
    echo "<script>alert('Input Testi Berhasil')
        window.location.href='testimoni.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

function updateTesti($id, $nama, $isi)
{
    $koneksi = koneksiMesketch();
    $sql = "update testi set nama='$nama', isi='$isi'  where idTesti='$id'";
    $hasil = 0;
    echo "<script>alert('Input Testi Berhasil')
        window.location.href='testimoni.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

function insertArtikel($author, $judul,  $isi, $namaFile, $tanggal)
{
    $koneksi = koneksiMesketch();
    $sql = "insert into blog (author, judul,  isi, gambar, tanggal) values ('$author', '$judul', '$isi', '$namaFile', '$tanggal')";
    $hasil = 0;
    echo "<script>alert('Input Artikel Berhasil')
        window.location.href='Artikel.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

// function bacaKomen($id)
// {
//     $data = array();
//     $sql = "select * from komen where id_blog = $id";
//     $koneksi = koneksiMesketch();
//     $hasil = mysqli_query($koneksi, $sql);
//     $i = 0;
//     while ($baris = mysqli_fetch_assoc($hasil)) {
//         $data[$i]['idKomen'] = $baris['id_komen'];
//         $data[$i]['nama'] = $baris['nama'];
//         $data[$i]['isi'] = $baris['isi'];
//         $data[$i]['idBlog'] = $baris['id_blog'];
//         $data[$i]['tanggal'] = $baris['waktu'];
//         $data[$i]['reply'] = $baris['reply'];
//         $data[$i]['email'] = $baris['email'];
//         $i++;
//     }
//     mysqli_close($koneksi);
//     return $data;
// }

// function hitungKomen($id)
// {

//     $sql = "select count(*) as jml from komen where id_blog = $id && reply = 0";
//     $koneksi = koneksiMesketch();
//     $hasil = mysqli_query($koneksi, $sql);
//     $data = mysqli_fetch_assoc($hasil);
//     mysqli_close($koneksi);
//     return $data;
// }

// function insertKomen($nama, $email, $isi, $id)
// {
//     $tanggal = date('y-m-d');
//     $koneksi = koneksiMesketch();
//     $sql = "insert into komen (nama, isi, email, id_blog, reply, waktu) values ('$nama', '$isi', '$email', '$id', 0, '$tanggal')";
//     $hasil = 0;
//     echo "<script>alert('$id')
//         window.location.href='blogcb.php?id=$id';</script>";
//     if (mysqli_query($koneksi, $sql))
//         $hasil = 1;
//     Mysqli_close($koneksi);
//     return $hasil;
// }
