<?php

require 'Lanjutan.php';

$nim = $_GET["nim"];
    if(hapusdata($nim)>0){
        echo"
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php';
            </script>
";
}

?>