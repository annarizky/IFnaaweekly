<?php
    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa) ///menghasilkan data dalam wadah

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
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


        <H3>Data Mahasiswa</H3>
        <a href="inputdata.php">
            <button>Tambah Data</button>
        </a>
        <br>
        <br>

        <table border="1" cellspacing="0" cellpadding="5px" cellpadding="10px">
            <tr>
                <th > Nomor </th>
                <th > Nama </th>
                <th > Nim </th>
                <th > jurusan </th>
                <th > email </th>
                <th >No.Hp</th>
                <th >Photo</th>
                <th >aksi</th>
                <!-- <th> baris 1, kolom 2</th> -->
            </tr>

            <?php
            $no = 1;
            foreach($mahasiswas as $mhs)
                {
            ?>
            <tr>
                <td align="center"><?= $no ?></td>
                <td><?php echo $mhs[1] ?></td>
                <td align="center"><?= $mhs[2] ?></td>
                <td align="center"><?= $mhs[3] ?></td>
                <td align="center"><?= $mhs[4] ?></td>
                <td ><?= $mhs[5] ?></td>
                <td><img src="assets/image/<?= $mhs[6] ?>" width="70px"></td>
            <td>
                <a href="ubahdata.php" stlye=""><button>Edit</button></a> 
                <a href="hapusdata.php" ><button>Hapus</button></a>
            </td>
            </tr>
            <?php
            $no++;
                }
            ?>
        </table>

</body>
</html>