<?php
    include 'koneksi.php';
    $sql= mysqli_query($connect, "SELECT * FROM buku WHERE  id_buku='$_GET[id_buku]'");
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
                    <form action="edit-buku.php" method="post">
                        <tr>
                            <td>ID</td>
                            <td><input type="number" name="id" class="input" value="<?= $data['id_buku'];?>"></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><input type="text" name="judul" class="input" value="<?= $data['judul'];?>"></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td><input type="text" name="penerbit" class="input" value="<?= $data['penerbit'];?>"></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td><input type="text" name="pengarang" class="input" value="<?= $data['pengarang'];?>"></td>
                        </tr>
                        <tr>
                            <td>Tahun Terbit</td>
                            <td><input type="number" name="tahun" class="input" value="<?= $data['tahun'];?>"></td>
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