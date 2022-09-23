<?php
    include 'koneksi.php';

    if (isset($_POST['proses'])) {
        
        $id= $_POST['id'];
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $pengarang =$_POST['pengarang'];
        $tahun =$_POST['tahun'];

        $sql = "UPDATE buku SET judul='$judul', penerbit='$penerbit', pengarang='$pengarang', tahun='$tahun' WHERE id_buku=$id";

        $query = mysqli_query($connect, $sql);

        if ($query) {
            header ('Location: data-buku.php');
        } else {
            header ('Location: edit-buku.php?status=gagal');
        }
    }
?>