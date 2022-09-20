<?php
    include 'koneksi.php';
    $sql= mysqli_query($connect, "SELECT * FROM siswa WHERE NIS='$_GET[NIS]'");
    $data= mysqli_fetch_array ($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustaka Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="sidebar">
            <h3><span class="logo"><a href="index.php" style ="text-decoration: none ; color: #312c38;">PUSTAKA</a></span></h3>
            <div class="menu">
                <div class="button">
                    <p><a href="data-siswa.php">Data Siswa</a></p>
                </div>
                <div class="button">
                    <p><a href="data-buku.php">Data Buku</a></p>
                </div>
            </div>
        </div>


            <div class="content-tambah">
            <div class="header">
                <h1>PENAMBAHAN SISWA</h1>
            </div>
                <table>
                    <form action="edit-siswa.php" method="post">
                        <tr>
                            <td>NIS</td>
                            <td><input  type="number" name="NIS" class="input" value="<?= $data['NIS'];?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input  type="text" name="nama" class="input" value="<?= $data['nama'];?>"></td>
                        </tr>
                        <tr>
                            <td>No.Telepon</td>
                            <td><input  type="number" name="no_telepon" class="input"value="<?= $data['no_telepon'];?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" class="text-area" cols="10" rows="5"><?= $data['alamat'];?></textarea></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" class="submit" name="proses" value="Tambah">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
</div>
</body>
</html>