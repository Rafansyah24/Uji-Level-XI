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

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/fcf02eb2a6.js" crossorigin="anonymous"></script>
    <title>Pustaka Online</title>
</head>

<body>
    <div class="container">
        <!-- SIDE BAR -->
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
        <!-- SIDE BAR -->

        <div class="contain">

            <!-- HEADER -->
            <div class="header">
                <h1>ADMINISTRASI BUKU</h1>
            </div>
            <!-- HEADER -->


            <!-- Tombol Tambah -->
            <div class="link_tmbh-buku">
                <h4> <a href="tambah-buku.php">[+] Tambah Data</a> </h4>
            </div>
            <!-- Tombol Tambah -->


            <!-- Search BAR -->
            <div class="search">
                <form action="" method="post" class="search-bar">
                    <button type="submit" name="submit">search</button>
                    <input type="text" name="cari" autocomplete="off">
                </form>
            </div>
            <!-- Search BAR -->

            <!-- PAGING -->
            <div class="paging">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                    <li><a href="data-buku.php" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                </ul>
            </div>
            <!-- PAGING -->

            <!-- TABLE DATA -->
            <div class="table-buku">
                <table cellspacing="0">
                    <tr>
                        <th style="border-top-left-radius: 10px;">ID</th>
                        <th>Judul</th>
                        <th>Penerbit</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th style="border-top-right-radius: 10px;">Action</th>
                    </tr>


                    <?php
                            $sql = "SELECT * FROM buku";
                            $query = mysqli_query($connect, $sql);

                            if(isset($_POST['submit'])){
                                $cari =$_POST['cari'];
                                $query =mysqli_query($connect, "SELECT * FROM buku WHERE id_buku LIKE '%$cari%' OR judul LIKE '%$cari%' OR penerbit LIKE '%$cari%' OR pengarang LIKE '%$cari%' OR tahun LIKE '%$cari%'");
                            }else{
                                $query =mysqli_query($connect, "SELECT * FROM buku");
                            }

                            while ($b = mysqli_fetch_array($query)) {
                        ?>
                    <tr>
                        <td style="text-align: center;"><?=$b['id_buku']?></td>
                        <td style="text-align: center;"><?=$b['judul']?></td>
                        <td style="text-align: center;"><?=$b['penerbit']?></td>
                        <td style="text-align: center;"><?=$b['pengarang']?></td>
                        <td style="text-align: center;"><?=$b['tahun']?></td>

                        <td style="text-align: center;">
                            <a href="form-edit-buku.php?id_buku=<?=$b['id_buku']?>" id=a1><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="hapus-buku.php?id_buku=<?=$b['id_buku']?>" id=a2><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php
                            }
                        ?>

                </table>
            </div>
            <!-- TABLE DATA -->
        </div>
    </div>
</body>

</html>