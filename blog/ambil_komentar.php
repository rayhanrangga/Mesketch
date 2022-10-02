<?php
session_start();
include 'koneksi2.php';
include 'csrf.php';
$output = '';

$id = $_POST['id'];

$query = "SELECT * FROM komen WHERE reply = '0' && id_blog = ?";
$mesketch = $db1->prepare($query);
$mesketch->bind_param("s", $id);
$mesketch->execute();
$res1 = $mesketch->get_result();
while ($row = $res1->fetch_assoc()) {
    $output .= '
    <div class="entriesContainer">
    <div class="comment">
    <ul class="comments-list clearfix">
                                <li>
    <div class="img">
        <i class="fa fa-user"></i>
    </div>
        <div class="commentContent">
            <div class="commentsInfo">
                <div class="author"><a href="#">' . $row["nama"] . '</a></div>
                <div class="date"><a href="#">' . $row["waktu"] . '</a></div>
            </div>
            <p class="expert">' . $row["isi"] . '</p>
        </div>
        <div class="" align="right">
        <button type="button" class="btn btn-primary reply" id="' . $row["id_komen"] . '">Reply</button>
      </div>
       </li>
       </lu>              
    </div>
    </div>';
    $output .= ambil_reply($db1, $row["id_komen"]);
}

echo json_encode([$output]);


function ambil_reply($db1, $reply = 0, $marginleft = 0)
{
    $output = '';
    $query = "SELECT * FROM komen WHERE reply=?";
    $mesketch = $db1->prepare($query);
    $mesketch->bind_param("s", $reply);
    $mesketch->execute();
    $res1 = $mesketch->get_result();

    $count = $res1->num_rows;
    if ($reply == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 48;
    }

    $tingkat = $marginleft / 48 + 1;

    if ($count > 0) {
        while ($row = $res1->fetch_assoc()) {
            $output .= '
            <div class="entriesContainer">
            <div class="comment" style="margin-left:' . $marginleft . 'px">
            <ul class="comments-list clearfix">
                                <li>
        <div class="img">
        <i class="bi bi-person-fill"></i>
        </div>
        <div class="commentContent">
            <div class="commentsInfo">
                <div class="author"><a href="#">' . $row["nama"] . '</a></div>
                <div class="date"><a href="#">' . $row["waktu"] . '</a></div>
            </div>
            <p class="expert">' . $row["isi"] . '</p>
        </div>';

            if ($tingkat < 4) {
                $output .= '
                <div class="" align="right">
                <button type="button" class="btn btn-primary reply" id="' . $row["id_komen"] . '">Reply</button> 
                </div>';
            }

            $output .= '  
            </li>
            </ul>  
          </div>
          </div>
      ';
            $output .= ambil_reply($db1, $row["id_komen"], $marginleft);
        }
    }

    return $output;
}
