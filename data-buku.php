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
                <h1>ADMINISTRASI BUKU</h1>
            </div>
            
            <div class="link_tmbh-buku">
                <h4> <a href="tambah-buku.php">[+] Tambah Data</a> </h4>
            </div>
            <div class="table-buku">
                <table cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Penerbit</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Action</th>
                        </tr>


                        <?php
                            $sql = "SELECT * FROM buku";
                            $query = mysqli_query($connect, $sql);
                            while ($b = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td style="text-align: center;"><?=$b['id_buku']?></td>
                                    <td style="text-align: center;"><?=$b['judul']?></td>
                                    <td style="text-align: center;"><?=$b['penerbit']?></td>
                                    <td style="text-align: center;"><?=$b['pengarang']?></td>
                                    <td style="text-align: center;"><?=$b['tahun']?></td>

                                    <td style="text-align: center;"><a href="form-edit-buku.php?id_buku=<?=$b['id_buku']?>" id=a1>Edit</a> 
                                                                    <a href="hapus-buku.php?id_buku=<?=$b['id_buku']?>" id= a2>Hapus</a></td>
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