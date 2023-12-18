# UAS-Pemograman-Web
Ujian Akhir Semester 

nama : Vania Angelica Kusuma Putri Nababan

nim  : 121140042

kelas  : RA


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
bagian code diatas merupakan bagian halaman web, yang dimana berisi tabel nama-nama mahasiswa yang telag dicantumkan pada 
database atau yang ditambahkan melalui web sendiri. 

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
code diatas untuk menampilkan data yang berada di database. Selain itu dibagain ini juga terdapat fitur update dan delete 

</body>
</html>

<?php
//membuat koneksi dan querry
$conn = mysqli_connect("localhost", "root", "", "tugasminggu7");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
code ini berfungsi untuk menghubungkan code yang telah kita buat dengan database 
