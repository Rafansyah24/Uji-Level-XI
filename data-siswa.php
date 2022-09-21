<?php
        include 'koneksi.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/fcf02eb2a6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Pustaka Online</title>
    </head>
    <body>
    <div class="container">
        <div class="sidebar">
            <h3><span class="logo">PUSTAKA</span></h3>
            <div class="menu">
                <div class="button">
                <i class="fa-solid fa-user"></i>
                    <p><a href="data-siswa.php">Data Siswa</a></p>
                </div>
                <div class="button">
                <i class="fa-sharp fa-solid fa-book"></i>
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

            <ul>
                <li><a href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
            </ul>

            <div class="table">
                <table cellspacing="0">
                        <tr>
                            <div class="table-row">
                                <th style="border-top-left-radius: 10px;">NIS</th>
                                <th>Nama</th>
                                <th>No.Telepon</th>
                                <th>Alamat</th>
                                <th style="border-top-right-radius: 10px;">Action</th>
                            </div>
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

                                    <td style="text-align: center;"><a href="form-edit.php?NIS=<?=$s['NIS']?>" id=a1><i class="fa-solid fa-pen-to-square"></i></a> 
                                                                    <a href="hapus.php?NIS=<?=$s['NIS']?>" id= a2><i class="fa-solid fa-trash"></i></a></td>
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