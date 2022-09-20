<?php
    include 'koneksi.php';

    $id = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_buku=$id";

    $query = mysqli_query($connect, $sql);

    if($query){
        header ('Location: data-buku.php');
    } else {
        header ('Location: hapus-buku.php?status=gagal');
    }
?>