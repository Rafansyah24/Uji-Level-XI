<?php
    include 'koneksi.php';

    $nis= $_GET ['NIS'];

    $sql="DELETE from siswa WHERE NIS=$nis";

    $query=mysqli_query($connect, $sql);

    if($query){
        header ('Location: data-siswa.php');
    }else {
        echo "Hapus data gagal";
    }
?>