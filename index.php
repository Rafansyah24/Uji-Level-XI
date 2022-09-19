<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Pustaka Online</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h3><span class="logo"><a href="index.php" style ="text-decoration: none ; color: #E2DCC8;">PUSTAKA</a></span></h3>
            <div class="menu">
                <div class="button">
                    <p><a href="data-siswa.php">Data Siswa</a></p>
                </div>
                <div class="button">
                    <p><a href="data-buky.php">Data Buku</a></p>
                </div>
            </div>
        </div>

        <div class="contain">
            <div class="header">
                <h1>ADMINISTRASI SISWA</h1>
            </div>
            
            <div class="link_tmbh">
                <h4> <a href="tambah-siswa.html">[+] Tambah Data</a> </h4>
            </div>
            <div class="table">
                <table cellspacing="0">
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>No.Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>


                        <?php
                            $sql = "SELECT * FROM siswa";
                            $query = mysqli_query($connect, $sql);
                            while ($s = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td style="text-align: center;"><?=$s['NIS']?></td>
                                    <td style="text-align: center;"><?=$s['nama']?></td>
                                    <td style="text-align: center;"><?=$s['no_telepon']?></td>
                                    <td style="text-align: center;"><?=$s['alamat']?></td>
                                    <td style="text-align: center;"><a href="?editSiswa=<?=$s['NIS']?>">Edit</a> | <a href="?hapusSiswa=<?=$s['NIS']?>">Hapus</a></td>
                                </tr>
                            
                        <?php
                            }
                        ?>
                </table>
            </div>
        </div>
    </div>

<!-- TABLE -->






<!-- TABLE -->
</body>
</html>