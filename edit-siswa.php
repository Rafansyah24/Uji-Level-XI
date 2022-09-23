<?php
    include 'koneksi.php';

    if (isset($_POST['proses'])) {

        $nis = $_POST ['NIS'];
        $nama = $_POST ['nama'];
        $no_tlp = $_POST ['no_telepon'];
        $alamat = $_POST ['alamat'] ;
    
        $sql = "UPDATE siswa SET nama='$nama', no_telepon='$no_tlp', alamat='$alamat' WHERE NIS=$nis";
    
        $query = mysqli_query ($connect, $sql);
    
        if($query){
            header('Location: data-siswa.php');
        }else{
            header('Location: edit-siswa.php?status=gagal');
        }
    }
?>