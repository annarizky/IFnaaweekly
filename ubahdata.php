<?php

    require "fungsi.php";

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs = tampildata($query)[0];



    if(isset($_POST["kirim"]))
        {
        
        if(ubahdata($_POST, $id )> 0)
        {
            echo "<script>
            alert ('Data Berhasil Diubah!');
            window.location.href='mahasiswa.php';
            </script>";

        }
        else
        {
            echo "<script>
                alert ('Data gagal Diubah!');
                window.location.href ='mahasiswa.php';
                </script>";
        }
        }
?>


<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa | WEB INFORMATIKA 2026</title>
</head>
<body>
    <h1>WEB INFORMATIKA NAA 2026</h1>
        <hr>
        <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <th>
                    <a href="index.php">Home</a></th>
                <th>
                    <a href="profile.php"> Profile</a></th>
                <th>
                    <a href="kontak.php">Contact</a></th>
                <th> <a href="mahasiswa.php">Data Mahasiswa</a></th>
            </tr>
        </table>
        <h2>Ubah Data Mahasiswa</h2>
        <form action="" method="post">
            <table border="0" cellspacing="5px">
                <tr>
                    <td> <label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $mhs [1]?>" required /></td>
                </tr>

                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="number" name="nim" id="NIM" value="<?= $mhs [2]?>" required ></td>
                </tr>
           
                <tr>
                    <td> <label for="Prodi">Program Studi</label></td>
                    <td>:</td>
                    <td> <input type="text" name="jurusan" id="prodi" value="<?= $mhs [3]?>" required></td>
                </tr>
                
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td> <input type="email" name="email" id="email" value="<?= $mhs [4]?>"></td>
                </tr>
           
                <tr>
                    <td><label for="nohp">No HP</label></td>
                    <td>:</td>
                    <td> <input type="number" name="no_hp" id="nohp" value="<?= $mhs [5]?>"></td>
                </tr>

                <tr>
                    <td><label for="foto">Foto</label></td>
                    <td>:</td>
                    <td> <input type="text" name="foto" id="foto" value="<?= $mhs [6]?>"></td>
                </tr>
        </table> <br>
        <button type="submit" name="kirim" > ubah data </button>
        </form> 

        
</body>
</php>