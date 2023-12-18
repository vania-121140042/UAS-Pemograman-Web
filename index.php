<?php
require 'Lanjutan.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Pemograman WEB</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Daftar Mahasiswa Barnard College</h1>
    <a href ="tambahdata.php" class="satu">Tambah Data </a>
    
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kode Prodi</th>
            <th>Umur</th>
            <th>Status</th>
            <th>Pilih</th>
        </tr>

        <?php foreach ($mahasiswa as $row):?>
         <tr>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kodeprodi']; ?></td>
            <td><?= $row['umur']; ?></td>
            <td><?= $row['status']; ?></td>
            <td>
                <a href="ubahdata.php?nim=<?= $row["nim"]; ?>">update</a> || 
                <a href="hapusdata.php?nim=<?= $row["nim"]; ?>">delete</a>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>