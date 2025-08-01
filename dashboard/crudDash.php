<?php
require_once 'koneksi.php';

function bacaUser()
{
    $data = array();
    $sql = "select * from user";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idUser'] = $baris['id_user'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['username'] = $baris['username'];
        $data[$i]['password'] = $baris['password'];
        $data[$i]['gambar'] = $baris['gambar'];
        $data[$i]['role'] = $baris['role'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaEditUser($id)
{
    $data = array();
    $sql = "select * from user where id_user = $id";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['idUser'] = $baris['id_user'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['username'] = $baris['username'];
        $data[$i]['password'] = $baris['password'];
        $data[$i]['gambar'] = $baris['gambar'];
        $data[$i]['role'] = $baris['role'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

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
        $data[$i]['excerpt'] = $baris['excerpt'];
        $data[$i]['author'] = $baris['author'];
        $data[$i]['gambar'] = $baris['gambar'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function totalArtikel()
{
    $data = array();
    $sql = "select COUNT(*) AS Total from blog";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['total'] = $baris['Total'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function totalArtikelUser()
{
    $data = array();
    $username = $_SESSION['namauser'];
    $sql = "select COUNT(*) AS Total from blog where author = '$username'";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['total'] = $baris['Total'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function totalTesti()
{
    $data = array();
    $username = $_SESSION['username'];
    $sql = "select COUNT(*) AS Total from testi";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['total'] = $baris['Total'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function totalUser()
{
    $data = array();
    $username = $_SESSION['username'];
    $sql = "select COUNT(*) AS Total from user";
    $koneksi = koneksiMesketch();
    $hasil = mysqli_query($koneksi, $sql);
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['total'] = $baris['Total'];
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
    $max = 16;
    $shorter = substr($isi, 0, $max + 1);
    $excerpt = implode(' ', array_slice(str_word_count($isi, 1), 1, 17)) . '...';
    $sql = "insert into blog (author, judul,  isi, excerpt, gambar, tanggal) values ('$author', '$judul', '$isi', '$excerpt', '$namaFile', '$tanggal')";
    $hasil = 0;
    echo "<script>alert('Input Artikel Berhasil')
        window.location.href='Artikel.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

function updateArtikel($id, $author, $judul,  $isi, $namaFile, $tanggal)
{
    $koneksi = koneksiMesketch();
    $max = 16;
    $shorter = substr($isi, 0, $max + 1);
    $excerpt = implode(' ', array_slice(str_word_count($isi, 1), 1, 17)) . '...';
    $sql = "update blog set author='$author', judul='$judul', isi='$isi', excerpt='$excerpt', gambar='$namaFile', tanggal='$tanggal'  where id_blog='$id'";
    $hasil = 0;
    echo "<script>alert('Input Artikel Berhasil')
        window.location.href='Artikel.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

function insertUser($nama, $username, $password, $role, $namaFile)
{
    $koneksi = koneksiMesketch();
    $md5 = md5($password);
    $sql = "insert into user (username, password,  nama, gambar, role) values ('$username', '$md5', '$nama', '$namaFile', '$role')";
    $hasil = 0;
    echo "<script>alert('Input User Berhasil')
        window.location.href='user.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

function updateUser($id, $nama, $username, $password, $role, $namaFile)
{
    $koneksi = koneksiMesketch();
    $md5 = md5($password);
    $sql = "update user set nama='$nama', username='$username', password='$md5', role='$role', gambar='$namaFile' where id_user='$id'";
    $hasil = 0;
    echo "<script>alert('Update User Berhasil')
        window.location.href='user.php';</script>";
    if (mysqli_query($koneksi, $sql))
        $hasil = 1;
    Mysqli_close($koneksi);
    return $hasil;
}

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
        $data[$i]['excerpt'] = $baris['excerpt'];
        $data[$i]['gambar'] = $baris['gambar'];
        $data[$i]['tanggal'] = $baris['tanggal'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaLogin()
{
    $username = $_SESSION['username'];
    $koneksi = koneksiMesketch();
    $sql = "select * from user where username = '$username'";
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        $baris = mysqli_fetch_assoc($hasil);
        $data['username'] =  $baris['username'];
        $data['password'] =  $baris['password'];
        $data['gambar'] = $baris['gambar'];
        $data['nama'] =  $baris['nama'];
        $data['role'] = $baris['role'];
        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

function cariUserDariUsername($username)
{
    $koneksi = koneksiMesketch();
    $sql = "select * from user where username = '$username'";
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        $baris = mysqli_fetch_assoc($hasil);
        $data['username'] =  $baris['username'];
        $data['password'] =  $baris['password'];
        $data['nama'] =  $baris['nama'];
        $data['role'] = $baris['role'];
        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

function otentikasi($username, $password)
{
    $dataUser = array();
    $passmd5 = md5($password);
    $dataUser = cariUserDariUsername($username);
    if ($dataUser != null) {
        if ($passmd5 == $dataUser['password']) {
            return true;
        } else {
            return false;
        }
    } else {
    }
    return false;
}

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function antibypass()
{
    if (!isset($_SESSION['username'])) {
        echo "<script>alert('Silahkan Login lebih dulu!')
        window.location.href='login.php';</script>";
    } else {
    }
}

function onlyadmin()
{
    if (!isset($_SESSION['role'])) {
        echo "<script>alert('Silahkan Login lebih dulu!')
        window.location.href='login.php';</script>";
    } else if ($_SESSION['role'] == 'Writer') {
        echo "<script>alert('Anda Tidak Memiliki Akses Ke Halaman Ini!')
        window.location.href='index.php';</script>";
    } else {
    }
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
