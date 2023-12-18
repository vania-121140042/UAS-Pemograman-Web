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

//hapus data
function hapusdata($nim){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = $nim");

    return mysqli_affected_rows($conn);
}

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

//cari data
function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
              WHERE 
              nim LIKE '%$keyword%' OR
              nama LIKE '%$keyword%' OR
              kodeprodi LIKE '%$keyword%' OR
              ";
    return query($query);
}
?>


