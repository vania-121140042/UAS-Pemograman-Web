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
bagian code diatas untuk menampilkan data yang berada di database. Selain itu dibagain ini juga terdapat fitur update dan delete yang jika di klik 
akan link ke halaman mengubah data dan menghapus data.

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
bagian code ini berfungsi untuk menghubungkan code yang dengan database yang telah kita buat sebelumnya. 
$conn = $conn = mysqli_connect("localhost", "root", "", "tugasminggu7"); jika akan menghosting untuk username dan password perlu disesuaikan. 

//tambah data
function tambahdata($data){
    global $conn;
    $nim = $data["nim"];
    $nama = $data["nama"];
    $kodeprodi = $data["kodeprodi"];
    $umur = $data["umur"];
    $status = $data["status"];

    $query = "INSERT INTO mahasiswa 
              VALUES ('$nim', '$nama', '$kodeprodi', '$umur', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
bagian pada code ini berfungsi untuk mengambil data dari inputan user. 
code ini berfungsi untuk menambahkan data yang diinput ke database -> $query = "INSERT INTO mahasiswa  VALUES ('$nim', '$nama', '$kodeprodi', '$umur', '$status')";
lalu akan di tampilkan pada tabel melalui code ini -> mysqli_query($conn, $query);
return mysqli_affected_rows($conn);

//hapus data
function hapusdata($nim){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = $nim");

    return mysqli_affected_rows($conn);
}
bagian ini berfungsi untuk menghapus data yang telah di tampilkan atau di input user.
code ini berfungsi untuk menghapus data yang berada pada database -> mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = $nim");

//ubah data
function ubahdata($data){
    global $conn;

    $nim = $data["nim"];
    $nama = $data["nama"];
    $kodeprodi = $data["kodeprodi"];
    $umur= $data["umur"];
    $status = $data["status"];

    $query = "UPDATE mahasiswa SET
              nim = $nim,
              nama = '$nama',
              kodeprodi = '$kodeprodi',
              umur = '$umur',
              status = '$status'
            WHERE nim = $nim
            ";
            
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
bagian ini berfungsi untuk menampilkan data yang sudah diinput sebelumnya, lalu akan diubah dengan menarik data 
baru.
code ini berfungsi untuk menambahkan data yang berada pada database ->  $query = "UPDATE mahasiswa SET
              nim = $nim,
              nama = '$nama',
              kodeprodi = '$kodeprodi',
              umur = '$umur',
              status = '$status'
            WHERE nim = $nim
            ";

if(isset($_POST["submit"])){
  if(tambahdata($_POST)>0){
    echo"
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
  }else{
    echo"
        <script>
             alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
    </script>
    ";
  }
}
?>
bagian code ini berfungsi ketika tombol submit di klik maka dia akan memberikan nontifikasi 
'data berhasil ditambahkan' jika berhasil ditambahkan dan akan memberikan nontifikasi 'data gagal ditambahkan' 
jika tidak berhasil ditambahkan.

