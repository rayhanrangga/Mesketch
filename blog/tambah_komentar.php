<?php
session_start();
include 'koneksi2.php';
include 'csrf.php';

function anti($text)
{
    return $id = stripslashes(strip_tags(htmlspecialchars($text, ENT_QUOTES)));
}
$nama = anti($_POST["nama"]);
$isi = anti($_POST["isi"]);
$email = anti($_POST["email"]);
$id_blog = anti($_POST["id_blog"]);
$tanggal = date('y-m-d');
$reply = anti($_POST["id_komen"]);

$query = "INSERT INTO  komen (nama, isi, email, id_blog, reply, waktu) VALUES (?, ?, ?, ?, ?, ?)";
$mesketch = $db1->prepare($query);
$mesketch->bind_param("ssssss", $nama, $isi, $email, $id_blog, $reply, $tanggal);
$mesketch->execute();

echo json_encode(['success' => 'Sukses']);
