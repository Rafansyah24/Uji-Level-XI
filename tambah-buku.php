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


        <div class="content-tambah">
            <!-- HEADER -->
            <div class="header">
                <h1>PENAMBAHAN BUKU</h1>
            </div>
            <!-- HEADER -->


            <!-- TABLE INPUT -->
            <table>
                <form action="buku.php" method="post">
                    <tr>
                        <td>ID</td>
                        <td><input required="required" type="number" name="id" class="input"></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><input required="required" type="text" name="judul" class="input"></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><input required="required" type="text" name="penerbit" class="input"></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><input required="required" type="text" name="pengarang" class="input"></td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td><input required="required" type="number" name="tahun" class="input"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" class="submit" name="proses" value="Tambah">
                        </td>
                    </tr>
                </form>
            </table>
            <!-- TABLE INPUT -->
        </div>
    </div>
</body>

</html>