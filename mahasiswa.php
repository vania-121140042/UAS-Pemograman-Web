<?php
require '../Lanjutan.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM mahasiswa
          WHERE 
          nim LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' OR
          kodeprodi LIKE '%$keyword%' OR
          umur LIKE '%$keyword%' OR
          status LIKE '%$keyword%' OR
        ";
$mahasiswa = query($query);
?>

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

