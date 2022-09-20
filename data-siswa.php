<?php
        include 'koneksi.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Pustaka Online</title>
    </head>
    <body>
    <div class="container">
        <div class="sidebar">
            <h3><span class="logo">PUSTAKA</span></h3>
            <div class="menu">
                <div class="button">
                    <p><a href="data-siswa.php">Data Siswa</a></p>
                </div>
                <div class="button">
                    <p><a href="data-buku.php">Data Buku</a></p>
                </div>
            </div>
        </div>

        <div class="contain">
            <div class="header">
                <h1>ADMINISTRASI SISWA</h1>
            </div>
            
            <div class="link_tmbh">
                <h4> <a href="tambah-siswa.php">[+] Tambah Data</a> </h4>
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

                                    <td style="text-align: center;"><a href="form-edit.php?NIS=<?=$s['NIS']?>" id=a1>Edit</a> 
                                                                    <a href="hapus.php?NIS=<?=$s['NIS']?>" id= a2>Hapus</a></td>
                                </tr>
                            
                        <?php
                            }
                        ?>
                        
                </table>
            </div>
        </div>
    </div>
</body>
</html>