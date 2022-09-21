<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fcf02eb2a6.js" crossorigin="anonymous"></script>
    <title>Pustaka Online</title>
    <link rel="stylesheet" href="style.css">
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


            <div class="content-tambah">
            <div class="header">
                <h1>PENAMBAHAN SISWA</h1>
            </div>
                <table>
                    <form action="tambah.php" method="post">
                        <tr>
                            <td>NIS</td>
                            <td><input type="number" name="NIS" class="input"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" class="input"></td>
                        </tr>
                        <tr>
                            <td>No.Telepon</td>
                            <td><input type="number" name="no_telepon" class="input"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" class="text-area" cols="10" rows="5"></textarea></td>
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