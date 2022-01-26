<?php
 include "../config.php";

    $id_siswa    = $_POST['id_siswa'];
    $nilai       = $_POST['nilai'];


    mysqli_query($koneksi, "UPDATE data_nilai, data_siswa SET data_nilai.nilai='$nilai' WHERE id_siswa='$id_siswa'");
   
    header('Location: ../nilai/nilai.php');
?>