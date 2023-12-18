<?php

require 'Lanjutan.php';

$nim= $_GET["nim"];
$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];


if(isset($_POST["submit"])){
  if(ubahdata($_POST)>0){
    echo"
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>
    ";
  }else{
    echo"
        <script>
             alert('Data Gagal Diubah');
            document.location.href = 'index.php';
    </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
   <form action="" method="post">
            <label for="nim" >Masukkan Nim Mahasiswa : </label>
            <input type ="text" name="nim" id="nim" placeholder="ex: budi setiawan..." 
            required value="<?= $mhs["nim"]; ?>">
            <br><br>

            <label for="nama" >Masukkan Nama Mahasiswa : </label>
            <input type ="text" name="nama" id="nama" placeholder="ex: 1211.." 
            required value="<?= $mhs["nama"]; ?>">
            <br><br>

            <label for="kodeprodi" >Masukkan Prodi Mahasiswa : </label>
            <input type ="text" name="kodeprodi" id="kodeprodi" placeholder="ex: IF..." 
            required value="<?= $mhs["kodeprodi"]; ?>">
            <br><br>

            <label for="umur" >Masukkan Umur Mahasiswa : </label>
            <input type ="text" name="umur" id="umur" placeholder="ex: 20..." 
            required value="<?= $mhs["umur"]; ?>">
            <br><br>

            <label for="status" >Masukkan Status Mahasiswa : </label>
            <input type ="text" name="status" id="status" placeholder="ex: aktif/tidak aktif..." 
            required value="<?= $mhs["status"]; ?>">
            <br><br>
   
            <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>