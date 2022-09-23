<?php
    include 'koneksi.php';

    if (isset($_POST['proses'])) {
        
        $id= $_POST['id'];
        $judul= $_POST['judul'];
        $penerbit= $_POST['penerbit'];
        $pengarang= $_POST['pengarang'];
        $tahun= $_POST['tahun'];

        $sql = "INSERT INTO buku(id_buku, judul, penerbit, pengarang, tahun) VALUES ('$id', '$judul', '$penerbit', '$pengarang', '$tahun')";

        $hasil =mysqli_query($connect, $sql);

        if($hasil) {
            header ('Location: data-buku.php');
        }else {
            header ('Location: buku.php?status=gagal');
        }
    }
?>