<?php
    include 'connect.php';

    $id = $_GET['kirim_id'];

    $queriku = pg_query("delete from komentar where id='$id'");
        if($queriku == true){
            echo "Data berhasil dihapus, silahkan lihat daftar <a href = 'comment.php'>komentar</a>";
        } else {
            echo "error";
        }
?>