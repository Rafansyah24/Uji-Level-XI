<?php
include 'koneksi.php';

    if (isset($_POST['proses'])) {
        $nis = $_POST ['NIS'];
        $nama = $_POST ['nama'];
        $telepon = $_POST ['no_telepon'];
        $alamat = $_POST ['alamat'];
    
        $sql = "INSERT INTO siswa (NIS, nama, no_telepon, alamat) VALUES ('$nis', '$nama', '$telepon', '$alamat')";
    
        $query = mysqli_query($connect, $sql);
        
        if($query){
            header('Location: data-siswa.php');
        }else{
            header('Location: tambah.php?status=gagal');
        }
    
    }
?>