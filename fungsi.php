<?php
 $koneksi = mysqli_connect("localhost", "root", "", "ifnaaweekly");

 function tampildata($query)
 {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    $rows = [];

    while($row = mysqli_fetch_row($result))
        {
            $rows[] = $row;
        }
        return $rows;
 }
  
 function tambahdata($data)
 {
             global $koneksi;
             $nama = htmlspecialchart $data["nama"];
            $nim = htmlspecialchart $data["nim"];
            $jurusan = htmlspecialchart $data["jurusan"];
            $email = htmlspecialchart $data["email"];
            $no_hp = htmlspecialchart $data["no_hp"];
            $foto = htmlspecialchart$data["foto"];

            $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto)                                                       
            VALUES ('$nama', '$nim','$jurusan','$email','$no_hp','$foto')";

             mysqli_query($koneksi, $query);

             return mysqli_affected_rows($koneksi);
 }
 ?>
